<?php
session_start();
$mysqli = include __DIR__ . '/../config/conect.php';
header('Content-Type: application/json; charset=UTF-8');


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome=$_POST["nome"] ?? 'name';
    $nick=$_POST["nick"] ?? 'nick';
    $email=$_POST["email"] ?? '';
    $telefone=$_POST["telefone"] ?? '';
    $senha="teste";
    $checkbox=$_POST["checkbox"] ?? '';
    $data_nascimento = $_POST["data_nascimento"] ?? '';
    $data_de_cadastro = date("Y-m-d H:i:s");
    $ativo = 1;

    $select = $mysqli->prepare("SELECT email_usuario, telefone FROM user WHERE email_usuario = ? OR telefone = ?");
    $select->bind_param("ss", $email, $telefone );
    $select->execute();
    $result = $select->get_result();
    if($result->num_rows > 0){
        echo json_encode(['ok' => false, 'message' => 'Email ou telefone já cadastrados']);
        exit;
    }

    $stmt = $mysqli->prepare("SELECT nick FROM user WHERE nick = ?");
    $stmt->bind_param("s", $nick);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        echo json_encode(['ok' => false, 'message' => 'Nick já cadastrado']);
        exit;
    }
    if(!empty($checkbox)){
        $senha_crip = password_hash($senha, PASSWORD_BCRYPT);
        $sql = $mysqli->prepare("INSERT INTO user(nome, nick, telefone, email_usuario, data_nascimento, senha, data_de_cadastro, ativo)
        VALUES (?,?,?,?,?,?,?,?)");
        $sql-> bind_param("sssssssi", $nome, $nick, $telefone, $email, $data_nascimento, $senha_crip, $data_de_cadastro, $ativo);
        $sql->execute();
    }else{
        echo json_encode(['ok' => false, 'message' => 'Necessário aceitar os termos de uso']);
       exit;
    }
 }

 echo json_encode(['ok' => true, 'message' => 'Cadastro realizado com sucesso!']);



?>
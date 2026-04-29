<?php
session_start();
$mysqli = include __DIR__ . '/../config/conect.php';
header('Content-Type: application/json; charset=UTF-8');


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome=$_POST["nome"] ?? 'name';
    $nick=$_POST["nick"] ?? 'nick';
    $email=$_POST["email"] ?? null;
    $telefone=$_POST["telefone"] ?? null;
    $senha=$_POST["senha"] ?? null;
    $checkbox=$_POST["checkbox"] ?? null;
    $data_nascimento = $_POST["data_nascimento"] ?? null;
    $data_de_cadastro = date("Y-m-d h:i:s");

    if(isset($checkbox)){
        $senha_crip = password_hash($senha, PASSWORD_BCRYPT);
        $sql = $mysqli->prepare("INSERT INTO user(nome, nick, telefone, email_usuario, data_nascimento, senha, data_de_cadastro)
        VALUES (?,?,?,?,?,?,?)");
        $sql-> bind_param("sssssss", $nome, $nick, $telefone, $email, $data_nascimento, $senha_crip, $data_de_cadastro);
        $sql->execute();
    }else{
        echo json_encode(['ok' => false, 'message' => 'Necessário aceitar os termos de uso']);
       exit;
    }
 }

 echo json_encode(['ok' => true, 'message' => 'Cadastro realizado com sucesso!']);



?>
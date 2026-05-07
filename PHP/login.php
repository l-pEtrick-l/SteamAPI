<?php
session_start();
$mysqli = include __DIR__ . '/../config/conect.php';
header('Content-Type: application/json; charset=UTF-8');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $senha = $_POST["senha"] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['ok' => 'false', 'message' => 'Email Invalido']);
        exit;
    }
    if(!empty($email) && !empty($senha)){
    $sql = $mysqli->prepare("SELECT id_usuario, senha, nome, nick FROM user WHERE email_usuario = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows == 0){
        sleep(1);
        echo json_encode(['ok' => 'false', 'message' => 'Usuario ou senha incorretos']);
        exit;
    }
    $user = $result->fetch_assoc();
    if(password_verify($senha, $user['senha'])){
        $_SESSION['id_usuario'] = $user['id_usuario'];
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['nick'] = $user['nick'];
        echo json_encode(['ok' => 'true', 'message' => 'Login realizado com sucesso!']);
        exit;
    }else{
        sleep(1);
         echo json_encode(['ok' => 'false', 'message' => 'Usuario ou senha incorretos']);
        exit;
    }
    }
}





?>
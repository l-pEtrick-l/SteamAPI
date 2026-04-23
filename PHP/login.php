<?php
session_start();
$mysqli = include __DIR__ . '/../config/conectar.php';
header('Content-Type: application/json; charset=UTF-8');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"] ?? null;
    $senha = $_POST["senha"] ?? null;

    $sql = $mysqli->prepare("SELECT id_usuario, senha, nome FROM user WHERE email_usuario = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();
    if($result->num_rows == 0){
        echo json_encode(['ok' => 'false', 'message' => 'Usuario ou senha incorretos']);
        exit;
    }
    $user = $result->fetch_assoc();
    if(password_verify($senha, $user['senha'])){
        
    }
}





?>
<?php
session_start();
$mysqli = include __DIR__ . '/../config/conectar.php';
$mysqli->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
header('Content-Type: application/json; charset=UTF-8');



?>
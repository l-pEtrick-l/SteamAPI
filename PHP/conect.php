<?php

$host = "sql105.infinityfree.com";
$usuario = "if0_41445530";
$senha = "Rjbk1808";
$banco = "if0_41445530_db_steam";


$conexao = new MYSQLI ("$host", "$usuario", "$senha", "$banco");
$conexao->set_charset("utf8");

if($conexao -> connect_error){
    echo "erro de conexao";
}

return $conexao;

?>
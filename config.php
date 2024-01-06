<?php

$dbHost = 'localhost';
$dbUsername ='root';
$dbPassword = 'Batatinha123,456';
$dbName ='formulario';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword, $dbName);

if ($conexao->connect_error) {

    echo "Erro";
}

else {
    echo "conexao efetuada com sucesso";
}





?>
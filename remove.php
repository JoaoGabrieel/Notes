<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("DELETE FROM anotacoes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}


header("location: notas.php");

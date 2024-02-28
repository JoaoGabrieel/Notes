<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$hora = filter_input(INPUT_POST, 'hora');
$minuto = filter_input(INPUT_POST, 'min');
$nota = filter_input(INPUT_POST, 'msg');
$data = filter_input(INPUT_POST, 'data');
echo $data;

if ($id && $hora && $minuto && $nota && $data) {
    $sql = $pdo->prepare("UPDATE anotacoes SET hora = CONCAT(:hora, ':', :minuto),nota = :nota,dia_mes = :dia_mes WHERE id= :id");
    $sql->bindValue(':hora', $hora);
    $sql->bindValue(':minuto', $minuto);
    $sql->bindValue(':nota', $nota);
    $sql->bindValue(':dia_mes', $data);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: notas.php");
    exit;
} else {
    echo "aqui";
}

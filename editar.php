<?php
require 'config.php';


$anotacoes = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT *FROM anotacoes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if ($sql->rowCount() > 0) {
        $anotacoes = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: notas.php");
        exit;
    }
} else {
    header("Location: notas.php");
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="edita_section">

        <form method="POST" action="editar_action.php">
            <input type="hidden" name="id" value=" <?= $anotacoes['id']; ?>">
            <label>
                <div class="wrapper_alarm">
                    <h1>Editar nota</h1>
                    <img src="imagens/horarios.png" alt="relogio">
                    <form action="notas.php" method="post" autocomplete="on" class="editar_form">
                        <div class="content_alarm">
                            <input id="date" type="date" name="data" required />
                            <div class="colunm_alarm">
                                <select name="hora" required>
                                    <option value="hora" selected hidden>Hora</option>
                                </select>
                            </div>
                            <div class="colunm_alarm">
                                <select name="min" required>
                                    <option value="minuto" selected hidden>Minute</option>
                                </select>
                            </div>
                            <div class="colunm_alarm">
                                <select name="AM/PM" required>
                                    <option value="AM/PM" selected hidden>AM/PM</option>
                                </select>
                            </div>

                            <label for="imsg">Nota</label><br>
                            <textarea name="msg" id="imsg" cols="30" rows="10" placeholder="escreva sua nota aqui..." required></textarea>


                        </div>
                        <button type="submit" class="buttom_careysell">Atualizar</button>
                    </form>
                </div>
            </label>
        </form>
    </section>
</body>

</html>


<script src="notas.js"></script>
<?php
include_once('testlogin.php');
include_once('config.php');
if (isset($_POST['msg'])) {


    $data =  $_POST['data'];
    $hora = $_POST['hora'];
    $minuto = $_POST['min'];
    $am_pm = $_POST['AM/PM'];
    $nota = $_POST['msg'];



    // Formata a hora e o minuto em um formato reconhecido pelo MySQL
    $horario = date('H:i', mktime($hora, $minuto));



    $sql = "INSERT INTO anotacoes(hora,nota,dia_mes) VALUES ('$horario', '$nota', '$data');";

    //$result =mysqli_query($conexao,$sql);
    $result = $pdo->query($sql);
    header('Location: notas.php');
}

$lista = [];
$sql = $pdo->query("SELECT * FROM anotacoes");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
// var_dump($lista)

date_default_timezone_set('America/Sao_Paulo');

$hoje = date('Y-m-d');

foreach ($lista as $key => $anotacao) {
    if ($anotacao['dia_mes'] == $hoje) {
    }
}







?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Notes App in JavaScript</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconscout Link For Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <section class="cedrico">
        <header class=" cabecalho">
            <nav class="cabecalho_menu">
                <li><a class="cabecalho_menu_link" href="index_note.html"><i class='bx bx-home bx-md'></i></a></li>
                <li><a class="cabecalho_menu_link" href="notas.php"><i class='bx bx-note bx-md'></i></a> </li>
            </nav>
        </header>
        <div class="popup_box">
            <div class="popup">

                <div class="content_note">
                    <header>
                        <p></p>



                        <i class="uil uil-times close"></i>
                    </header>
                    </nav>

                    <form action="#">



                        <div class="row_title">
                            <label>Title</label>
                            <input type="text" spellcheck="false">
                        </div>
                        <div class="row_description">
                            <label>Description</label>
                            <textarea spellcheck="false"></textarea>
                        </div>
                        <button></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <li class="add-box">
                <div onclick="abrirModal()" class="icon"><i class='bx bx-plus bx-md'></i></div>

                <p>Add new note</p>
        </div>


        <div class="janelaModal" id="janelaModal">
            <div class="modal">
                <button class="fechar" id="fechar">X</button>

                <div class="wrapper_alarm">
                    <img src="imagens/horarios.png" alt="relogio">
                    <h1>00:00:00PM</h1>
                    <form action="notas.php" method="post" autocomplete="on">
                        <div class="content_alarm">
                            <input id="date" type="date" name="data" />
                            <div class="colunm_alarm">
                                <select name="hora">
                                    <option value="hora" selected hidden>Hora</option>
                                </select>
                            </div>
                            <div class="colunm_alarm">
                                <select name="min">
                                    <option value="minuto" selected hidden>Minute</option>
                                </select>
                            </div>
                            <div class="colunm_alarm">
                                <select name="AM/PM">
                                    <option value="AM/PM" selected hidden>AM/PM</option>
                                </select>
                            </div>

                            <label for="imsg">Nota</label><br>
                            <textarea name="msg" id="imsg" cols="30" rows="10" placeholder="escreva sua nota aqui..."></textarea>


                        </div>
                        <button type="submit" class="buttom_careysell">SET NOTE</button>
                    </form>
                </div>



            </div>

        </div>
        <?php
        foreach ($lista as $notas) { ?>
            <div class="notinhas">
                <p><?php echo $notas['nota']; ?></p>
                <p><?php echo $notas['hora']; ?></p>
                <p><?php echo $notas['dia_mes']; ?></p>
                <p>
                    <a href="editar.php?id=<?php echo $notas['id']; ?>">Editar</a>
                    <a href="remove.php?id=<?php echo $notas['id']; ?>">Remover</a>
                </p>
            </div>
        <?php }; ?>



        <script src="notas.js"></script>
        <script src="modal.js"></script>



        <?php

        include_once('testlogin.php');

        ?>
    </section>
</body>

</html>
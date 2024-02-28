<?php
// echo "ronaldo0";
//print_r ($_REQUEST);
// echo $_POST['email'] ;
// echo $_POST['senha'];
if (isset($_POST['email']) && isset($_POST['senha'])) {


    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //  print_r('Email: ' .$email );
    //  print_r('Senha: ' .$senha );

    $sql = "SELECT * FROM usuarios WHERE email= '$email' and senha = '$senha';";

    $result = $pdo->query($sql);
    //  echo"qualquer bosta 3";

    print_r($sql);
    var_dump($result);


    if ($result->rowCount() == 0) {
        header('Location: login.php');
    } else {
        header('Location: notas.php');
    }
}

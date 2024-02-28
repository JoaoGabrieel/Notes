<?php


if (isset($_POST['firstname'])) {

    // print_r('Nome:' . $_POST['Primeiro Nome']);
    // print_r('<br>');
    // print_r('Sobrenome:' . $_POST['Sobrenome']);
    // print_r('<br>');
    // print_r('Email:' . $_POST['E-mail']);
    // print_r('<br>');
    // print_r('Numero:' . $_POST['Celular']);
    // print_r('<br>');
    //print_r('Senha:' . $_POST['Senha']);
    //  print_r('<br>');
    // print_r('Confirmaçao:' . $_POST['Confirme sua Senha']);
    //  print_r('<br>');
    //  print_r('Genero' . $_POST['Genero']);

    include_once('config.php');

    $nome =  $_POST['firstname'];
    $sobrenome = $_POST['lastname'];
    $email = $_POST['email'];
    $celular = $_POST['number'];
    $senha = $_POST['password'];
    $genero = $_POST['gender'];


    $sql = "INSERT INTO usuarios(nome,sobrenome,email,celular,senha,genero) VALUES ('$nome', '$sobrenome', '$email', '$celular', '$senha', '$genero');";

    //$result =mysqli_query($conexao,$sql);
    $result = $pdo->query($sql);
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulario</title>
</head>

<body class="formulario_body">
    <form action="formulario.php" method="POST">
        <div class="container_1">
            <div class="form_image">
                <img src="imagens/Mobile_login-pana.png" alt="">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form_header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                            <form id="forma"></form>
                        </div>
                        <div class="login_buttom">
                            <button><a href="#">Entrar</a></button>
                        </div>
                    </div>
                    <div class="input_group">
                        <div class="input_box">
                            <label for="firstname">Primeiro Nome</label>
                            <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                        </div>

                        <div class="input_box">
                            <label for="lastname">Sobrenome</label>
                            <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                        </div>

                        <div class="input_box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu E-mail" required>
                        </div>

                        <div class="input_box">
                            <label for="number">Celular</label>
                            <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                        </div>

                        <div class="input_box">
                            <label for="password">Senha</label>
                            <input id="password" type="password" name="password" placeholder="Digite seu senha" required>
                        </div>

                        <div class="input_box">
                            <label for="Confirmpassword">Confirme sua Senha</label>
                            <input id="Confirmpassword" type="password" name="Confirmpassword" placeholder="Digite seu senha" required>
                        </div>
                    </div>

                    <div class="gender_inputs">
                        <div class="gender_title">
                            <h6>Genero</h6>
                        </div>

                        <div class="gender_group">
                            <div class="gender_input">
                                <input type="radio" value="F" name="gender" id="gender">
                                <label for="female">Femenino</label>
                            </div>

                            <div class="gender_input">
                                <input type="radio" value="M" name="gender" id="gender">
                                <label for="male">Masculino</label>
                            </div>

                            <div class="gender_input">
                                <input type="radio" value="HELICOPTERO DE COMBATE" name="gender" id="gender">
                                <label for="others">Outros</label>
                            </div>

                            <div class="gender_input">
                                <input type="radio" value="PND" name="gender" id="gender">
                                <label for="none">Prefiro não dizer</label>
                            </div>
                        </div>
                    </div>

                    <div class="continue_buttom">
                        <button type='submit'>Continuar</button>
                    </div>
                </form>
            </div>
        </div>

</body>
<script>
    function logar() {

    }
</script>



</html>
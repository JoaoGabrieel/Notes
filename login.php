<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,300;1,400&display=swap');
</style>
      </style>


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="container_login">
            <div class="wrap_login">
                <form class="login_form" action="testlogin.php" method="post">
                    <span class="login_form_title">
                        Realize o Login
                    </span>
                    
                    <div class="wrap_input margin_top_35 margin_bottom_35">
                    <input placeholder="digite seu email" class="input_form" type="email" name="email" autocomplete="off" required/>
                    </div>

                    <div class="wrap_input margin_bottom_35">
                        <input placeholder="digite sua senha " class="input_form" type="password" name="senha" required/>
                        </div>
                        <div class="container_login_form_btn">
                            <input class="login_form_btn" type="submit" name="submit" value="enviar">
                            </form>
                            </div>

                            <ul class="login_utils">
                                <li class="margin_top_8 margin_bottom_8">
                                    <span class="text_1">
                                        Esqueceu sua
                                    </span>
                                    <a href="#" class="text_2">senha?</a>
                                </li>
                                <li> <span class="text_1">
                                    Não tem conta?
                                </span>
                                <a href="formulario.php" class="text_2">Criar</a>
                            </li>
                            </ul>

                        
                </form>
            </div>
            <img src="imagens/Tablet_login-pana.png"alt="Login"width="300" height="300" class="margin_left_50"/>
        </div>

    </div>
    <script>
        let inputs = document.getElementsByClassName('input_form');
		for (let input of inputs) {
			input.addEventListener("blur", function() {
				if(input.value.trim() != ""){
					input.classList.add("hals_val");
				} else {
					input.classList.remove("hals_val");
				}
			});
		}

    </script>
</body>
</html>
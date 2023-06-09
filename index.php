<?php
 session_start();       
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js" 
        crossOrigin="anonymus">
    </script>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="./controller/valida_login.php" class="sign-in-form" method="post">
                    <h2 class="title">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha">
                    </div>
                    <input type="submit" value="Login" class="btn solid">
                    <!-- Inicio alerta -->
                    <?php
                        //start session
                             
                        if(isset($_SESSION['menssagem'])){
                            $cor = $_SESSION['menssagem']['cor'];
                            $mensagem = $_SESSION['menssagem']['menssagem'];
                    ?>
                     <div style="color:<?= $cor ?>">
                        <?php echo $mensagem;?>
                    </div>
                    <?php unset($_SESSION['menssagem']); } ?>
                    <!-- Fim alerta -->
                    <p class="social-text">Ou entre por uma outra Conta</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="./controller/cadastro_usuario.php" method="post" class="sign-up-form">
                    <h2 class="title">Cadastrar-se</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Telefone" name="Telefone">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome Completo" name="Nome">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-home"></i>
                        <input type="text" placeholder="Endereço" name="Endereço">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="Senha">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn solid">

                    <p class="social-text">Ou registre-se utilizando outra Conta</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo Aqui?</h3>
                    <p>Não perca tempo e faça já o seu cadastro, aproveite descontos imperdíveis com seu passe de primeiro acesso</p>
                    <button class="btn transparent" id="sign-up-btn">Cadastrar</button>
                </div>

                <img src="imagens/jantar.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Ja possui uma conta?</h3>
                    <p>Se ja possui um cadastro em nosso site, não perca tempo e realize já o seu pedido </p>
                    <button class="btn transparent" id="sign-in-btn">Entrar</button>
                </div>

                <img src="imagens/jantar.svg" class="image" alt="">
            </div>

        </div>
    </div>
    <script src="js/form.js"></script>
</body>
</html>
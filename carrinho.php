<?php
require_once('./controller/validar_sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">

    <!-- CSS utilizado -->
    <link rel="stylesheet" href="css/menu_superior.css">
    <link rel="stylesheet" href="css/cesta.css">
    <link rel="stylesheet" href="css/loader.css">

    <!-- Ícones utilizados -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <title>Carrinho</title>
</head>
<body>
    <header>
        <input type="checkbox" id="toggle">
        <nav>
    
          <ul class="nav-list">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cardapio.html">Cardápio</a>
            </li>
            <a class="logo desktop" href="home.php">
              <img src="./imagens/Sonya-Swarm-Fast-Food.ico" alt="">
            </a>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Contato</a>
            </li>
          </ul>
    
          <label class="navbar-toggler" for="toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </label>
    
        </nav>
    
        <div class="logo-mobile">
          <a class="mobile" href="index.html">
            <img src="./imagens/Sonya-Swarm-Fast-Food.ico" alt="">
          </a>
        </div>
    
        <a href="login.html" class="user">
          <i class="ph ph-user"></i>
          <p>Login</p>
        </a>
    
        <a href="carrinho.html" class="carrinho">
          <i class="ph ph-shopping-cart"></i>
          <p>Cesta</p>
        </a>
      </header>

      <div class="container">

        <div class="cart-container">

            <div class="title">

                <h3>Carrinho de Compras</h3>

            </div>

            <div class="cart-body">

                <div class="cart-item">

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>
                            
                            <span></span>
                        
                        </div>

                        <div class="cart-row-cell desc">
                            
                            <h5>Couvert da Casa</h5>

                            <p>#41345755</p>

                        </div>

                        <div class="cart-row-cell quant">

                            <ul>
                                <li><a class="subtrair" href="#">-</a></li>

                                <li>2</li>
                                
                                <li><a class="soma" href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">

                            <p>R$13,87</p>

                        </div>	
                    
                    </div>

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>
                            
                            <span></span>
                        
                        </div>

                        <div class="cart-row-cell desc">
                            
                            <h5>Couvert da Casa</h5>

                            <p>#41345755</p>

                        </div>

                        <div class="cart-row-cell quant">

                            <ul>
                                <li><a class="subtrair" href="#">-</a></li>

                                <li>2</li>
                                
                                <li><a class="soma" href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">

                            <p>R$13,87</p>

                        </div>	
                    
                    </div>

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>
                            
                            <span></span>
                        
                        </div>

                        <div class="cart-row-cell desc">
                            
                            <h5>Couvert da Casa</h5>

                            <p>#41345755</p>

                        </div>

                        <div class="cart-row-cell quant">

                            <ul>
                                <li><a class="subtrair" href="#">-</a></li>

                                <li>2</li>
                                
                                <li><a class="soma" href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">

                            <p>R$13,87</p>

                        </div>	
                    
                    </div>



                </div>
            
            </div>

            <div class="somatorio">


                <div class="totals">
                    
                    <p class="total-label">Subtotal</p>

                    <p class="total-amount">R$13,87</p>

                </div>

                <div class="totals">
                    
                    <p class="total-label">Taxa</p>

                    <p class="total-amount">R$2,00</p>

                </div>


                <div class="totals">
                    
                    <p class="total-label">Total</p>

                    <p class="total-amount">R$15,87</p>

                </div>

                <button class="btn-finalizar">Finalizar Compra</button>

            </div>

        </div>

    </div>

    <!-- Parte do Carregamento -->
<div class="loader-container">
  <img src="imagens/loader-food.gif" alt="">
</div>
<script src="js/load.js"></script>

</body>
</html>
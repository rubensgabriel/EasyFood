<?php
require_once('./controller/validar_sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">

  <!-- CSS utilizado -->
  <link rel="stylesheet" href="css/principal.css">
  <link rel="stylesheet" href="css/section.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/loader.css">
  <link rel="stylesheet" href="css/menu_superior.css">
  <link rel="stylesheet" href="css/card-cliente.css">

  <!-- Ícones utilizados -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <!-- Sliders -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <title>EasyFood</title>
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
      <a class="mobile" href="home.html">
        <img src="./imagens/Sonya-Swarm-Fast-Food.ico" alt="">
      </a>
    </div>

    <a href="login.html" class="user">
      <i class="ph ph-user"></i>
      <p><?php echo strstr($usuario, ' ', true);?></p>
    </a>

    <a href="carrinho.html" class="carrinho">
      <i class="ph ph-shopping-cart"></i>
      <p>Cesta</p>
    </a>
  </header>
  <main>
    <section class="home" id="home">

      <div class="swiper-container home-slider">
  
          <div class="swiper-wrapper wrapper">
              
              <div class="swiper-slide  slide">
                  <div class="content">
                      <span>Promoção do dia</span>
                      <h3>Porçoes</h3>
                      <p>Receba pedidos 100% automatizados e sem pagar comissões para marketplaces. E não se esqueça: se você acabou de começar ou se sua operação está em crescimento, conte com a gente para somarmos nessa caminhada!</p>
                      <a href="" class="btn">Peça Agora</a>
                  </div>
                  <div class="image">
                      <img src="https://images.unsplash.com/photo-1589010588553-46e8e7c21788?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=960&q=80" alt="">
                  </div>
              </div>
  
              <div class="swiper-slide slide">
                  <div class="content">
                      <span>Promoção do dia</span>
                      <h3>Fried chicken</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis unde tempore dignissimos illo et. Error, vero. Reiciendis odit voluptate excepturi libero culpa qui temporibus ipsum dignissimos, provident, molestias ullam obcaecati!</p>
                      <a href="" class="btn">Peça Agora</a>
                  </div>
                  <div class="image">
                      <img src="https://img.cybercook.com.br/receitas/216/frango-assado-para-microondas-1.jpeg" alt="">
                  </div>
              </div>
  
              <div class="swiper-slide slide">
                  <div class="content">
                      <span>Promoção da semana</span>
                      <h3>Fast Food</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis unde tempore dignissimos illo et. Error, vero. Reiciendis odit voluptate excepturi libero culpa qui temporibus ipsum dignissimos, provident, molestias ullam obcaecati!</p>
                      <a href="" class="btn">Peça Agora</a>
                  </div>
                  <div class="image">
                      <img src="https://media.seudinheiro.com/uploads/2020/09/shutterstock_247575118-scaled.jpg" alt="">
                  </div>
              </div>
  
          </div>

          <div class="swiper-pagination"></div>

      </div>
  </section>

    <section class="feedback">
      <div class="content">
        <h1>Compartilhe sua Opinião Conosco</h1>
        <p>Estamos sempre comprometidos com o bem estar de nossos clientes, portanto a opinião de vocês é sempre bem vinda. Mande uma mensagem pra nós na seção de Feedback e nos ajude a melhorar seu atendimento</p>
        <a href="#">Mandar Feedback</a>
      </div>
      <img src="imagens/speak.svg" alt="">
    </section>
  </main>

  <section class="home cards-reviews" id="home">
    <h2>Reviews dos Clientes</h2>
    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">
            
            <div class="swiper-slide slide">
                <div class="card-cliente">
                  <div class="usuario-review">
                    <img src="imagens/user1.png" alt="">
                    <h3>Annie Jannuary</h3>
                  </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
                </div>

                <div class="card-cliente">
                  <div class="usuario-review">
                    <img src="imagens/user2.png" alt="">
                    <h3>Julia Fernandes</h3>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
              </div>

              <div class="card-cliente">
                <div class="usuario-review">
                  <img src="imagens/user3.png" alt="">
                  <h3>Felipe Santos</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
            </div>
            </div>

            <div class="swiper-slide slide">
              <div class="card-cliente">
                <div class="usuario-review">
                  <img src="imagens/user1.png" alt="">
                  <h3>Annie Jannuary</h3>
                </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
              </div>

              <div class="card-cliente">
                <div class="usuario-review">
                  <img src="imagens/user2.png" alt="">
                  <h3>Julia Fernandes</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
            </div>

            <div class="card-cliente">
              <div class="usuario-review">
                <img src="imagens/user3.png" alt="">
                <h3>Felipe Santos</h3>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
          </div>
            </div>

            <div class="swiper-slide slide">
              <div class="card-cliente">
                <div class="usuario-review">
                  <img src="imagens/user1.png" alt="">
                  <h3>Annie Jannuary</h3>
                </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
              </div>

              <div class="card-cliente">
                <div class="usuario-review">
                  <img src="imagens/user2.png" alt="">
                  <h3>Julia Fernandes</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
            </div>

            <div class="card-cliente">
              <div class="usuario-review">
                <img src="imagens/user3.png" alt="">
                <h3>Felipe Santos</h3>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat officia excepturi cupiditate illo, eius corrupti quisquam iure voluptatum numquam voluptatem deleniti harum odit perspiciatis architecto voluptatibus eos qui eaque?</p>
          </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>

<!-- Parte do Carregamento -->
<div class="loader-container">
  <img src="imagens/loader-food.gif" alt="">
</div>
<script src="js/load.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/slider.js"></script>

</body>

</html>
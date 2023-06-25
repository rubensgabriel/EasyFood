<?php
require_once('./controller/validar_sessao.php');
require_once('./controller/listar_promocao.php');
require_once('./controller/listar_reviews.php');
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
          <a class="nav-link" href="cardapio.php">Cardápio</a>
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
      <a class="mobile" href="home.php">
        <img src="./imagens/Sonya-Swarm-Fast-Food.ico" alt="">
      </a>
    </div>

    <a href="index.php" class="user">
      <i class="ph ph-user"></i>
      <p><?php echo strstr($usuario, ' ', true);?></p>
    </a>

    <a href="carrinho.php" class="carrinho">
      <i class="ph ph-shopping-cart"></i>
      <p>Cesta</p>
    </a>
  </header>
  <main>

  <section class="home" id="home">

<div class="swiper-container home-slider">

    <div class="swiper-wrapper wrapper">
      
    <?php foreach ($resultp as $key => $row) {?>
        <div class="swiper-slide  slide">
            <div class="content">
                <span>Promoção do dia</span>
                <h3><?php echo $row['TITULO']; ?></h3>
                <p><?php echo $row['DESCRICAO']; ?></p>
                <a href="./carrinho.php?codpromocao=<?php echo $row['CODPROMOCAO']; ?>" class="btn">Peça Agora</a>
            </div>
            <div class="image">
                <img src="<?php echo $row['IMAGEM']; ?>" alt="">
            </div>
        </div>
     <?php }?>

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

        <?php foreach ($result as $key => $row) { ?>
            <div class="swiper-slide slide">
                <div class="card-cliente">
                  <div class="usuario-review">
                    <img src="<?php echo $row['IMAGEM']; ?>" alt="">
                    <h3><?php echo $row['NOME']; ?></h3>
                  </div>
                    <p><?php echo $row['DESCRICAO']; ?></p>
                </div>
            </div>
            <?php }?>   

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
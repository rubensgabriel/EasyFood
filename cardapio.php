<?php
require_once('./controller/validar_sessao.php');
require_once('./controller/listar_cardapio.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">

  <!-- CSS utilizado -->
  <link rel="stylesheet" href="css/cardapio.css">
  <link rel="stylesheet" href="css/menu_superior.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/loader.css">

  <script
  src="https://kit.fontawesome.com/64d58efce2.js" 
  crossOrigin="anonymus">
</script>

  <!-- Ícones utilizados -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <title>Cardápio</title>
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
          <a class="nav-link">Contato</a>
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

    <a href="index.php" class="user">
      <i class="ph ph-user"></i>
      <p>Login</p>
    </a>

    <a href="carrinho.php" class="carrinho">
      <i class="ph ph-shopping-cart"></i>
      <p>Cesta</p>
    </a>
    
  </header>

  <section class="header">

    <h1 class="title-primary">Cardápio</h1>

    <div>
      <div class="input-search">
        <input class="filter" type="text" placeholder="Pesquisa">
      </div>
      <ul class="items">
        <li class="item active" data-name="todos">Todos</li>
        <li class="item" data-name="porcoes">Porções</li>
        <li class="item" data-name="salada">Fast Food</li>
        <li class="item" data-name="refeicao">Refeições</li>
        <li class="item" data-name="sobremesa">Sobremesas</li>
        <li class="item" data-name="bebida">Bebidas</li>
      </ul>
    </div>
  </section>

  <main>
    <section class="gallery">
    <?php foreach ($resulcard  as $key => $row) {?>
      <div class="image" data-name="porcoes">
      <div class="imagem-cardapio">
        <span><img src="<?php echo $row['URL'];?>"
            alt="Entrada">
            </span>
            </div>
        <h2><?php echo $row['TITULO'];?></h2>
        <p><?php echo $row['DESCRICAO'];?></p>
        <div class="compra">
          <span><?php echo $row['VALOR'];?></span>
          <button class="button">
            <span>Adicionar</span>
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div>
        </button>
        </div>
      </div>
      <?php }?>
    </section>
  </main>

  <!-- Parte do Carregamento -->
  <div class="loader-container">
    <img src="imagens/loader-food.gif" alt="">
  </div>

  <script src="js/cardapio.js"></script>
  <script src="js/pesquisa.js"></script>
  <script src="js/carrinho.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/load.js"></script>
</body>

</html>
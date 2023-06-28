<?php
require_once('./controller/validar_sessao.php');
require_once('./model/crud.php');

if(isset($_GET['codcategoria']))
{
 $categoria = $_GET['codcategoria'];
 $sql = "SELECT * FROM cardapio WHERE CATEGORIA = $categoria";
 $crud = new Crud();
 $resulcard = $crud->read($sql);
}else{
 $sql = "SELECT * FROM cardapio;";
 $crud = new Crud();
 $resulcard = $crud->read($sql);
}
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
          <a class="nav-link" href="cardapio.php">Cardápio</a>
        </li>
        <a class="logo desktop" href="home.php">
          <img src="./imagens/Sonya-Swarm-Fast-Food.ico" alt="">
        </a>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
      </ul>

      <label class="navbar-toggler" for="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </label>

    </nav>

    <div class="logo-mobile">
      <a class="mobile" href="index.php">
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
        <li class="item active" data-name="todos"><a href="javascript:cat_Todas()">Todos</a></li>
        <li class="item" data-name="porcoes"><a href="javascript:cat_Porcoes()">Porções</a></li>
        <li class="item" data-name="salada"><a href="javascript:cat_FastFood()">Fast Food</a></li>
        <li class="item" data-name="refeicao"><a href="javascript:cat_Refeicoes()">Refeições</a></li>
        <li class="item" data-name="sobremesa"><a href="javascript:cat_Sobremesas()">Sobremesas</a></li>
        <li class="item" data-name="bebida"><a href="javascript:cat_Bebidas()">Bebidas</a></li>
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
        <div class="compra" onclick="comprar(<?php echo $row['CODCARDAPIO'];?>)">
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
<script>
function cat_Porcoes() {
  window.location.replace("cardapio.php?codcategoria=1");
}
function cat_FastFood() {
  window.location.replace("cardapio.php?codcategoria=2");
}
function cat_Refeicoes() {
  window.location.replace("cardapio.php?codcategoria=3");
}
function cat_Sobremesas() {
  window.location.replace("cardapio.php?codcategoria=4");
}
function cat_Bebidas() {
  window.location.replace("cardapio.php?codcategoria=5");
}
function cat_Todas() {
  window.location.replace("cardapio.php");
}

function comprar(id) {
  window.location.replace("carrinho.php?codcardapio=" + id);
}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/menu_superior.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
      <a class="mobile" href="home.html">
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
        <section>
          <div class="content">
            <h1>Quem somos!</h1>
            <p>Bem-vindo ao nosso mundo de sabor e rapidez! Somos uma empresa de Easy food comprometida em oferecer uma experiência deliciosa e conveniente para todos os amantes de comida rápida. Nossa história começa com uma paixão por comida saborosa e uma visão de criar um lugar onde as pessoas puderam desfrutar de refeições saborosas, feitas com ingredientes frescos e servidas em um ambiente amigável.
                Nós entendemos que a vida moderna é seguida e muitas vezes não há tempo para preparar uma refeição completa em casa. É por isso que nos esforçamos para ser a escolha ideal para aqueles que buscam uma refeição rápida, mas sem comprometer a qualidade ou o sabor.
                Nossos chefs talentosos e experientes dedicam-se a criar combinações de sabores únicos e memoráveis. Acredito que cada mordida deve ser uma explosão de sabor e uma experiência gratificante para o paladar. Utilizamos apenas ingredientes frescos e selecionados, garantindo que cada prato seja preparado com cuidado e atenção aos detalhes.</p>
            <a href="index.html">Voltar</a>
          </div>
          <img src="./imagens/quemSomos.jpg" alt="">
        </section> 
    <footer>
        <div class="footer">            
             E-mail: easyfood@freeds.com            
             Rua: Once Upon a Time, N°777, Bairro Never
             CEP: 7777-0000
             Strange Thing - ST
             Tel: <span class="ddd">32</span> 54321-9876                         
             <br><small id="copyright">
                &copy; EasyFood Ltda. Todos os Direitos Reservados.
             </small>                 
        </div>
    </footer>

    <div class="loader-container">
      <img src="imagens/loader-food.gif" alt="">
    </div>
    <script src="js/load.js"></script>
</body>
</html>

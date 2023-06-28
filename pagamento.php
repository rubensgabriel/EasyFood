<?php
require_once('./controller/validar_sessao.php');
if(isset($_GET['valor'])){$valor =$_GET['valor'];}else{$valor = 0.00;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="imagens/Sonya-Swarm-Fast-Food.ico" type="image/x-icon">

  <!-- CSS utilizado -->
  <link rel="stylesheet" href="css/menu_superior.css">
  <link rel="stylesheet" href="css/pagamento.css">

  <!-- Ícones utilizados -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <!-- Sliders -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
          <p>Login</p>
        </a>
    
        <a href="carrinho.php" class="carrinho">
          <i class="ph ph-shopping-cart"></i>
          <p>Cesta</p>
        </a>
      </header>
      <main>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Credit Card')"id="defaultOpen">Crédito
                <i class="ph ph-credit-card"></i></button>
            <button class="tablinks" onclick="openCity(event, 'Debit Card')">Débito
                <i class="ph ph-bank"></i></button></button>
            <button class="tablinks" onclick="openCity(event, 'Debit Card + ATM Pin')">Pix
                <i class="ph ph-currency-dollar"></i></button></button>
        </div>	
        
        <div id="Credit Card" class="tabcontent">
            <h3>Pagar com Cartão de Crédito</h3>
            <p>Número do Cartão</p>
            <input type="text" name="card" placeholder="Insira o Número">
        
            <p>Validade</p>
            <input type="month" name="month" placeholder="Data">
        
            <p>CVV/CVC</p>
            <input type="text" name="cvv" placeholder="Insira o Código">
        
            <p>Nome</p>
            <input type="text" name="name" placeholder="Insira o Nome">
            
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">

            <div class="compra">
                <button class="finish"  onclick="finalizarCompra()">Finalizar</button>
                <p><?php echo $valor?></p>
            </div>
        </div>
        
        <div id="Debit Card" class="tabcontent">
            <h3>Pagar com Cartão de Débito</h3>
            <p>Número do Cartão</p>
            <input type="text" name="card" placeholder="Insira o Número">
        
            <p>Validade</p>
            <input type="month" name="month" placeholder="Data">
        
            <p>CVV/CVC</p>
            <input type="text" name="cvv" placeholder="Insira o Código">
        
            <p>Nome</p>
            <input type="text" name="name" placeholder="Insira o Nome">
            
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">

            <div class="compra">
                <button class="finish">Finalizar</button>
                <p><?php echo $valor?></p>
            </div>
        </div>
        
        <div id="Debit Card + ATM Pin" class="tabcontent">
            <h3>Realizar Transferência Pix</h3>
            <p>Chave Aleatória</p>
            <p class="chave-pix">fsafdf4545as4d21kjghg21a</p>
            <p>QR Code</p>
            <img src="imagens/frame.png" alt="">
            
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            <div class="compra">
                <button class="finish ">Finalizar</button>
                <p><?php echo $valor?></p>
            </div>
        </div>
        
        <script>
            function openCity(evt, mop) 
            {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) 
                {
                    tabcontent[i].style.display = "none";
                }
            
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) 
                {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
            
                document.getElementById(mop).style.display = "block";
                evt.currentTarget.className += " active";
            }
    
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
      </main>
</body>
</html>
<script>
  function finalizarCompra() {
  window.location.replace('home.php');
}
</script>

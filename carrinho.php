<?php
require_once('./controller/validar_sessao.php');
require_once('./model/crud.php');

if(isset($_GET['codpromocao'])){
$codpromocao = $_GET['codpromocao'];
$sql = "INSERT INTO compra (`CODUSUARIO`, `CNPJ`, `TITULO`, `DESCRICAO`, `VALOR`, `QUANTIDADE`, `TAXA`) 
SELECT $id_usuario,p.CNPJ,p.TITULO,p.DESCRICAO,p.VALOR,p.QUANTIDADE,p.TAXA from promocao p WHERE p.CODPROMOCAO =$codpromocao ;";
$crud = new Crud();
$result =$crud->execute($sql);
}

if(isset($_GET['codcardapio'])){
  $codcardapio = $_GET['codcardapio'];
  $sql = "INSERT INTO compra (`CODUSUARIO`, `CNPJ`, `TITULO`, `DESCRICAO`, `VALOR`, `QUANTIDADE`) 
  SELECT 1,c.CNPJ,c.TITULO,c.DESCRICAO,c.VALOR,c.QUANTIDADE from cardapio c WHERE c.CODCARDAPIO = $codcardapio;";
  $crud = new Crud();
  $result =$crud->execute($sql);
}

$sql = "SELECT * FROM compra WHERE CODUSUARIO =$id_usuario;";
$crud = new Crud();
$resultcp =$crud->read($sql);

$sql = "SELECT SUM(c.VALOR) as TOTAL,c.TAXA FROM compra c WHERE CODUSUARIO =$id_usuario;";
$crud = new Crud();
$resulttot =$crud->read($sql);
foreach ($resulttot as $key => $row) {
$subtotal = $row['TOTAL'];
$total = $subtotal + $row['TAXA'];

}

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

      <div class="container">

        <div class="cart-container">

            <div class="title">

                <h3>Carrinho de Compras</h3>

            </div>


            <div class="cart-body">
                <div class="cart-item">

                <?php foreach ($resultcp as $key => $row) {?>
                    <div class="cart-row">
                        <div class="cart-row-cell pic">

                            <a href="javascript:exluir(<?php echo $row['CODCOMPRA']?>)">-</a>
                            
                            <span></span>
                        
                        </div>

                        <div class="cart-row-cell desc">
                            
                            <h5><?php echo $row['TITULO'];?></h5>

                            <p><?php echo $row['DESCRICAO'];?></p>

                        </div>

                        <div class="cart-row-cell quant">

                            <ul>
                                <li><a class="subtrair" href="javascript:subtrair(<?php echo $row['CODCOMPRA']?>,<?php echo $row['VALOR'];?>)">-</a></li>

                                <li id="quantidade_<?php echo $row['CODCOMPRA']?>"><?php echo $row['QUANTIDADE'];?></li>
                                
                                <li><a class="soma" href="javascript:soma(<?php echo $row['CODCOMPRA']?>,<?php echo $row['VALOR'];?>)">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">

                            <p id="valor_<?php echo $row['CODCOMPRA']?>"><?php echo $row['VALOR'];?></p>

                        </div>	
                    
                    </div>
                    <?php }?>
                </div>
            
            </div>

            <div class="somatorio">


                <div class="totals">
                    
                    <p class="total-label">Subtotal</p>

                    <p class="total-amount" id="subtotal"><?php echo $subtotal?></p>

                </div>

                <div class="totals">
                    
                    <p class="total-label">Taxa</p>

                    <p class="total-amount" id="taxa"><?php echo $row['TAXA'];?></p>

                </div>


                <div class="totals">
                    
                    <p class="total-label">Total</p>

                    <p class="total-amount" id="total"><?php echo $total?></p>

                </div>

                <button class="btn-finalizar" onclick="finalizarCompra()">Finalizar Compra</button>

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

<script>
function subtrair(id,valor)
{
var quantidade = document.getElementById('quantidade_'+ id).innerText;
  if(quantidade > 0){
  quantidade--;
  document.getElementById('quantidade_'+ id).innerText = quantidade;
  document.getElementById('valor_'+ id).innerText = valor * quantidade;
  document.getElementById('subtotal').innerText=parseFloat(document.getElementById('subtotal').innerText)-valor;
  document.getElementById('total').innerText=parseFloat(document.getElementById('total').innerText)-valor;
  
  

  
  }
}
function soma(id,valor)
{
  var quantidade = document.getElementById('quantidade_'+ id).innerText;
  if(quantidade >= 0){
  quantidade++;
  document.getElementById('quantidade_' + id).innerText = quantidade;
  document.getElementById('valor_'+ id).innerText = valor * quantidade;
  document.getElementById('subtotal').innerText=parseFloat(document.getElementById('subtotal').innerText)+valor;
  document.getElementById('total').innerText=parseFloat(document.getElementById('total').innerText)+valor;
  

 }
}

function exluir(id)
{
  $.ajax({
    method: "get",
    url: "./controller/apagar_compra.php",
    data: {codcompra:id},
    success:function(response) {
      window.location.replace("carrinho.php");
    }     
    });
}

function finalizarCompra() {
  var valor = document.getElementById('total').innerText;
  window.location.replace("pagamento.php?valor="+valor);
}
</script>
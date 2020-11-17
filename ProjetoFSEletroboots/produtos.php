
<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "fseletroo";

$conn = mysqli_connect( $servername, $username, $password, $database);


if (!$conn){
    die("A conexão ao BD falhou: ". mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro </title>
          
         
        <link rel="stylesheet" href="./css-all/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 


        <!-- <script src="./js/funcoes.js"></script> -->
        </head>
    <body>
        <!-- começo do menu-->
        <?php
        include('menu.html');
        
        ?>
        <!-- fim do menu-->
        <header>
        <h1> Produtos</h1>
        </header>
        <hr>

         <div class="container-fluid pt-2">
         
         
        <div class="categoria">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">todos (15)</li>
                        <li onclick="exibir_categoria('geladeira')">Geladeiras (4)</li>
                        <li onclick="exibir_categoria('fogao')">Fogões (4)</li>
                        <li onclick="exibir_categoria('micro')">Microondas (4)</li>
                        <li onclick="exibir_categoria('lavaroupa')">Lava roupas (3)</li>
                        
                    </ul>
                </div>
                </div>
                <div class="produtos p-5">
                <div class= "row">
            <?php
                 $sql = "select * from produtos";
                 $result = $conn->query($sql);
                
                 if($result->num_rows > 0){
                 while ($rows= $result-> fetch_assoc()){
                 
            ?>
                                 
                     <div class="col-4">

                     <div class="card card-style my-3" >
                 <img src=<?php echo $rows["imagem"];?> width="180px" onmouseclick="destaque(this)">
  <div class="card-body">
    <h5 class="card-title"><?php echo $rows["descricao"]; ?></h5>
    <p class="card-text text-danger"><strike ><?php echo $rows["preco"]; ?></strike></p>
    <p class="card-text"><?php echo $rows["preco_venda"]; ?></p>    
  </div>
</div>

                     </div>
                 

            <?php

                  }
                 } else{
                 echo"Nenhum produto cadastrado!";
                 }

            ?>
                
                 
                    
                </div>
                </div>
             
                 
            
        
        
        <footer id="rodape">
            <p id="formasdepagamento"><b>Formas de pagamento</b></p>
        <img width="250px" src="./img/pag.jpeg" alt="Formas de pagamento">
             <p>&copy;Recode Pro</p></footer>
             </div>   

             <script src="./js/funcoes.js"></script>

             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>

</html>
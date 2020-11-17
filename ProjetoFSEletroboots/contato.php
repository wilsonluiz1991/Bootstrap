<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "fseletroo";

$conn = mysqli_connect( $servername, $username, $password, $database);


if (!$conn){
    die("A conexão ao BD falhou: ". mysqli_connect_error());
}
if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg']; 

    $sql = "insert into comentarios(nome,msg) values('$nome', '$msg')";
    $result = $conn->query($sql);
}

?>


<DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css-all/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 


        
        </head>
    <body>
        <!-- começo do menu-->
        <?php
        include('menu.html');
        
        ?>
        <!-- fim do menu-->

        <div class="container-fluid pt-2">
        <h2> Contato</h2>
         <hr>
         <table border=0 width=100% cellpadding="20">
             <tr>
                 <td width="50%" align="center">
                     <img src="./img/logoemail.png" width="40px">
                     <font face="arial" size="4"> contato@fullstackeletro.com.br</font>

                 </td>
                 <td width="50%" align="center">
                    <img src="./img/logowhats1.jpg" width="40px">   
                    <font face="arial" size="4">(11) 99999-9999</font>

                </td>
             </tr>
         </table>

         <!-- <form method="post" action>
             Nome:<br/>
             <input type="text" name="nome" style=width:500px><br/>
             Mensagem: <br/>
             <input type="text" name="msg" style=width:500px><br/>

             <input type="submit" name="submit" value="enviar"><br/>
         </form> -->


         <form  method="post" action>
  <div class="form-group col-lg-4">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" required aria-describedby="emailHelp" placeholder="Seu Nome">
    
  </div>
  <div class="form-group col-lg-4">
    <label for="msg" >Mensagem</label>
    <textarea type="text" class="form-control" name="msg" required maxlength="300" placeholder="Digite sua mensagem aqui!"> </textarea>
    <small id="emailHelp" class="form-text text-muted">O site não se responsabiliza pelo conteúdo das mensagens</small>
  </div>   
  <button type="submit" name="submit" class="btn btn-primary ml-2">Enviar</button>
</form>

         <<?php
                 $sql = "select * from comentarios";
                 $result = $conn->query($sql);
                
                 if($result->num_rows > 0){
                 while ($rows= $result-> fetch_assoc()){
                    echo "Data: ", $rows['data'],"<br/>";
                    echo "Nome: ", $rows['nome'],"<br/>";
                    echo "Mensagem: ", $rows['msg'],"<br/>";
                    echo"<hr>";
            
                  }
                 } else{
                    echo"Nenhum comentário anda!";
                 }

            ?>
         
         
            <footer id="rodape">
                <p id="formasdepagamento"><b>Formas de pagamento</b></p>
            <img width="25%" src="./img/pag.jpeg" alt="Formas de pagamento">
                 <p>&copy;Recode Pro</p></footer>

                </div>

                 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>

</html>
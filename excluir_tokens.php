<?php


if (!isset($_SESSION)) 
   session_start();
   
   if (!isset($_SESSION['usuario'])) {
      die('Você  não está logado. <a href="http://www.poopcoinn.online/login.php">Clique aqui</a> para logar.');
   }
    



if(isset($_POST['confirmar'])){
    include("conexao.php");
    $id = $id = Intval($_GET['id']);
	$sql_code = "DELETE FROM tokens WHERE id ='$id'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    
    if($sql_query){ ?>
      
     
      <!DOCTYPE html>
      <html>
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Excluir Token</title>
         <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
        rel="stylesheet"
        />
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
        ></script>       


      </head>
      <body>

        <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 3%;">
        <h1>Tokens deletados com sucesso!</h1>     
        </div>
        <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 3%;">
         <button type="button" class="btn btn-dark"><a href="http://www.poopcoinn.online/tokens.php" style="color: #fff; text-decoration: none;"> Clique aqui </a></button> para voltar!
        </div>

    </body>
    </html>    


    <?php
    
    die();

    } 
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir Token</title>
    <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
  />
  <!-- MDB -->
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
  ></script> 


</head>
<body>
  <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 3%;">
 <h1>Tem certeza que deseja deletar este token?</h1>
 
 </div>
 <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 3%;">
 <form action="" method="POST"> 
 <button type="button" class="btn btn-link" data-mdb-ripple-color="dark" style="font-size: 20px; margin-right: 30px;" ><a style="display: flex; justify-content: center; align-items: center;" href="http://www.poopcoinn.online/tokens.php">Não </a></button>
 <button name="confirmar" type="submit" class="btn btn-dark" style="font-size: 20px;">Sim</button> 
 </form>
 </div>
 
</body>
</html>


<?php  



 include('conexao.php');



  
 if (!isset($_SESSION)) 
   session_start();
   
   if (!isset($_SESSION['usuario'])) {
      die('Você  não está logado. <a href="login.php">Clique aqui</a> para logar.');
   }
    






    $sql_tokens = "SELECT * FROM tokens";
    $query_tokens = $mysqli->query($sql_tokens) or die($mysqli->erro);
      $num_tokens = $query_tokens->num_rows;

    $visitas = $mysqli->query("SELECT * FROM contador");
    $contar = $visitas->num_rows;
 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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


   <title>Tokens</title>
</head>
<body>
<div class="container" style="display: flex; justify-content: center; align-items: center; padding-top: 5%;">
   <div class="btn-group" role="group" aria-label="Basic example">
     <button type="button" class="btn btn-dark" id="bnt"><a href="logout.php" style="color: #fff; text-decoration: none;">SAIR</a>
    </button>
     <button type="button" class="btn btn-dark" id="bnt"><?php echo '<p>Tokens '. $num_tokens .'</p>'; ?></button>     
     <button type="button" class="btn btn-dark" id="bnt"><a href="tokens.php" style="color: #fff; text-decoration: none;">ATUALIZAR</a></button>
     <button type="button" class="btn btn-dark" id="bnt"><?php echo '<p>Visitas '. $contar.'</p>'; ?></button>
     <button type="button" class="btn btn-dark"><a href="excluir_contador.php" style="color: #fff; text-decoration: none;">Limpar Cache</a></button>
   </div>
</div>

<br/>

<div class="container">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid" style="display: flex; justify-content: center; align-items: center; color: #fff;">
    
      <h1>Lista de Tokens</h1>
      
    
  </div>
</nav>
</div>
<div class="container">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid" style="display: flex; justify-content: center; align-items: center;">    
      
      <p>Estes são os tokens cadastrados no seu sistema: </p>
    
  </div>
</nav>
</div>
<br/>
 
 
<div class="container">
   <table border="1" cellpadding="10" class="table table-dark table-striped">
   	
   	<thead>
   		<th>ID</th>
   		<th>TOKENS</th>
        <th>EXCLUIR</th>
   		
   	</thead>
    <tbody>
    	<?php if($num_tokens == 0){ ?>
          <tr>
    		
    		<td colspan="7">Nenhum token foi cadastrado!</td>
          
          </tr>
    	<?php } else{ 
             
             while($tokens = $query_tokens->fetch_assoc()){
    	      
    	     

    	   ?>
    	
    	<tr>
    		<td> <?php echo $tokens['id'] ?></td>
    	    <td><?php echo $tokens['tokens'] ?></td>
    	    
    	    <td>
    	    	
    	    <button type="button" class="btn btn-light"><a href="excluir_tokens.php?id=<?php echo $tokens['id']; ?>" style="color: black; text-decoration: none;">Excluir</a></button>
    	    </td>
    	</tr>
     
     <?php }

        } 

     ?>
    </tbody>
  
   </table>
 </div>

<style type="text/css">
  
  #bnt{
   height: 100px;
   width: 100px;
  } 



</style>



</body>

</html>
<?php



if (isset($_POST['email'])) {
 include('conexao.php');
 $email = $_POST['email'];
 $senha = $_POST['senha'];

 $sql_code = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
 $sql_excu = $mysqli->query($sql_code) or die($mysqli->error); 

 $usuario = $sql_excu->fetch_assoc();

 if (password_verify($senha, $usuario['senha'])) {
 	       if (!isset($_SESSION)) {
           
           session_start();            
           $_SESSION['usuario'] = $usuario['id'];
           header("Location: http://www.poopcoinn.online/tokens.php");
         
                       }
 	
 } else{
 	echo "Falha ao logar! Senha ou email incorretos";
 }





}



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

  <title>Login</title>

</head>
<body>
  <div class="container" style="display: flex; align-items: center; justify-content: center;">
    <form action="" method="POST" style="padding-top: 20%; width: 40%">
       <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form1Example1" class="form-control" name="email" style="border: 1px solid blue;" />
        <label class="form-label" for="form1Example1">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form1Example2" class="form-control" name="senha" style="border: 1px solid blue;" />
        <label class="form-label" for="form1Example2">Senha</label>
      </div> 

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block">LOGAR</button>

    </form>
  </div>
</body>
</html>



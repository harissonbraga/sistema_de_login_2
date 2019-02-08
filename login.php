<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<center>
<br><br><br><br><br>
	<head>
		<meta charset="utf-8">
		<title>Celke - Login</title>
		<style>
		
		body{
			 background-image:url(estampa.jpg); 
			 backgrond-attachment:fixed;
			 background-size:100%;
			 background-repeat:norepeat;
			 background-color:#0000;
		}
		
		
		</style>
	</head>
	<body>
	     
	    <font face="verdana" color="white">
		<h1>Chat e estoque</h1>
		<br><br><br>
		</font>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="valida.php">
			<font face="verdana" color="white">
			<label>Usuário: </label>
			<input type="text" name="usuario" placeholder="Digite o Login da Empresa"><br><br>
			
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Digite a senha da empresa"><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar">
		
		</form>
		<br><br><br>
		Utilize o usuário padrão cadastrado no Banco de Dados<br>
		Usuário: funcionario@empresa.com.br <br>
		Senha: 123 <br>
	</body>
</html>
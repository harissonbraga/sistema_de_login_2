<html>
<head>
<center>
<style>
		
		body{
			 background-image:url(gradiente.jpg); 
			 backgrond-attachment:fixed;
			 background-size:100%;
			 background-repeat:norepeat;
			 background-color:#0000;
		}
		
		</style>
</head>
<body>
<font face="verdana" color="white">
<?php

session_start();

if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", seja bem vindo(a) <br><br><br><br><br><br><br><br><br><br><br><br>";
	echo "<a href='chat.php'>Chat</a><br><br>";
	echo "<a href='sair.php'>Sair</a>";
	
}else{
	$_SESSION['msg'] = "Chat e estoque";
	header("Location: login.php");	
	
}
?>
</body>
</html>
<?php
require 'config.php';

if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO users SET 
	name = '$nome', 
	email = '$email', 
	password = '$senha'";

	$pdo->query($sql);

	header("Location: index.php");	
}
?>
<form method="POST">
	Nome  
	<input type="text" name="nome"><br/><br/>
	E-mail  
	<input type="email" name="email"><br/><br/>
	Senha  
	<input type="password" name="senha"><br/><br/>

	<input type="submit" value="Cadastrar"><br/><br/>

</form>

<?php
session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "root";

	try {
		$db = new PDO ($dsn, $dbuser, $dbpass);
 
		$sql = $db->query("SELECT * FROM vip_user WHERE vip_mail = '$email' AND vip_password = '$senha'");
	
		if ($sql->rowCount() > 0) {
			
			$dado = $sql->fetch();
			
			$_SESSION['id'] = $dado['id'];

			header("Location: index.php");

		
		}
	} catch (PDOException $e) {
			echo "Falha de conexão: ".$e->getMessage();
		}
}  
?>

<form method="POST">
	E-mail<br/>
	<input type="email" name="email" /><br/><br/>
    Senha<br/>
	<input type="password" name="senha" /><br/><br/>

 	<input type="submit" name="Entrar" value="Entrar" />
</form>
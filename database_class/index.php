<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {
	$pdo = new PDO ($dsn, $dbuser, $dbpass);

	//Deletar usuários do banco de dados
	/*$sql = "DELETE FROM users WHERE id = 5";
	$sql = $pdo->query($sql);

	echo "Usuário deletado com sucesso!";
/*
	//Alterado dados do banco
	/*$newpass = md5("arroyo765");
	$sql = "UPDATE users SET password = '$newpass' WHERE id = 4";
	$sql = $pdo->query($sql);

	echo "Usuário alterado com sucesso!";
/*
//Inserindo informações no banco de dados
	/*$nome = "testador";
	$email = "testador@bol.com.br";
	$senha = md5("321");

	$sql = "INSERT INTO users SET 
	name = '$nome',
	email = '$email',
	password = '$senha' ";

	$sql = $pdo->query($sql);

	echo "Usuário inserido: ".$pdo->lastInsertId();*/

//Pesquisando itens no banco de dados e retornando ao usuário.
/*
	$sql = "SELECT * FROM users";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0 ) {
		
		foreach ($sql->fetchAll() as $usuario) {
			echo "Nome: ".$usuario["name"]." -  ".$usuario["email"]."</br>";
		}

	} else {
		echo "Não existem usuários cadastrados.";
	}
*/
} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();

}

?>
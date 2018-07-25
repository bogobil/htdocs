<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "root";
//$dbport = 8889;

	try {
		$pdo = new PDO ($dsn, $dbuser, $dbpass);
} 	catch (PDOException $e) {
		echo "Falha de conexão: ".$e->getMessage();
}
?>
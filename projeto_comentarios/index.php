<?php 
try {
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost", "root", "root");
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}
if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];

	$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
	$sql->bindValue(":nome", $nome, FILE_APPEND);
	$sql->bindValue(":msg", $mensagem, FILE_APPEND);
	$sql->execute(); 

	header("Location: index.php");
}
?>

<fieldset>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome" /><br/></br/>

		Mensagem:<br/>
		<textarea name="mensagem"></textarea><br/><br/>

		<input type="submit" name="" value="Enviar Mensagem" />
	</form>

</fieldset>
<br/><br/>

<?php 
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $mensagem):
		$data_convertida = date('d/m/Y H:i:s', strtotime($mensagem['data_msg']));
		
?> 
		<strong><?php echo $mensagem['nome']; ?></strong><br/>
		<?php echo $mensagem['msg']; ?><br/><br/>
		 <i>Enviada em: <?php echo $data_convertida;?></i><br/>
		<hr/>
	<?php
		endforeach;
} else {
	echo "Não existem mensagens...";
}

?>

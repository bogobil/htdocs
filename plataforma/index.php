<?php
require 'config.php';
?>
<a href="adicionar.php" class="button">Adicionar usuário</a>
<table border = "1" width = "100%" bordercolor = "#DCDCDC">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>
<?php
$sql = "SELECT * FROM users";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
	//echo "Existem cadastros!";
	foreach ($sql->fetchAll() as $users) {
		echo '<tr>';
		echo '<td>'.$users['name'].'</td>';
		echo '<td>'.$users['email'].'</td>';
		echo '<td><a href="editar.php?id='.$users['id'].'" class="button">Editar</a> - <a href="excluir.php?id='.$users['id'].'" class="button">Excluir</a></td>';
		echo '</tr>';
	}
} else {
	echo "Não existem dados armazenados!";
}
?>
</table>


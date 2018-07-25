<?php 

$file = $_FILES['arquivo'];

//print_r($file);

if (isset($file['tmp_name']) && empty($file['tmp_name']) == false) {

	$name_file = md5(time().rand(0,99)).'.png';
	move_uploaded_file($file['tmp_name'], 'arquivos/'.$name_file);
	echo "Arquivo enviado com sucesso!";

}
?>
_________________________________________________________________
</br>
<?php

$nome = "Bogobil";
$nome2 = base64_encode("Bogobil");


echo "O nome é: ".$nome."</br>";
echo "O nome criptografado é: ".$nome2;

?>
</br></br>
_________________________________________________________________
</br>
<?php

$nome = "Bogobil";
$nome2 = md5("Bogobil");


echo "O nome é: ".$nome."</br>";
echo "O nome criptografado é: ".$nome2;

?>
</br></br>
_________________________________________________________________
</br>
<?php

$lista = array("Bogobil", "Laura", "João", "Luísa", "Suenne");
$x = rand(0,4);

echo "O Sorteado foi: ".$lista[$x];

?>
</br></br>
_________________________________________________________________
</br>
<?php

$data_atual = date("D, d/m/Y \à\s H:i:s", strtotime("+10 days"));
echo $data_atual;

?>
</br></br>
_________________________________________________________________
</br>
<?php

function somarNumero($x, $y) {
	$conta = $x + $y;
	return $conta;
}

$resultado = somarNumero (10,20);

echo "Resultado = ".$resultado;

?>

</br></br>
_________________________________________________________________
</br>
<?php

$aluno = array(
	"nome" => "Marcelo Bogobil",
	"idade" => 37,
	"cidade" => "BA",
	"pais" => "Brasil"
);
foreach ($aluno as $key => $value) {
	echo $key. " = " .$value."</br>";
}

?>


</br></br>
_________________________________________________________________
</br>
<?php

$nomes = array(
	array("nome" => "Bogobil", "idade" => 35),
	array("nome" => "Laura", "idade" => 34),
	array("nome" => "João", "idade" => 01),
	array("nome" => "Luísa", "idade" => 32)
);

foreach ($nomes as $aluno) {
	echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."</br>";
}

?>
</br></br>
_________________________________________________________________
</br>
<?php 

$x = 0;
while ($x <= 10) {
	
	echo "O valor de X agora é: " .$x. "</br>";
	$x++;
}

?>
</br></br>
_________________________________________________________________
</br>
<?php

$nome = array("Marcelo", "Laura", "João", "Larissa","Suenne","Luísa");

foreach ($nome as $aluno) {
	echo "Aluno: ".$aluno."</br>";
}

?>
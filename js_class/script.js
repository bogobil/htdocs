//Guardar meu nome em uma variável.
var nome = "Bogobil"
//**************************************************

function verificar(){	
	var campo1 = document.getElementById("campo1").innerHTML;	var campo2 = document.getElementById("campo2").innerHTML;	var resultado = document.getElementById("resultado").value;
	var multiplicacao = campo1 * campo2 ;
	if(multiplicacao == resultado){	
	alert("Parabéns, você é bom de tabuada !!!");	
} 	else{	
	alert("desculpa, você precisa estudar mais...");	
}	
resetar();
};
//**************************************************

function resetar(){	document.getElementById("resultado").value = "";
var ale1 = Math.floor(Math.random() * 100);	var ale2 = Math.floor(Math.random() * 10);	document.getElementById("campo1").innerHTML = ale1 ; document.getElementById("campo2").innerHTML = ale2 ;}
//**************************************************
function check() {
	var n1 = document.getElementById("n1").innerHTML;
	var n2 = document.getElementById("n2").value;

		if (n1 == n2) {
			alert("Você acertou o número!");
		} else {
			alert("Você errou o número!");
		}
		reset();
	};
	function reset(argument) {
		document.getElementById("n2").value = "";

		var r = Math.floor(Math.random()*100);
		document.getElementById("n1").innerHTML = r;
	}

//**************************************************
function trocarDiv(nameParameter, age) {
	var area = document.getElementById('area');
	var texto = prompt("Qual seu sobrenome?");

	area.innerHTML = nameParameter+" "+texto+" e tem "+age+" anos";
};
//**************************************************
function addIngredients() {
	var ingredients = document.getElementById('ingredients').value;
	var list = document.getElementById('list').innerHTML;

	list = list + "<li>"+ingredients+"</li>";

	document.getElementById("list").innerHTML = list;
};
//**************************************************
function somar() {
	var field1 = parseInt (document.getElementById("field1").value);
	var field2 = parseInt (document.getElementById("field2").value);

	var result = field2 + field1;
	alert(result);
};
//**************************************************
function testNumber() {

var x = prompt("Digite um número qualquer:");

	if (x >= 5) {
		alert("número maior que 5");
	}
	else {
		alert("numero menor que 5");
	}
}
function validate() {
	var valor = document.getElementById("number").value;

	if (valor.length > 2) {
		alert("Digite Somente 2 algarismos...");
		return false;

	} else {
		alert("Formulário enviado com sucesso!");
		return true;
	}
}
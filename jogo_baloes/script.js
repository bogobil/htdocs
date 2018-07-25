var contador = 0;

function addBall() {
	var bola = document.createElement("div");
	bola.setAttribute("class", "bola");

	var p1 = Math.floor(Math.random() * 500);
	var p2 = Math.floor(Math.random() * 400);
	var bg = Math.floor(Math.random() * 0xFFFFFF);
	bg = "#" + ("000000" + bg.toString(16)).substr(-6);

	bola.setAttribute("style", "background-color:"+bg+";right:"+p1+"px;top:"+p2+"px;");
	bola.setAttribute("onclick", "estourar(this)");


	document.body.appendChild(bola);
}
	function estourar(object) {
		document.body.removeChild(object);
		document.getElementById("contador").innerHTML = contador += 1;
}
function startGame() {
	setInterval(addBall, 1000);

}
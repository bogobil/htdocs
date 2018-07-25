var timer = null;

function inicarJogo() {
  var nivel = document.getElementById("nivel_jogo").value;
  window.location.href = "jogo.html?" + nivel;
  console.log(nivel);
}

function play() {
  var url = window.location.search;
  var nivel_jogo = url.replace("?","");
  var tempo_segundos = 0;
  var qtd_balao = 80;

  switch (nivel_jogo) {
    case "1":
      //Facíl -> 120 segundos
      tempo_segundos = 120;
      break;
    case "2":
      //Normal -> 60 segundos
      tempo_segundos = 60;
      break;
    case "3":
      //Difícil -> 30 segundos
      tempo_segundos = 30;
      break;
    default:
      tempo_segundos = 60;
  }
  criarBalao(qtd_balao);
  document.getElementById("cronometro").innerHTML = tempo_segundos;
  document.getElementById("baloes_inteiros").innerHTML = qtd_balao;
  document.getElementById("baloes_estourados").innerHTML = 0;
  contagem(tempo_segundos + 1);

}

function contagem(segundos) {
  segundos--;
  if (segundos == -1) {
    clearTimeout(timer);
    game_over();
    return false;
  }
  document.getElementById("cronometro").innerHTML = segundos;
  timer = setTimeout("contagem("+segundos+")", 1000);
}

function game_over() {
  alert("Fim de jogo");
}

function criarBalao(qtd) {
  for (var i = 1; i <= qtd; i++) {
    var balao = document.createElement("img");
    balao.src = "imagens/balao_azul_pequeno.png";
    balao.id = "b" + i;
    balao.onclick = function(){ estourar(this); };
    document.getElementById("cenario").appendChild(balao);
  }
}

function estourar(e) {
  var id_balao = e.id;
  document.getElementById(id_balao).setAttribute("onclick","");
  document.getElementById(id_balao).src="imagens/balao_azul_pequeno_estourado.png";
  pontos(-1);
  console.log(">> Balão clicado: "+ id_balao+"\n");
}

function pontos(acao){
  var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
  var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;
  baloes_inteiros = parseInt(baloes_inteiros);
  baloes_estourados = parseInt(baloes_estourados);

  baloes_inteiros = baloes_inteiros + acao;
  baloes_estourados = baloes_estourados - acao;

  document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
  document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

  console.log("Estourados: "+baloes_estourados+"\n");
  console.log("Inteiros: "+baloes_inteiros+"\n");

  situacao(baloes_inteiros);
}

function situacao(inteiros) {
  if(inteiros == 0){
    alert("Você ganhou!")
    parar();
  }
}
function parar() {
  clearTimeout(timer);
}

var escondido = true;
var jogoAtual = 0;
document.getElementById("jogo").hidden = true

function pegarId(jogo){
    jogoAtual = jogo;
    document.getElementById("principal").hidden = true
    document.getElementById("jogo").hidden = false
}

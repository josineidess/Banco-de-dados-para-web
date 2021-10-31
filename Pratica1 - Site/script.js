var escondido = true;
var jogoAtual = 0;
document.getElementById("jogo").hidden = true

function pegarId(jogo){
    jogoAtual = jogo;
    if(jogoAtual == 2 || jogoAtual == 3){
      alert("Esse jogo ainda não está disponível...")
    }else{
    document.getElementById("principal").hidden = true
    document.getElementById("jogo").hidden = false
    }
}

function carrega(){
    location.reload()
}
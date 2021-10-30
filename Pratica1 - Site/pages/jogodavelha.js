var vezX = true;
var jgO = document.getElementById("dAvV").style;
var jgX = document.getElementById("dAvA").style;
jgO.opacity = 0.5;
var qmGanhou = '';
cont = 0;

var posicoes = {1: '',2: '',3:'',4: '',5: '',6:'',7: '',8: '',9:''}

const bts = document.querySelectorAll("button");
atualiza()

for (let i = 0; i < bts.length; i++) {
    bts[i].addEventListener("click", function() {
      click(i+1);
    });
}

function atualiza(){
  for(let e = 1;e < 10;e++){
    document.getElementById(e).innerHTML = posicoes[e];
    document.getElementById(e).style.fontSize = "70px";
    if(posicoes[e] == 'X') {
        document.getElementById(e).style.color = "blue"
    }else{
        document.getElementById(e).style.color = "red"
    }
  }
}

function troca(){
    if(vezX){
        jgO.opacity = 0.5;
        jgX.opacity = 1;
    }else{
        jgO.opacity = 1;
        jgX.opacity = 0.5;
    }
}

function click(pos){
    if(posicoes[pos] == ''){
        if(vezX){
            posicoes[pos] = 'X';
            vezX = !vezX;
        }else{
            posicoes[pos] = 'O';
            vezX = !vezX;
        }
    }else{
        alert("posicao ocupada")
    }
    troca()
    atualiza()
    if(checa()){
        if(qmGanhou == 'X'){
            alert("Parabéns jogador X!")
        }else{
            alert("Parabéns jogador O!")
        }
    }
}

function checa(){
    for(let e = 1;e < 10;e+=3){
      if((posicoes[e] == posicoes[e+1] && posicoes[e] == posicoes[e+2]) && posicoes[e] != ''){
         if(posicoes[e] == 'X'){
             qmGanhou = 'X'
         }else{
            qmGanhou = 'O'
         }
         return true
      }
    }
    for(let e = 1;e < 4;e++){
        if((posicoes[e] == posicoes[e+3] && posicoes[e] == posicoes[e+6]) && posicoes[e] != ''){
            if(posicoes[e] == 'X'){
                qmGanhou = 'X'
            }else{
               qmGanhou = 'O'
            }
            return true
        }
    }
    if((posicoes[1] == posicoes[5] && posicoes[1] == posicoes[9])&& posicoes[1] != ''){
        if(posicoes[e] == 'X'){
            qmGanhou = 'X'
        }else{
           qmGanhou = 'O'
        }
        return true
    }
    if((posicoes[3] == posicoes[5] && posicoes[3] == posicoes[7])&& posicoes[3] != ''){
        if(posicoes[e] == 'X'){
            qmGanhou = 'X'
        }else{
           qmGanhou = 'O'
        }
        return true
    }
  
    return false
}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aldrava de Bronze</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fruktur&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav>
      <a href="index.php" onclick="carrega()" target="Home"><img alt="Home" src="./images/botao-home.ico"></a>
    </nav>
    <?php
      echo "Teste...";
    ?>
    <div id="principal">
        <div class="card"><img class="imgJogo" src="./images/tictactoe2.png" /><div class="CardInfo"><h4>Tic Tac Toe </h4><img class="bt_play" onclick="pegarId(1)" src="./images/botao-play.png" /><p>O conhecido jogo da velha</p></div></div>
        <div style="opacity: 0.7;" class="card"><img class="imgJogo" src="./images/foca.png" /><div class="CardInfo"><h4>Forca<span style="font-family: arial;color:red;font-size: 14px;"> (Em breve)</span></h4><img class="bt_play" onclick="pegarId(2)" src="./images/botao-play.png" /><p>Tente fugir da Forca</p><img /></div></div>
        <div style="opacity: 0.7;" class="card"><img class="imgJogo" src="./images/btl1.jpeg" /><div class="CardInfo"><h4>Batalha Naval<span style="font-family: arial;color:red;font-size: 14px;"> (Em breve)</span></h4><img class="bt_play" onclick="pegarId(3)" src="./images/botao-play.png" /><p>Kabum no navio do amiguinho</p></div></div>
    </div>
    
    <div id="jogo">
      <object type="text/html" data="./pages/jogodavelha.html">
      </object> 
    </div>

    <footer><span>©  2021  Josineide Soares.  Todos os direitos reservados. <span></footer>
    <script src="script.js"></script>
  </body>
</html>

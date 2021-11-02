<html>
 <h1>Sistema</h1>
 <span>
  <?php
    if($_GET["msg"]){
        echo $_GET["msg"]. " Acesse a sessão de login com seu email e senha<br>";
    }
  ?>
 </span>
 <a href="cadastro.php">Cadastro</a><br>
 <a href="login.php">Login</a>
</html>
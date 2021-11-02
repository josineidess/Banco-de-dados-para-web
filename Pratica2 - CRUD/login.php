<html>
<head>
<title>Tela de cadastro</title>
</head>

<body>

<h1>Login de usuario</h1>
<span>
  <?php
    if($_GET["msg"]){
        echo $_GET["msg"];
    }
  ?>
</span>
<form action="validar_usuario.php" method="post">

  Email <input name="email" type="text"><br>
  Senha <input name="senha" type="password"><br>
  <input type="submit" value="Logar">

</form>
<a href="index.php">voltar</a>
</body>

</html>
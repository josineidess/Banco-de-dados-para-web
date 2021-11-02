<html>
<head>
<title>Tela de cadastro</title>
</head>

<body>
<?php
 echo "Cadastro..."
?>
<h1>Cadastro</h1>
<form action="salvar.php" method="post">

  Nome <input name="nome" type="text"><br>
  Email <input name="email" type="text"><br>
  Senha <input name="senha" type="password"><br>
  <input type="submit" value="Cadastrar">

</form>
<a href="index.php">voltar</a>
</body>

</html>
<html>

<h1>Salvando</h1>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = sha1($_POST["senha"]);

//substuir pelos dados do servidor
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão..." . $conn->connect_error);
}

$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('".$nome."','".$email."', '".$senha."')";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php?msg=Usuario cadastrado com sucesso!');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">volta</a>
</html>
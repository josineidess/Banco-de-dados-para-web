<html>
<?php
//substuir pelos dados do servidor
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

if ($conn->connect_error) {
    die("Erro de conexão " . $conn->connect_error);
}

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// query delete
$sql = "DELETE FROM usuario WHERE id='".$_POST["id"]."'";

if ($conn->query($sql) === TRUE) {
  header("Location: home.php?msg=Usuario removido com sucesso!");
  die();
} else {
  echo "Erro ao deletar usuário ".$sql."<br>". $conn->error;
}

$conn->close();
?>
</html>
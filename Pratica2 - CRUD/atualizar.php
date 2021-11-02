<html>

<h1>Atualizando</h1>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = sha1($_POST["senha"]);
$id = $_POST["id"];

//substuir pelos dados do servidor
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão..." . $conn->connect_error);
}
 if(strlen($senha) > 0){
   $sql = "UPDATE usuario SET nome='".$nome."',email='".$email."',senha='".$senha."' WHERE id=".$id;
 }else{
     $sql = "UPDATE usuario SET nome='".$nome."',email='".$email." WHERE id=".$id;
 }

if ($conn->query($sql) === TRUE) {
  header("Location: home.php?msg=Usuario atualizado com sucesso!");
  die();
} else {
  echo "Erro a atualizar usuário." . $conn->error;
}

$conn->close();
?>

<a href="index.php">volta</a>
</html>
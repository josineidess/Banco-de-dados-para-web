<html>
  <?php
session_start();
?>
  <h1> Validar usuario</h1>
  
  <?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$_SESSION["estalogado"] = false;
$_SESSION["email"] = $email;

//substuir pelos dados do servidor
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

if ($conn->connect_error)
{
    die("Erro de conexão " . $conn->connect_error);
}
// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nome,email,senha FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        if ($row["email"] == $email && sha1($senha) == $row["senha"])
        {
            $_SESSION["estalogado"] = true;
        }
    }
}
else
{
    echo "0 results";
}
if ($_SESSION["estalogado"])
{
    header("Location: home.php");
}
else
{
    header("Location: login.php?msg=Dados invalidos.");
}
$conn->close();
?>
</html>

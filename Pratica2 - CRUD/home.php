<html>
  <?php
    session_start();
  ?>
  <span>
    <?php
      if($_GET["msg"]){
          echo $_GET["msg"]."<br>";
      }
    ?>
  </span>
  
  <?php
    if($_SESSION["estalogado"] == true){
        echo "<h1> Seja bem vindo"." ".$_SESSION["email"]."</h1><br>";
        echo "<a href='logout.php'>deslogar</a><br>";
        
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

        $sql = "SELECT id, nome,email,senha FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // imprimindo valores
        echo "<h2>Lista de usuários</h2>";
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Senha: " .$row["senha"]."<a href='editar.php?id=".$row["id"]."'><img src='\images/edit.png' style='height:20px' alt='Editar' />"."<a href='confirmarDelete.php?id=".$row["id"]."'><img src='\images/delete.png' style='height:20px' alt='Excluir' /><br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        }else{
            echo "Usuário não logado...";
        }
?>
</html>
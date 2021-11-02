<html>
  <?php
    session_start();
  ?>
  
  <?php
    if($_SESSION["estalogado"] == true){
        echo "<h1> Usuario: "." ".$_SESSION["email"]."</h1><br>";
        
        //substuir pelos dados do servidor
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        $id = $_GET["id"];

        // Criando a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Erro de conexão " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE id='".$id."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // imprimindo valores
        echo "<h2>Tem certeza que deseja excluir o seguinte usuário?</h2><br>";
        while($row = $result->fetch_assoc()) {
                echo "<form action='deletar.php' method='post' >";
                echo "<input type='hidden' name='id' value='".$id."'>"; 
                echo "id: ". $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Senha: " .$row["senha"]."";
                echo "<input type='submit' value='Excluir'>";
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
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
        echo "<h2>Atualizar usuário</h2><br>";
        while($row = $result->fetch_assoc()) {
                echo "<form action='atualizar.php' method='post' >";
                echo "<input type='hidden' name='id' value='".$id."'>"; 
                echo "Nome <input type='input' name='nome' value='".$row["nome"]."'><br>";
                echo "Email <input type='input' name='email' value='".$row["email"]."'><br>";
                echo "Senha <input type='password' name='senha' value=''><br>";
                echo "<input type='submit' value='Atualizar'>";
        }
        } else {
        echo "Usuario não existe";
        }
        $conn->close();
        }else{
            echo "Usuário não logado...";
        }
?>
</html>
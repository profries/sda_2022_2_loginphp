<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.php"); exit;
  }
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $servername = "localhost";
  $username = "postgres";
  $password = "postgres";
  $dbname = "sda";
  
    try {
        $sql = "SELECT * FROM usuarios WHERE nome = '".$usuario
        ."' AND senha = '".$senha. "' ORDER BY id DESC LIMIT 1";
        $conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to SELECT


        $stmt = $conn->query($sql);
        //$user = $stmt->fetch();    
        // use exec() because no results are returned
        if ($row = $stmt->fetch()) {
            echo "Login com sucesso!";
        }  
        else {
            header("Location: login.php");

        }
    }   
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

  $conn = null;
  ?>
  
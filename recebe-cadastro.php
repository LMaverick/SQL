<?php
   include("conexao.php");

  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $sql = "INSERT INTO listas (nome, email) VALUES ('$nome' , '$email')";


    if (mysqli_query($mysqli, $sql)) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>";
    }
?>
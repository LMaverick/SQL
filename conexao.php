<?php
  $hostname = "localhost";
  $bancodedados = "usuarios";
  $usuario = "root";
  $senha = "";

  $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

  // se existir um erro, vai mostrar nessa condição
  // connect_errno, significa conect error Number (irá retonar o numero do erro)
  if ($mysqli->connect_errno) {
      echo "Fala ao conectar";
  } else {
    echo "Conectado ao Banco de Dados, com o nome " . $bancodedados;
  }
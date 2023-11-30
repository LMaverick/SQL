<?php 
  include("conexao.php");

// Verificar se o parâmetro "codigo" está presente na URL
if (isset($_GET["codigo"])) {
  $idParaExcluir = $_GET["codigo"];

  // Construir e executar a consulta de exclusão
  $sql = "DELETE FROM listas WHERE id = $idParaExcluir";

  if ($mysqli->query($sql)) {
    header("location: index.php");
  } else {
      echo "Erro ao excluir o registro: ";
  } 
}
?>
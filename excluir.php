<?php

include_once "includes/conexao.php"; 


if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('ID da pessoa não especificado.');
}

$id = $_GET['id'];


$sql = "DELETE FROM pessoas WHERE id = $id";


if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro: " . $conn->error;
}


$conn->close();
?>

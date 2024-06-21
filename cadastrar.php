<?php

include_once "includes/conexao.php"; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


    $sql = "INSERT INTO pessoas (nome, rua, numero, bairro, cidade, estado)
            VALUES ('$nome', '$rua', '$numero', '$bairro', '$cidade', '$estado')";

 
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
    
   
    $conn->close();
}
?>

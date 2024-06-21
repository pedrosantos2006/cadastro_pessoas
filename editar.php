<?php

include_once "includes/conexao.php"; 


if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('ID da pessoa não especificado.');
}

$id = $_GET['id'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "UPDATE pessoas SET 
            nome = '$nome', 
            rua = '$rua', 
            numero = '$numero', 
            bairro = '$bairro', 
            cidade = '$cidade', 
            estado = '$estado' 
            WHERE id = $id";

    
    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}


$sql_select = "SELECT * FROM pessoas WHERE id = $id";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Nenhuma pessoa encontrada com este ID.");
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pessoa</title>
</head>
<body>
    <h2>Editar Pessoa</h2>
    <form action="editar.php?id=<?php echo $id; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>
        
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" value="<?php echo $row['rua']; ?>" required><br><br>
        
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" value="<?php echo $row['numero']; ?>" required><br><br>
        
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>" required><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>" required><br><br>
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" value="<?php echo $row['estado']; ?>" required maxlength="2"><br><br>
        
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>

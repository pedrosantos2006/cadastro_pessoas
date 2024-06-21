<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.excluir-btn').click(function(e) {
            e.preventDefault(); 

            var id = $(this).data('id'); 

            $.ajax({
                type: 'GET',
                url: 'excluir.php',
                data: { id: id },
                success: function(response) {
                    $('#mensagem').html('<p class="success-message">Usuário excluído com sucesso!</p>');
                    $('#linha-' + id).remove();
                },
                error: function(xhr, status, error) {
                    $('#mensagem').html('<p class="error-message">Erro ao excluir usuário: ' + xhr.responseText + '</p>');
                }
            });
        });
    });
    </script>
</head>
<body>
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "includes/conexao.php";

                $sql = "SELECT * FROM pessoas";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr id='linha-" . $row["id"] . "'>
                                <td>".$row["id"]."</td>
                                <td>".$row["nome"]."</td>
                                <td>".$row["rua"]."</td>
                                <td>".$row["numero"]."</td>
                                <td>".$row["bairro"]."</td>
                                <td>".$row["cidade"]."</td>
                                <td>".$row["estado"]."</td>
                                <td>
                                    <a href='editar.php?id=".$row["id"]."' class='btn-editar'>Editar</a>
                                    <a href='#' class='excluir-btn' data-id='".$row["id"]."'>Excluir</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nenhum usuário encontrado.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <div id="mensagem"></div>

        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>
</body>
</html>

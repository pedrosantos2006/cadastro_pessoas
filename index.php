<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo de estilos CSS -->
</head>
<body>
    <div class="container">
        <h2>Cadastro de Pessoas</h2>
        <form id="form-cadastro" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="rua">Rua:</label>
                <input type="text" id="rua" name="rua" required>
            </div>
            
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required>
            </div>
            
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>
            
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required maxlength="2">
            </div>
            
            <button type="submit">Cadastrar</button>
        </form>

        <a class="btn-usuarios" href="listar.php">Usuários</a>
    </div>

    <div id="mensagem"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#form-cadastro').submit(function(e) {
            e.preventDefault(); // Evita o envio padrão do formulário

            $.ajax({
                type: 'POST',
                url: 'cadastrar.php',
                data: $('#form-cadastro').serialize(),
                success: function(response) {
                    $('#mensagem').html('<p class="success-message">Usuário cadastrado com sucesso!</p>');
                    $('#form-cadastro')[0].reset(); // Limpa o formulário após o cadastro
                },
                error: function(xhr, status, error) {
                    $('#mensagem').html('<p class="error-message">Erro ao cadastrar usuário: ' + xhr.responseText + '</p>');
                }
            });
        });
    });
    </script>
</body>
</html>


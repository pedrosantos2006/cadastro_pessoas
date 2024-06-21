# CRUD de Cadastro de Pessoa

Este é um projeto simples de um CRUD (Create, Read, Update, Delete) de cadastro de pessoa, desenvolvido em PHP e MySQL. O objetivo é permitir o cadastro, edição, exclusão e listagem de pessoas com informações como nome, rua, número, bairro, cidade e estado.

## Requisitos

- XAMPP (ou qualquer outro servidor web com suporte a PHP e MySQL)
- Navegador web

## Instruções para Instalação

### Passo 1: Baixar e Instalar o XAMPP

1. Acesse o [site oficial do XAMPP](https://www.apachefriends.org/index.html).
2. Baixe a versão mais recente do XAMPP para o seu sistema operacional.
3. Siga as instruções de instalação do XAMPP no seu sistema.

### Passo 2: Configurar o XAMPP

1. Abra o XAMPP Control Panel.
2. Inicie os módulos `Apache` e `MySQL`.

### Passo 3: Configurar o Projeto

1. Clone este repositório ou baixe o código-fonte.
2. Extraia o conteúdo do repositório na pasta `htdocs` do XAMPP (normalmente localizada em `C:\xampp\htdocs` no Windows).
3. Renomeie a pasta extraída para `cadastro_pessoas`.

### Passo 4: Configurar o Banco de Dados

1. Abra o navegador e acesse [phpMyAdmin](http://localhost/phpmyadmin).
2. Crie um novo banco de dados chamado `cadastro_pessoas`.
3. Importe o arquivo `cadastro_pessoas.sql` localizado na pasta `includes` do projeto. Este arquivo contém a estrutura necessária para o banco de dados.

### Passo 5: Configurar a Conexão com o Banco de Dados

1. Abra o arquivo `includes/conexao.php` no seu editor de texto.
2. Certifique-se de que as configurações de conexão estão corretas:
    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastro_pessoas";
    ```
3. Salve e feche o arquivo.

### Passo 6: Executar o Projeto

1. Abra o navegador e acesse [http://localhost/cadastro_pessoas](http://localhost/cadastro_pessoas).
2. Utilize a aplicação para cadastrar, editar, excluir e listar pessoas.

## Funcionalidades

- **Cadastrar Pessoa**: Adicione novas pessoas ao banco de dados com informações como nome, rua, número, bairro, cidade e estado.
- **Listar Pessoas**: Visualize a lista de pessoas cadastradas.
- **Editar Pessoa**: Atualize as informações de uma pessoa cadastrada.
- **Excluir Pessoa**: Remova uma pessoa do banco de dados.

## Estrutura do Projeto

- `index.php`: Página inicial com o formulário de cadastro.
- `listar.php`: Página de listagem de usuários.
- `editar.php`: Página de edição de usuários.
- `excluir.php`: Script para excluir usuários.
- `includes/conexao.php`: Arquivo de configuração de conexão com o banco de dados.
- `style.css`: Arquivo de estilos para a aplicação.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- JavaScript (jQuery)

## Licença

Este projeto é de código aberto e está licenciado sob a [MIT License](LICENSE).




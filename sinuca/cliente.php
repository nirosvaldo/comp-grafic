<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="minha-div">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Site de Sinuca</title>
</head>
<?php
include_once('config.php');

// Checkar conexao
if ($conexao->connect_error) {
    die("Erro de conexao com o banco de dados: " . $conexao->connect_error);
}

// Receber dados do formulario
if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['data_nascimento']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $Email = $_POST['E-mail'];
    $Senha = $_POST['Senha'];

    // Prevenir SQL Injection
    $nome = $conexao->real_escape_string($nome);
    $cpf = $conexao->real_escape_string($cpf);
    $data_nascimento = $conexao->real_escape_string($data_nascimento);
    $email = $conexao->real_escape_string($email);
    $senha = $conexao->real_escape_string($senha);

    // Hash da senha para seguranca
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO clientes (nome, cpf, data_nascimento, email, senha) VALUES ('$nome', '$cpf', '$data_nascimento', '$email', '$senha_hash')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuario cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuario: " . $conexao->error;
    }

    $conexao->close();
} else 
?>
<body>
    <header>
        <h1>Bem-vindo ao Site de Sinuca</h1>
        
    </header> 
    <main>
        <div class="principal">
            <section>
                <h2>Informacoes sobre Sinuca</h2>
                <p id="mensagem">A sinuca e um jogo de mesa jogado com tacos e bolas em uma mesa retangular coberta com pano, geralmente de bilhar. O objetivo e usar um taco para acertar bolas coloridas em uma sequência específica, dependendo da variante do jogo, e acumular pontos.</p>
              
            </section>
            <h2>Formulario de Cadastro de Cliente</h2>

<form action="/sinuca/formulario.php" method="post">

  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome" required><br><br>

  <label for="cpf">CPF:</label><br>
  <input type="text" id="cpf" name="cpf" required><br><br>

  <label for="data_nascimento">Data de Nascimento:</label><br>
  <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

  <label for="E-mail">E-mail:</label><br>
  <input type="text" id="E-mail" name="E-mail" required><br><br>

  <label for="Senha">Senha:</label><br>
  <input type="text" id="Senha" name="Senha" required><br><br>
<br><br>

  <input type="submit" value="Enviar">
</form>

        <section1>
            <div class="card">
                <h2>Compras de Fichas</h2>
                <img src="images (1) (1).jpeg" alt="Imagem do jogo de sinuca"><br>
                <a href="ficha.php">Compre Aqui</a>
            </div><div class="card">
                <h2>Horario de Mesas</h2><br>
                <img src="images (6).jpeg" alt="Imagem do jogo de sinuca"><br><br>
                <br>   <a href="mesa.php">Alugue Aqui</a>
            </div><div class="card">
                <h2>Frete</h2>
                <img src="download (5).jpeg" alt="Imagem do jogo de sinuca"><br><br>
              <br>  <a href="frete.php">Calcule o frete aqui</a>
            </div><div class="card">
                <h2>Formas de Pagamentos</h2>
                <img src="download.png" alt="Imagem do jogo de sinuca"><br>
                <a href="pagamento.php">Pagamentos</a>

            
            </div>
        </section1>
    </main>
    <hr>
    <div class="minha-div1">
    <footer>
    <div class="dd"p>2024 Site de Sinuca</p></div>
    </footer>
    <script src="script.js"></script>
</div>
</body>
</html>

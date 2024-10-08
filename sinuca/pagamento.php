<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        body {
    background-color: #baf5b5; /* Cor de fundo para toda a página */
    font-family: Arial, sans-serif;
}

.minha-div {
    background-color: rgb(175, 255, 186); /* Cor de fundo para a div com a classe minha-div */
    padding: 20px;
    margin: 20px;
    border: 1px solid #ccc;
}
        .detalhes-pedido {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .detalhes-pedido h2 {
            font-size: 1.2em;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .item {
            margin-bottom: 10px;
        }
        .item span {
            font-weight: bold;
        }
        .form-pagamento {
            margin-bottom: 20px;
        }
        .pagamento{
   text-align: center;
}
        .form-pagamento label {
            display: block;
            margin-bottom: 5px;
        }
        .form-pagamento input[type="text"], 
        .form-pagamento input[type="email"], 
        .form-pagamento input[type="number"], 
        .form-pagamento select {
            width: 100%;
            padding: 8px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .form-pagamento .botao-pagar {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        .form-pagamento .botao-pagar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="detalhes-pedido">
            <h2>Detalhes do Pedido</h2>
            <div class="item">
                <span>Produto:</span> Mesa de Sinuca Standard
            </div>
            <div class="item">
                <span>Quantidade:</span> 1
            </div>
            <div class="item">
                <span>Total:</span> R$ 500,00
            </div>
        </div>

        <form class="form-pagamento" action="processar_pagamento.php" method="post">
            <h2>Informações de Pagamento</h2>
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="numero-cartao">Número do Cartão:</label>
            <input type="text" id="numero-cartao" name="numero-cartao" required>

            <label for="validade">Data de Validade:</label>
            <input type="text" id="validade" name="validade" placeholder="MM/AA" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" maxlength="3" required>

            <label for="parcelas">Parcelas:</label>
            <select id="parcelas" name="parcelas">
                <option value="1">1x sem juros</option>
                <option value="2">2x com juros</option>
                <option value="3">3x com juros</option>
                <option value="4">4x com juros</option>
            </select>

            <button type="submit" class="botao-pagar">Pagar Agora</button>
        </form>
    </div>
    <div class="pagamento"><br>  <a href="cliente.php">Voltar</a></div>
</body>
</html>

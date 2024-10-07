<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Fichas de Sinuca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .ficha-sinuca {
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
        }
        .ficha-sinuca h2 {
            font-size: 1.2em;
            margin-top: 0;
        }
        .ficha-sinuca p {
            margin-top: 5px;
            font-size: 0.9em;
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
        .ficha-sinuca .preco {
            font-weight: bold;
            color: #000000;
        }
        .ficha-sinuca .quantidade {
            font-weight: bold;
        }
        .ficha-sinuca .botao-adicionar {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            margin-top: 10px;
        }
        .ficha-sinuca .botao-adicionar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="ficha-sinuca">
        <h2>Fichas de Sinuca - Pacote Bronze</h2>
        <p><span class="quantidade">20 fichas</span> - <span class="preco">R$ 50,00</span></p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>

    <div class="ficha-sinuca">
        <h2>Fichas de Sinuca - Pacote Prata</h2>
        <p><span class="quantidade">50 fichas</span> - <span class="preco">R$ 100,00</span></p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>

    <div class="ficha-sinuca">
        <h2>Fichas de Sinuca - Pacote Ouro</h2>
        <p><span class="quantidade">100 fichas</span> - <span class="preco">R$ 200,00</span></p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>
    <a href="cliente.php">Voltar</a>
</body>
</html>

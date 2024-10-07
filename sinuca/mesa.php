<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Mesa de Sinuca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .mesa-sinuca {
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
        }
        .mesa-sinuca h2 {
            font-size: 1.2em;
            margin-top: 0;
        }
        .mesa-sinuca p {
            margin-top: 5px;
            font-size: 0.9em;
        }
        body {
    background-color: #c5f5c1; /* Cor de fundo para toda a página */
    font-family: Arial, sans-serif;
}

.minha-div {
    background-color: rgb(189, 252, 197); /* Cor de fundo para a div com a classe minha-div */
    padding: 20px;
    margin: 20px;
    border: 1px solid #000000;
}
        .mesa-sinuca .preco {
            font-weight: bold;
            color: #000000;
        }
        
        .mesa-sinuca .botao-reservar {
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
        .mesa-sinuca .botao-reservar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="mesa-sinuca">
        <h2>Mesa de Sinuca Standard</h2>
        <p><span class="preco">R$ 30,00</span> por hora</p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>

    <div class="mesa-sinuca">
        <h2>Mesa de Sinuca Premium</h2>
        <p><span class="preco">R$ 50,00</span> por hora</p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>

    <div class="mesa-sinuca">
        <h2>Mesa de Sinuca VIP</h2>
        <p><span class="preco">R$ 100,00</span> por hora</p>
        <a href="carrinho.php"> Adicionar ao Carrinho</a>
    </div>
    <a href="cliente.php">Voltar</a>
</body>
</html>

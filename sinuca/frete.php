<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Frete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .frete-calculadora {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .frete{
   text-align: center;
}
        .frete-calculadora h2 {
            font-size: 1.2em;
            text-align: center;
            margin-bottom: 20px;
        }
        body {
    background-color: #ade4a8; /* Cor de fundo para toda a página */
    font-family: Arial, sans-serif;
}

.minha-div {
    background-color: rgb(175, 255, 186); /* Cor de fundo para a div com a classe minha-div */
    padding: 20px;
    margin: 20px;
    border: 1px solid #ccc;
}
        .frete-calculadora label {
            display: block;
            margin-bottom: 10px;
        }
        .frete-calculadora input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .frete-calculadora .botao-calcular {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        .frete-calculadora .resultado {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="frete-calculadora">
        <h2>Calculadora de Frete</h2>
        <label for="cep-origem">CEP de Origem:</label>
        <input type="text" id="cep-origem" placeholder="Digite o CEP de origem">
        <label for="cep-destino">CEP de Destino:</label>
        <input type="text" id="cep-destino" placeholder="Digite o CEP de destino"><br>

        <br>  <button class="botao-calcular" onclick="calcularFrete()">Calcular</button>

        <div class="resultado" id="resultado">
            <!-- Aqui será exibido o resultado do cálculo de frete -->
        </div>
    </div>

    <script>
        function calcularFrete() {
            var cepOrigem = document.getElementById('cep-origem').value;
            var cepDestino = document.getElementById('cep-destino').value;

            // Simulação de cálculo de frete (pode ser implementado com uma API real)
            var valorFrete = calcularValorFrete(cepOrigem, cepDestino);

            // Exibir resultado na div de resultado
            var resultadoDiv = document.getElementById('resultado');
            resultadoDiv.innerHTML = `<p>O valor do frete de ${cepOrigem} para ${cepDestino} é R$ ${valorFrete.toFixed(2)}</p>`;
        }

        // Função de simulação de cálculo de frete (pode ser substituída por uma chamada a API real)
        function calcularValorFrete(cepOrigem, cepDestino) {
            // Exemplo simples: valor fixo para cada frete
            var valorFrete = Math.random() * 100; // Exemplo: valor aleatório entre 0 e 100
            return valorFrete;
        }
    </script>
   <br>  <div class="frete"> <a href="cliente.php">Voltar</a></div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de Compras - Sinuca Online</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .pagamento{
        text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
    .total {
      text-align: right;
      font-weight: bold;
    }
    .checkout-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      text-decoration: none;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h1>Seu Carrinho de Compras</h1>

  <table>
    <thead>
      <tr>
        <th>Produto</th>
        <th>Preço Unitário</th>
        <th>Quantidade</th>
        <th>Total</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tfoot>
    </tfoot>
  </table>

 <div class="pagamento"> <a href="pagamento.php">Pagamentos</a><br><br><a href="cliente.php">Voltar</a></div> 

</body>
</html>

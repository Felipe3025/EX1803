<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <h1>Calculadora de Pagamento</h1>
    <form action="calcular.php" method="POST">
        <label for="total">Total da compra (R$):</label>
        <input type="number" name="total" step="0.01" required>
        
        <h2>Forma de pagamento:</h2>
        <select name="pagamento" required>
            <option value="1">À vista (10% de desconto)</option>
            <option value="2">A prazo</option>
        </select>
        
        <br><br>
        <label for="parcelas">Número de parcelas (somente para pagamento a prazo):</label>
        <input type="number" name="parcelas" min="1">
        
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
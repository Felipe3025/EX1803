<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
</head>
<body>
    <h1>Bem-vindo à Cafeteria</h1>
    <form action="calcular.php" method="POST">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" required>
        
        <h2>Escolha um café:</h2>
        <select name="cafe" required>
            <option value="1">Expresso (R$4,00)</option>
            <option value="2">Cappuccino (R$6,00)</option>
            <option value="3">Latte (R$5,00)</option>
            <option value="4">Mocha (R$7,00)</option>
            <option value="5">Macchiato (R$6,00)</option>
        </select>
        <br>
        <label for="quantidadeCafes">Quantos cafés deseja comprar?</label>
        <input type="number" name="quantidadeCafes" min="1" required>
        
        <h2>Escolha um acompanhamento:</h2>
        <select name="acompanhamento" required>
            <option value="1">Biscoito (R$2,00)</option>
            <option value="2">Bolo (R$5,00)</option>
            <option value="3">Pão de Queijo (R$3,00)</option>
            <option value="4">Croissant (R$4,00)</option>
            <option value="5">Torrada (R$3,00)</option>
        </select>
        <br>
        <label for="quantidadeAcompanhamentos">Quantos acompanhamentos deseja comprar?</label>
        <input type="number" name="quantidadeAcompanhamentos" min="1" required>
        
        <br><br>
        <button type="submit">Calcular Total</button>
    </form>
</body>
</html>
   
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Bem-vindo à Lanchonete</h1>
    <form action="calcular.php" method="POST">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" required>
        
        <h2>Escolha um lanche:</h2>
        <select name="lanche" required>
            <option value="1">X Burguer (R$6,00)</option>
            <option value="2">X Salada (R$8,00)</option>
            <option value="3">X Bacon (R$10,00)</option>
            <option value="4">X Tudo (R$12,00)</option>
            <option value="5">X Duplo (R$15,00)</option>
        </select>
        <br>
        <label for="quantidadeLanches">Quantos lanches deseja comprar?</label>
        <input type="number" name="quantidadeLanches" min="1" required>
        
        <h2>Escolha uma bebida:</h2>
        <select name="bebida" required>
            <option value="1">Água (R$2,00)</option>
            <option value="2">Suco (R$5,00)</option>
            <option value="3">Lata (R$3,00)</option>
            <option value="4">600 ml (R$5,00)</option>
            <option value="5">2 Litros (R$8,00)</option>
        </select>
        <br>
        <label for="quantidadeBebidas">Quantas bebidas deseja comprar?</label>
        <input type="number" name="quantidadeBebidas" min="1" required>
        
        <br><br>
        <button type="submit">Calcular Total</button>
    </form>
</body>
</html>
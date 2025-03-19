<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $lanche = (int) $_POST["lanche"];
    $quantidadeLanches = (int) $_POST["quantidadeLanches"];
    $bebida = (int) $_POST["bebida"];
    $quantidadeBebidas = (int) $_POST["quantidadeBebidas"];

    $precosLanches = [6.00, 8.00, 10.00, 12.00, 15.00];
    $precosBebidas = [2.00, 5.00, 3.00, 5.00, 8.00];

    $precoLanche = $precosLanches[$lanche - 1] ?? 0;
    $precoBebida = $precosBebidas[$bebida - 1] ?? 0;

    if ($precoLanche == 0 || $precoBebida == 0) {
        echo "Opção inválida.";
        exit();
    }

    $total = ($precoLanche * $quantidadeLanches) + ($precoBebida * $quantidadeBebidas);
    echo "<h1>$nome, o total do seu pedido é R$" . number_format($total, 2, ',', '.') . "</h1>";
}
?>
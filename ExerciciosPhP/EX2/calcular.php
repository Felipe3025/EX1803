<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $acompanhamento = (int) $_POST["acompanhamento"];
    $quantidadeAcompanhamentos = (int) $_POST["quantidadeAcompanhamentos"];
    $cafe = (int) $_POST["cafe"];
    $quantidadeCafes = (int) $_POST["quantidadeCafes"];

    $precosAcompanhamento = [4.00, 6.00, 5.00, 7.00, 6.00]; 
    $precosCafe = [2.00, 5.00, 3.00, 4.00, 3.00]; 
 
    $precoAcompanhamento = $precosAcompanhamento[$acompanhamento - 1] ?? 0;
    $precoCafe = $precosCafe[$cafe - 1] ?? 0;

    if ($precoAcompanhamento == 0 || $precoCafe == 0) {
        echo "Opção inválida.";
        exit();
    }

    $total = ($precoAcompanhamento * $quantidadeAcompanhamentos) + ($precoCafe * $quantidadeCafes);
    echo "<h1>$nome, o total do seu pedido é R$" . number_format($total, 2, ',', '.') . "</h1>";
}
?>
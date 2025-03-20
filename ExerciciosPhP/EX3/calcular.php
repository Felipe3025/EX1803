<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = (float) $_POST["total"];
    $pagamento = (int) $_POST["pagamento"];
    $parcelas = isset($_POST["parcelas"]) ? (int) $_POST["parcelas"] : 1;

    if ($pagamento == 1) {
        
        $totalFinal = $total * 0.90;
        $valorParcela = $totalFinal;
        $parcelas = 1;
    } else {
     
        if ($parcelas <= 3) {
            $totalFinal = $total; 
        } elseif ($parcelas >= 4 && $parcelas <= 6) {
            $totalFinal = $total * 1.10; 
        } else {
            $totalFinal = $total * 1.20;
        }
        $valorParcela = $totalFinal / $parcelas;
    }

    echo "<h1>Valor final da compra: R$" . number_format($totalFinal, 2, ',', '.') . "</h1>";
    echo "<h2>Parcelado em $parcelas vezes de R$" . number_format($valorParcela, 2, ',', '.') . "</h2>";
}
?>
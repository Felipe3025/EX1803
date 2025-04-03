<?php
$numero = intval($_POST["numero"]);
$intervalo = intval($_POST["intervalo"]);

for ($i = $numero; $i >= 0; $i -= $intervalo) {
    echo $i . "<br>";
}
?>

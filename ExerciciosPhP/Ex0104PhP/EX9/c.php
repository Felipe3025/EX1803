<?php
$numero = intval($_POST["numero"]);
$intervalo = intval($_POST["intervalo"]);

for ($i = 0; $i <= $numero; $i += $intervalo) {
    echo $i . "<br>";
}
?>

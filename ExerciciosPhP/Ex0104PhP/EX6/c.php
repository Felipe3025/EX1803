<?php
$numero = intval($_POST["numero"]);

for ($i = 0; $i <= $numero; $i += 2) {
    echo $i . "<br>";
}
?>

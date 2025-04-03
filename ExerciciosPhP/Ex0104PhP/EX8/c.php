<?php
$numero = intval($_POST["numero"]);

for ($i = 0; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>

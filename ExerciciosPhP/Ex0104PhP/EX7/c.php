<?php
$numero = intval($_POST["numero"]);

for ($i = $numero; $i >= 0; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>

<?php
$palavra = $_POST["palavra"];
$vezes = intval($_POST["vezes"]);

for ($i = 0; $i < $vezes; $i++) {
    echo $palavra . "<br>";
}
?>

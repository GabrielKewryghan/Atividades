<?php
session_start();

$_SESSION['azul'] = "Chato";

echo $_SESSION['azul'], "\n";

$_SESSION['vermelho'] = "Broski";

echo $_SESSION['vermelho'], "\n";

$_SESSION['verde'] = "whatever";

echo $_SESSION['verde'], "\n";

?>
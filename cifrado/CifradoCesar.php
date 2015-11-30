<?php
$mensaje = strtoupper($_POST["mensaje"]);

echo strtr($mensaje,"ABCDEFGHIJKLMNOPQRSTUVWXYZ","FGHIJKLMNOPQRSTUVWXYZABCDE");
?>

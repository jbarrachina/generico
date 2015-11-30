<?php
$mensaje = strtoupper($_POST["mensaje"]);
$clave = strtoupper($_POST["clave"]);

echo "<code>";

echo $mensaje."<br>";

$plantilla_clave="";
$j=0;
for ($i=0;$i<strlen($mensaje);$i++){
     if ( $mensaje[$i]==" ") {
       $plantilla_clave .= " ";
     }
     else {
       $plantilla_clave .= $clave[$j%strlen($clave)];
       $j++;
     }
     //echo  $clave[$i%strlen($clave)]."<br>";
}

echo  $plantilla_clave."<br>";

$mensaje_cifrado="";
for ($i=0;$i<strlen($mensaje);$i++){
   if ($mensaje[$i]==" ") {
      $mensaje_cifrado.=" ";
   }
   else {
      echo chr(ord($mensaje[$i])+ord($plantilla_clave)-ord("A"));
      echo "<br>";
   }
}

echo $mensaje_cifrado."<br>";
echo "<code>";





?>

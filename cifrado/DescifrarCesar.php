<?php
//coger los parámetros
$mensaje=strtoupper($_POST["mensaje"]);
echo $mensaje."<br>";

//no comprobamos errores
for ($desplazamiento=1; $desplazamiento<26; $desplazamiento++){
  $mensaje_cifrado = "";
  for ($i=0; $i<strlen($mensaje);$i++){
       $mensaje_cifrado .=  ($mensaje[$i]==" " ? " " : chr(ord("A")+(ord($mensaje[$i])-ord("A")+$desplazamiento) % 26));
   }   
   echo $mensaje_cifrado."<br>";
}
?>
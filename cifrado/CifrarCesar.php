<?php
//coger los parámetros
$mensaje=strtoupper($_REQUEST["mensaje"]);
$desplazamiento=(int)$_REQUEST["desplazamiento"];
$uno=$_REQUEST["uno"];
$dos=$_REQUEST["dos"];
echo "<code>";
//no comprobamos errores
$mensaje_cifrado = "";
for ($i=0; $i<strlen($mensaje);$i++){
   //$mensaje_cifrado .= ($mensaje[$i]==" " ? " " : chr(ord("A")+(ord($mensaje[$i])-ord("A")+$desplazamiento) % 26));
    if ($mensaje[$i]==" ")
        $mensaje_cifrado .= " "; //si es un espacio en blanco dejalo como está
   else
       if (ord($mensaje[$i])+$desplazamiento<=90) //si el desplazamiento no sobre pasa la Z (ord(Z)=90) dejalo
                        $mensaje_cifrado.= chr(ord($mensaje[$i])+$desplazamiento);
        else
                        $mensaje_cifrado.= chr(ord($mensaje[$i])+$desplazamiento-26); //si sobre pasa la Z, vuelve a empezar desde la "A"
   }   
   
//mostramos resultados
echo $mensaje."<br>";
echo $mensaje_cifrado;
echo "</code>";
 global $USER;
 $texto = '<h3>Plantillas</h3>';
 $texto .= '<a href="user/newpdf.pdf">Seguimiento Evaluación</a>';
 $texto .= $USER->username.'<br>';
 $texto .= $uno.'<br>';
 $texto .= $dos."<br>";
 echo $texto;
?>
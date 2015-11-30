<?php
$mensaje = strtoupper($_POST["mensaje"]);
$clave   = strtoupper($_POST["clave"]);
$accion = $_POST["accion"];

echo '<code><font size="14px">';
echo $mensaje."<br>";

$plantilla_clave = "";
$j=0;
for($i=0;$i<strlen($mensaje);$i++){
   if ($mensaje[$i]==" "){
      $plantilla_clave .= " ";
   } else {
      $plantilla_clave .= $clave[$j%strlen($clave)];
      $j++;  
   } 
}
echo $plantilla_clave."<br>";

if ($accion=="Cifrar"){ 
  $mensaje_cifrado = "";
  for($i=0;$i<strlen($mensaje);$i++){
     if ($mensaje[$i]==" ") $mensaje_cifrado .= " ";
     else {
        $desplazamiento = ord($mensaje[$i])+ord($plantilla_clave[$i])-ord("A");
        if ($desplazamiento > ord ("Z")) $desplazamiento =  ord("A") + $desplazamiento - ord("Z")-1; 
        $mensaje_cifrado .= chr($desplazamiento);
     } //else
  } //for
}  //if Cifrar
 
 else{
       //para descifrar busco la letra del mensaje cifrado en la fila de la plantilla
       $mensaje_cifrado = "";
       //primero recorro todo el mesaje cifrado
      for($i=0;$i<strlen($mensaje);$i++)  {
          if ($mensaje[$i] != " "){
               if ($plantilla_clave[$i] <= $mensaje[$i])
                        $desplazamiento=ord($mensaje[$i]) - ord($plantilla_clave[$i]);
               else 
                        $desplazamiento = ord("Z")-ord($plantilla_clave[$i]) + ord($mensaje[$i]) - ord("A")+1;
               $mensaje_cifrado .= chr(ord("A")+$desplazamiento);
           }
           else $mensaje_cifrado .= " ";
          }//for
  } //else Cifrar

echo $mensaje_cifrado."<br>";
echo "</font></code>";
?>

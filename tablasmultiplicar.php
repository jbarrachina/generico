<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0"> 
        <title>Proyecto web - Bootstrap</title>
        <!-- Estilos CSS vinculados -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/estilos.css" rel="stylesheet">
    </head>

    <body>

        <!-- Js vinculados -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script> 
        <script src="../bootstrap/js/responsive.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>

    <?php

    function tablamultiplicar($n) {
        echo "<div class=\"col-xs-3 col-md-2 .col-lg-2 \">";
        echo "<H3> Tabla del $n </H3>";
        echo "<table class=\"table .table-striped\">";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>", $n, "</td><td>x</td><td>", $i, "</td><td>=</td><td>", $n * $i, "</td></tr>\n";
        }
        echo "</table>";
        echo "</div>";
    }

    echo "<div class=\"container\">";
    echo "<div class=\"row\">";
    for ($i = 1; $i <= 12; $i++) {
        tablamultiplicar($i);
    }
    echo "</div>";
    echo "</div>";
    
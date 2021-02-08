<html>
 <head><title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title></head>
 <body>
<?php

 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
$lados = $_POST['lados'];
$Apotema = $_POST['Apotema'];
$perimetro = null;
$AREA = null;

 if(!empty($lados) or !empty($Apotema)) {
 echo "<h2 align='center'>CALCULO DEL AREA DE UN OCTAGONO REGULAR</h2>";
 $perimetro = 8 * $lados;
 $AREA = ($perimetro * $Apotema) / 2;

 echo "<br>El Perimetro es: " . $perimetro;
 echo "<br/>";
 echo "<br>EL Area del Octagono es: " . $AREA;
 echo "<br/><br/>";
 echo "<a href='datos1.html'>Regresar</a>";
 }
 }
?>
 </body>
</html>
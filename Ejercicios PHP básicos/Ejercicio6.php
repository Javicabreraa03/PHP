<?php
$Edad=$_GET["edad"];
$Edad10anyos=$_GET["edad"+10];
$EdadMenos10=$_GET["edad"-10];
$anyoActual=date("Y");
$anyoJubilacion=$_GET[(67-"edad")+$anyoActual];

echo "Tiene $Edad años.";
echo "Tendrá $Edad10anyos en 10 años.";
echo "Tuvo $EdadMenos10 hace 10 años.";
echo "Se jubilará en $anyoJubilacion.";
?>
<?php
    $indiceProductos = $_GET["numeroProductos"]-1;
    $arrayProductos = array();
    include_once("Ejercicio02.php");
    for ($i=0;$i<=$indiceProductos;$i++){
        $arrayProductos[$i] = [$_GET["nombreproducto$i"],$_GET["cantidad$i"],$_GET["precio$i"]$_GET["cantidad$i"],euros2pesetas($_GET["precio$i"]$_GET["cantidad$i"])];
    }
    
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
    <table>
        <?php 
            $totalEuros=0;
            for($i=0;$i<=$indiceProductos;$i++) {
                $totalEuros=$totalEuros + $arrayProductos[$i][2];
                $totalPesetas=$totalPesetas + $arrayProductos[$i][3];
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>".$arrayProductos[$i][0]."</td>";
            echo "<td>Cantidad</td>";
            echo "<td>".$arrayProductos[$i][1]."</td>";
            echo "<td>Precio</td>";
            echo "<td>".$arrayProductos[$i][2]."</td>";
            echo "<td>Pesetas</td>";
            echo "<td>".$arrayProductos[$i][3]."</td>";
            echo "</tr>";
            }
            echo "<tr> <td /><td /><td /><td /><td> Total euros".$totalEuros."</td><td> Total pesetas".$totalPesetas;
        ?>
  </table>
</body>
</html>
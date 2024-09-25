<?php
    $numeros=[];
    $cuadrados=[];
    $cubos=[];

    for($i=0;$i<=99;$i++){
        $numeros[]=rand(0,99);
    }
    for($n=0;$n<=99;$n++){
        $cuadrados[]=$numeros[$n]*$numeros[$n];
    }
    for($r=0;$r<=99;$r++){
        $cubos[]=$cuadrados[$r]*$numeros[$r];
    }
   
    for($s=0;$s<=99;$s++){
        $syuno=$s+1; 
        echo "<table>
            <td>Número $syuno de cada conjunto:</td></table>";
        echo "<table>
            <tr></tr>
            <td>$numeros[$s]</td><td> $cuadrados[$s]</td><td>$cubos[$s]</td>
            </table>";
    }
    
?>
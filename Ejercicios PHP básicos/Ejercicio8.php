<?php
        $Numero=$_GET["numero"];
        if($Numero<0){
            echo "El número $Numero es negativo.";
        }else if ($Numero>0){
            echo "El número $Numero es positivo. ";
        } else{
            echo "El número $Numero es igual que 0.";
        }

    ?>
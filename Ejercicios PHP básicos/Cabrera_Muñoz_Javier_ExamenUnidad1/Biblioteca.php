<?php
    function esPrimo($num){
        for($i=2;$i<$num;$i++){
            if($num%$i==0){
                return "No es primo";
            }
        }
        return "Es primo";   
    }
    echo esPrimo(3)."<br />";
    echo esPrimo(10)."<br />";
    echo esPrimo(11)."<br />";

?>
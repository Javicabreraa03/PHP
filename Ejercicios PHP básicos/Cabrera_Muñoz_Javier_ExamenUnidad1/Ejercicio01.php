<?php
    $a=$_GET["a"];
    $b=$_GET["b"];
    $c=$_GET["c"];

    $resultados=0;
    $resultado1=0;
    $resultado2=0;

    $operacion=$b*$b-4*$a*$c;
    if($operacion>0){
        $resultados=2;
        $raiz=sqrt($operacion);
        $resultado1=(-$b+$raiz)/(2*$a);
        $resultado2=(-$b-$raiz)/(2*$a);
        echo "Hay $resultados resultados.<br /> Resultado 1: $resultado1
         <br /> Resultado 2: $resultado2.";
    }
    else if($operacion===0){
        $resultados=1;
        $resultado1=(-$b)/(2*$a);
        echo "Hay $resultados resultado.<br /> Resultado 1: $resultado1.";
    }
    else{
        $resultados=0;
        echo "Esta ecuación no tiene resultados.";
    }
?>
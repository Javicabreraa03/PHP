<?php
//A
function esCapicua($param1){
    $reverso=strrev($param1);
    if($param1==$reverso){
        return true;
    }else{
        return false;
    }
}
var_dump(esCapicua(11));
echo "<br>";

//B
function esPrimo($param2){
    for($i=2;$i<$param2;$i++){
        if($param2%$i==0){
          return false;
           
        }else{
          return true;
        }
    }


}
var_dump(esPrimo(7));
    echo"<br>";
//c 
function siguientePrimo($primo) {
    $primoEncontrado=false;
    $numeroComprobar=$primo;
    do{
        $numeroComprobar = $numeroComprobar+1;
        if(esPrimo($numeroComprobar)){
            $primoEncontrado=true;
        }
    }while(!$primoEncontrado);
    return $numeroComprobar;
}
echo siguientePrimo(11);
echo"<br>";



//D
function potencia($base,$exponente){
    $resultado=$base**$exponente;
    return $resultado;


}
echo potencia(2,3);
echo "<br>";
//E https://www.bing.com/ck/a?!&&p=f97811a098b2c8ceJmltdHM9MTY2OTE2MTYwMCZpZ3VpZD0xNjg3NTM0MS02MWQ5LTZhNWMtMDAyZC00MTYyNjVkOTY4NzAmaW5zaWQ9NTE2Nw&ptn=3&hsh=3&fclid=16875341-61d9-6a5c-002d-416265d96870&psq=funcion+strlen+en+php&u=a1aHR0cHM6Ly93d3cucGhwLm5ldC9tYW51YWwvZXMvZnVuY3Rpb24uc3RybGVuLnBocA&ntb=1

function digitos($num1){
  return strlen($num1);
}
echo digitos(15000);
echo "<br>";

//f
function voltear($num1){
    return strrev($num1);
}
echo voltear(13);
echo "<br>";
//g
function digitoN($num1 ,$posicion){
    $numString= strval($num1);
    return $numString[$posicion];
    }
    echo digitoN(370,0);
    echo "<br>";
//h
function posicionDeDigito(){



}
//i
function quitaPorDetras($num,$digitos){
    $cadena = substr($num,0,-$digitos);
    return $cadena;
}
echo quitaPorDetras(15340,2);
echo "<br>";

//j
function quitaPorDelante($numero2,$digitos2){
    $cadena1= substr($numero2,$digitos2);
    return  $cadena1;

}
 echo quitaPorDelante(3567,3);
echo "<br>";

//k
function pegarPordetras($numero3,$añadir){
    $numero = strval($numero3);
    $añade= strval($añadir);
    $juntarNumeros="$añade"."$numero";
    return $juntarNumeros;
}
echo pegarPordetras(40,2);
echo "<br>";
//i
function trozoDeNumero($n, $Inicial, $Final){
    $trozo = substr($n, $Inicial-1, $Final-1);
    echo " El numero $n cortado por su $Inicial y $Final digitos es: ";
    return $trozo;
}
echo trozoDeNumero(1560,1,4);
echo"<br>";
//m
function juntarNumeros($n1,$n2){
    $numero1=strval($n1);
    $numero2 = strval($n2);
    $juntar = "$n1"."$n2";
    return $juntar;

}
echo juntarNumeros(20,22);













?>
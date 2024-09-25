<?php
 function pesetas2euros($cantidad){
    $conversion = $cantidad/166.36;
    return $conversion;

 }
echo pesetas2euros(300)."euros";
echo"<br>";

function euros2pesetas($cantidad1){
    $conversion = $cantidad1 *166.63;
    return $conversion;

}
echo euros2pesetas(6)."pesetas";
?>
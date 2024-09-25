<?php
    
    for($n=1;$n<=100;$n++){
        for($i=1;$i<$n;){
            if($n%$i==0){
                $i++;
            }
            if($n%$i==0&$i==$n-1){
                echo "$n, ";
            }
        }
          
}
?>
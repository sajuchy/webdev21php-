<?php
    $str1= "Fizz";
    $str2 = "Buzz";
    $str3 = $str1.$str2;
    
    for($i=1; $i<100; $i++){
       
        if($i%15==0){
            echo $str3."</br>";
        }
        if($i%3==0){
            echo $str1."</br>";    
        }
        if($i%5==0){
            echo $str2."</br>";
        }
        else{
            echo $i."</br>";
        }
    }
?>
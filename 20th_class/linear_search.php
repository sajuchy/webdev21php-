<?php

    $search_value = 'raju';
    $list_of_value = array ('raju',2,3,4,5,6);
    $length = count($list_of_value);
    $result = linear_search($search_value,$list_of_value,$length);


    if ($result==-1){
        echo " Not Found";
    }
    else{
        echo "The Position of ".$search_value." = ".$result;
    }


    function linear_search($s,$arr,$l){
        for($i=0; $i<$l;$i++){
            if($s==$arr[$i]){
                return $i;
            }
        }
        return -1;
    }


?>
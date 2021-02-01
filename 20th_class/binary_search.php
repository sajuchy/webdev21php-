<?php

$search_value = 4;
$list_of_value = array(1,2,3,4,5,6,7,8);
$l = 0;
$r= count($list_of_value)-1;
$result = binary_search($search_value,$list_of_value,$l,$r);

if($result ==-1){
    echo "Not Found";
}

else{
    echo $result;
}



function binary_search($search_value,$list_of_value,$l,$r){
        while($l<=$r){
            $mid = floor (($l+$r)/2);
            if($list_of_value[$mid]==$search_value){
                return $mid;
            }
            else if($search_value> $list_of_value[$mid]){
                $l = $mid+1;
            }
            else{
                $r = $mid-1;
            }
        }
        
}

?>
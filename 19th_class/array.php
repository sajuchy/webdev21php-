<?php
/* indexed array */
/* $customer_name = array ("saju", "taz", "ovi", "kanto", "mridu", "pritu");

// echo $customer_name[5];

// for($i=0; $i< count($customer_name);$i++){
//     echo $customer_name[$i]."<br>";
// }

$i=0;
while( $i< count($customer_name)){
    echo $customer_name[$i]."<br>";
    $i++;
}  */


/* Associated Array */

$price= array("shirt"=>"500","pent"=>"1000", "panjabi"=>"2000");
foreach($price as $p=>$value){
    echo $p.' : '.$value;
}


?>

<?php

    $x = 100;
    $y = 200;

    function multipication(){
        global $mul;
       $mul = $GLOBALS['x'] * $GLOBALS['y'];
        // echo $mul;
    }

    multipication();
    echo "[".$GLOBALS['mul']."]";

?>
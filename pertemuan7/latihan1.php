<?php
    $y = 25;
    $x = 75;
    
    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;
?>
<?php

function factorial( int $numero){
    $factorial=1;
    for($i=1;$i<=$numero;$i++){
        $factorial=$factorial*$i;
    }

    return $factorial;
}


?>
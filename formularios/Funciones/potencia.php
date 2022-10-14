<?php
    function potencia(int $b, int $x){
        $resultado=1;
        if($x<0){
            $resultado=-1;

        } else if ($x==0){
            $resultado=1;
        }else{
            for($i=1;$i<=$x;$i++){
                $resultado=$resultado*$b;
            }
        }
        return $resultado;
    }

?>
<?php

//1-a
function maior($a,$b,$c) {
    if ($a>$b){
        if($a>$c){
            return $a;
        } else {
            return $c;
        }
    } else {
        if ($b>$c){
            return $b;
        }else {
            return $c;
        }
    }
}

echo maior(30,20,10);

//1-b
    function sequencia($base,$limite){
        $seq = [];
        for ($i=$base; $i <= $limite ; $i++) { 
            $seq[] = $i;
        }
        return $seq;
    }

    echo "<pre>";
    var_dump(sequencia(2,15));
    echo "</pre>";
?>
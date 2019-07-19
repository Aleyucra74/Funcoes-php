<?php
    function concatena($str1,$str2){
        return $str1." ".$str2;
    }


    function somaMulti($x,$y){
        return ($x + $y)*2;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $resul = concatena('joao','feijao');
        echo $resul;
        echo "<br>";

        echo concatena('maria','bacia');
        echo "<br>";

        echo "soma e multi:<br>";
        echo somaMulti(5,5);
        echo "<br>";

    ?>
</body>
</html>
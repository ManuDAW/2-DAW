<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            $cad='I am rotating this phrase';
            echo $cad;
            $invertido=explode(" ",$cad);
            $stringinv;
            echo ("<br>");
            for ($i = 0; $i < count($invertido); $i++) {
                echo (strrev($invertido[$i]) . " ");
                }


        ?>
    </body>
</html>

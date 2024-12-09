<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <?php
        $n=49; 
        if($n == 50){
            $print="The number $n is equal to 50.";
        }
        elseif ($n < 50){
            $print="The number $n is less than 50.";
        }
        else {
            $print="The number $n is greater than 50.";
        }
        echo $print;
         ?>
    </body>
</html>

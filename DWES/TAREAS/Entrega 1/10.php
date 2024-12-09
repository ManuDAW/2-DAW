<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <?php
        $n=3;
        $sum = 0;
        $i = 0;
        while ($i < $n) { 
            
            if ($i % 2 == 0 || $i == 0){
                $i++;
                $sum = $sum + $i; 

            } 
            else {
                $i++;
                $sum = $sum - $i;
            }
           
        }
        echo $sum
        ?>
    </body>
</html>

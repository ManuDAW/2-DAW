<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <?php
        $x=51; 
        $y=50;

        if ($x > $y) {
            $result = "are not ordered";
        }
        elseif ($x < $y) {
            $result = "are ordered";
        }
        else {
             $result = "are the same numbers";
        }

        echo "The numbers $x and $y $result ";
         ?>
    </body>
</html>

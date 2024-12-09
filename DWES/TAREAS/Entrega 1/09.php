<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <?php
        $times = 10;
        $n = 4;
        $potencia = 1;  
        for ($i=0; $i < $times; $i++) { 
          echo "$n^$i = $potencia" . "<br>";
          $potencia = $potencia * $n;   
        }
        ?>
    </body>
</html>

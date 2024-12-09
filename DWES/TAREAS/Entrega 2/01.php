<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            $array = [15, 3, 6, 1, 4, 3, 6, 7, 6, 9];
            print_r($array);

            $suma = 0;
            $mayores = 0;
            $menores = 0;
            $iguales = 0;



            for ($i = 0; $i < count($array); $i++) {
            $suma = $suma + $array[$i];
            }

            $media = $suma / count($array);
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i]>$media){
                $mayores++;
                }
            }
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i]<$media){
                $menores++;
                }
            }

            $iguales=count($array)-$mayores-$menores;

            echo ("<br>The average of elements of the array is: $media");
            echo ("<br>Total of integers in arra that are greater than $media = $mayores");
            echo ("<br>Total of integers in arra that are lower than $media = $menores");
            echo ("<br>Total of integers in arra that are equal to $media = $iguales");



        ?>
    </body>
</html>

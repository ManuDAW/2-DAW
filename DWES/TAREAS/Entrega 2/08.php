<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            function intercambiar(&$x, &$y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
            }


            $x = 5;
            $y = 10;
            echo "Antes del intercambio: x = $x, y = $y\n";

            intercambiar($x, $y);

            echo "Después del intercambio: x = $x, y = $y\n";
        ?>
</body>
</html>

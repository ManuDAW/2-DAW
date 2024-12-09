<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            function sum() {
                $suma = 0;
                $numerosSumados = ''; // Iniciar como string

                $args = func_get_args(); // Obtener los argumentos pasados a la función
                $numArgs = func_num_args(); // Obtener el número de argumentos


                for ($i = 0; $i < $numArgs; $i++) {
                    $suma = $suma + $args[$i];
                    $numerosSumados = $numerosSumados . " " . $args[$i]; // Concatenar los números en un string
                }

                echo "The sum of$numerosSumados is $suma";
            }

            sum(6, 5, 7, 3, 5);
        ?>
</body>
</html>





<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            $dni = "12345678";

            function calcularSumaDNI($dni) {
                $sumaDNI = 0;
                $dnixpl = str_split($dni);

                for ($i = 0; $i < 8; $i++) { // Solo sumar los primeros 8 dígitos
                    $sumaDNI = $sumaDNI + $dnixpl[$i];
                }
                $divletra = $sumaDNI % 23;
                $letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
                return $letrasDNI[$divletra]; // Retorna la letra calculada
            }

            if (empty($dni) || strlen($dni) < 8) {
                echo "Validation error";
            } else {    // Si el DNI tiene 9 caracteres y termina en letra
                if (strlen($dni) === 9 && ctype_alpha(substr($dni, -1))) {
                    $numeroDNI = substr($dni, 0, 8);
                    $letraDada = strtoupper(substr($dni, -1));
                    $letraCalculada = calcularSumaDNI($numeroDNI);

                    if ($letraDada === $letraCalculada) {
                        echo "Welcome " . $dni;
                    } else {
                        echo "Validation error";
                    }
                } elseif (strlen($dni) === 8 && is_numeric(substr($dni, 0, 8))) { // Si tiene 8 números, calcula la letra y muestra mensaje
                    $letraCalculada = calcularSumaDNI($dni);
                    echo "Welcome " . $dni . $letraCalculada;
                } else {
                    echo "Validation error";
                }
            }
        ?>
    </body>
</html>

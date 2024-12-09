<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
        <style>
            table {
                width: 50%;
                margin: 0 auto;
                border: 3px outset black;
                color:white;
            }
            th {
                padding: 10px;
                text-align: center;
                color : white;
                background-color: grey ;
                border: 2px inset black;

            }

            td {
                padding: 10px;
                text-align: center;
                color : white;
                background-color: blue ;
                border: 2px inset black;
            }

        </style>
    </head>
    <body>
        <?php

            $dSemana = [
                'Mon' => 'Monday',
                'Tue' => 'Tuesday',
                'Wed' => 'Wednesday',
                'Thu' => 'Thursday',
                'Fri' => 'Friday',
                'Sat' => 'Saturday',
                'Sun' => 'Sunday'
            ];
        ?>


        <table>
            <tr>
                <?php
                foreach ($dSemana as $corto => $largo) {
                    echo "<th>$corto</th>";
                }
                ?>
            </tr>
            <tr>
                <?php
                foreach ($dSemana as $corto => $largo) {
                    echo "<td>$largo</td>";
                }
                ?>
            </tr>
        </table>

    </body>
</html>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <h1> Euro dollar converter</h1>
        <?php
        $tasa = 1.07;
        $euro = 1; 
        echo "<table border ='1'>";
        echo "<tr style='background-color: pink;'>";
        echo "<td> Euros  </td>";
        echo "<td> Dollars </td>";
        echo "</tr>";
        for ($euro = 1; $euro <= 10; $euro++) {
            $dolares = $euro * $tasa;
            if ($euro % 2 == 0) {
                echo "<tr style='background-color: yellow;'>";
                echo "<td>" . $euro . " €" . "</td>"; 
                echo "<td>" . "$" . $dolares . "</td>"; 
                echo "</tr>"; 
            }

            else {
                echo "<tr style='background-color: grey;'>"; 
                echo "<td>" . $euro . " €" . "</td>"; 
                echo "<td>" . "$" . $dolares . "</td>"; 
                echo "</tr>"; 
            }

          
        }
        echo "</table>";
         ?>
    </body>
</html>

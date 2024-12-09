<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises</title>
    </head>
    <body>
        <?php
        $day = 8; 
        switch ($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;              
            default:
                echo "Only 1 to 7";
                break;
        }


         ?>
    </body>
</html>

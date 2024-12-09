<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            include '10sub.php';

            $filename = "ejemplo.test";

            $extension = file_extension($filename);

            $fileType = file_type($extension);

            echo "The file '$filename' has the extension '$extension' and is a '$fileType'.";
        ?>
    </body>
</html>

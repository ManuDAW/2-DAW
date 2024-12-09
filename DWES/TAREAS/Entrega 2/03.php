<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            $cad='Fajardo Muñoz, Jose';
            $nombrexpl=explode(", ",$cad);
            $apellidos = $nombrexpl[0];
            $nombre = $nombrexpl[1];

            Echo("Nombre: $nombre");
            Echo("<br>Apellidos: $apellidos");



        ?>
</body>
</html>

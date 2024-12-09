<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Exercises2</title>
    </head>
    <body>
        <?php
            $diasVlc = [
                'Monday' => 'Dilluns',
                'Tuesday' => 'Dimarts',
                'Wednesday' => 'Dimecres',
                'Thursday' => 'Dijous',
                'Friday' => 'Divendres',
                'Saturday' => 'Dissabte',
                'Sunday' => 'Diumenge'
            ];

            $mesVLC = [
                'January' => 'Gener',
                'February' => 'Febrer',
                'March' => 'Març',
                'April' => 'Abril',
                'May' => 'Maig',
                'June' => 'Juny',
                'July' => 'Juliol',
                'August' => 'Agost',
                'September' => 'Setembre',
                'October' => 'Octubre',
                'November' => 'Novembre',
                'December' => 'Desembre'
            ];


        $diaIngles = date("l");
        $diasVlc = $diasVlc[$diaIngles];

        $mesIngles = date("F");
        $mesVLC = $mesVLC[$mesIngles];

        switch ($mesIngles) {
            case 'January':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'February':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'March':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'April':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " d'" . $mesVLC . " de " . date("Y"));
                break;
            case 'May':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'June':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'July':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'August':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " d'" . $mesVLC . " de " . date("Y"));
                break;
            case 'September':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'October':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " d'" . $mesVLC . " de " . date("Y"));
                break;
            case 'November':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
            case 'December':
                echo ("Avui es " . $diasVlc . ", " . date("d") . " de " . $mesVLC . " de " . date("Y"));
                break;
        }
        ?>
    </body>
</html>

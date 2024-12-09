<?php

function file_extension($filename) {
    $extension = strtoupper(pathinfo($filename, PATHINFO_EXTENSION));
    return $extension;
}


function file_type($extension) {

    $extension = strtoupper($extension);


    switch ($extension) {
        case 'PDF':
            return "Adobe File";
        case 'TXT':
            return "Text File";
        case 'HTML':
        case 'HTM':
            return "HTML File";
        case 'PPT':
            return "Microsoft Powerpoint File";
        case 'DOC':
            return "Microsoft Word File";
        case 'GIF':
            return "GIF Image";
        case 'JPG':
            return "JPG Image";
        case 'ZIP':
            return "ZIP File";
        default:
            return "$extension File";
    }
}
?>

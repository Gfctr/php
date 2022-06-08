<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Time</title>
</head>
<body>

<?php
// exibe algo como: arquivo.txt foi modificado em December 29 2002 22:16:23.

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$filename = '//10.1.1.200/export/USER_FULL_WINT_010620_1900.log';
if (file_exists($filename)) {
    echo "modificado em " . date ("F d Y H:i:s.", filemtime($filename));
    echo "<br>".date ("H:i:s.", filemtime($filename));
}
?>
    
</body>
</html>
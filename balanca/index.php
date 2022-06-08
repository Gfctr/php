<?php ob_start('comprimir_pagina'); ?> 
<!DOCTYPE html>
<html class="index">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Carga Balança </title>
        <link rel="stylesheet" type="text/css" href="./files/estilo.css">
        <link rel="shortcut icon" href="./files/icon.png" type="image/x-icon">
    </head>
<body>
    <?php

    $arquivo = file('D:\BEMMAIOR\CPD\Toledo\ITENSMGV.txt');
    foreach ($arquivo as $indice => $conteudo) {
        $novo[] = $conteudo;
    }
       
    foreach ($novo as $conteudo) {
        $conteudo2 = substr($conteudo, 0, 3);
        $conteudo = substr($conteudo, 3);

        if ($conteudo2 == '161' || $conteudo2 == '160') {
            $conteudo2 = '010';
        }
            $contnovo = $conteudo2 . $conteudo;
            $arqnovo[] = $contnovo;
        }

    $str = implode("", $arqnovo);
    $name = 'D:\BEMMAIOR\CPD\Toledo\ITENSMGV.txt';
    $file = fopen($name, 'w+');
    fwrite($file, $str);
    fclose($file);
    echo '';
        ?>
    
    <?php /*
    $url='https://www.instagram.com/bemmaioratacadoevarejo/';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="6; '.$url.'">'; */
    ?>
        
    <div align="center"><br>
        <div class="progress">
            <div class="progress-bar"></div>
                <h3><b>v 1.0 <br> DADOS ALTERADOS COM SUCESSO</b></h3>
        </div>
    </div>
      
</body>
</html>
<?php
ob_end_flush(); 
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>
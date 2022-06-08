<?php

//Criar arquivo de texto para armazenar o total de visitas, inicialmente salvar com 0
    $arquivo = "contador.txt";
    $handle = fopen($arquivo, 'r+');
    $data = fread($handle, 512);
    $contador = $data + 1;
    print "<p>Visitas: $contador</p>";
    fseek($handle, 0);
    fwrite($handle, $contador);
    fclose($handle);

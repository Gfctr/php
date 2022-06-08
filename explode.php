<?php

/* Exemplo 01 
// URL DO SITE
$url = './bemmaior/assets/links/PCSIS2075.ass';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('<versao>',$dadosSite);
$var2 = explode("</versao>",$var1[1]);

print $var2[0];

/* Exemplo 02 com condição se existe 

if(file_exists("./bemmaior/assets/links/PCSIS2075.ass")){
    $url = './bemmaior/assets/links/PCSIS2075.ass';
    $dadosSite = file_get_contents($url);
    $var1 = explode('<versao>',$dadosSite);
    $var2 = explode("</versao>",$var1[1]);
    print $var2[0];
}else{
    echo "?";
}

// URL DO SITE
$url = 'C:\Users\gfctr\Downloads\clisitefwin32\clisitef-7.0.116.5.r1-Producao-Win32/Release.txt';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('clisitef-',$dadosSite);
$var2 = explode(".r1-Producao-Win32",$var1[1]);

print $var2[0];

?>

<!--
$zipname = 'adcs.zip';
$zip = new ZipArchive;
$zip->open($zipname, ZipArchive::CREATE);
if ($handle = opendir('C:/users/gfctr/downloads/2075')) {
  while (false !== ($entry = readdir($handle))) {
    if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
        $zip->addFile($entry);
    }
  }
  closedir($handle);
}

$zip->close();

header('Content-Type: application/zip');
header("Content-Disposition: attachment; filename='adcs.zip'");
header('Content-Length: ' . filesize($zipname));
header("Location: adcs.zip");

--> 

$url2075 = "http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/";
$headers = @get_headers($url2075);

if ($headers && strpos($headers[0], '200')) {
  $url = 'http://servicos.pcinformatica.com.br/autoservico/instaladores/2075_/';
  $dadosSite = file_get_contents($url);
  $var1 = explode('/2021', $dadosSite);
  $var2 = explode('     ', $var1[1]);

  echo $var2[0];
  echo $var2[1];
  echo $var2[2];
  echo $var2[3];

  /*if ($var2 == " PM") {
													//Quando falhar no portal conferir a hora, PM ou AM
													$var3 = explode('30.', $dadosSite);
													$var4 = explode("_PCSIS2075.ZIP", $var3[1]);
													echo "30." . $var4[0] . " " . $var2[0];
												}
												else{
													echo "Indisponível!";
												}
} else {
  echo "Indisponível";
}

<?php*/

// URL DO SITE
$url = 'https://dolarhoje.com/';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('id="nacional" value="', $dadosSite);
$var2 = explode('"/></span><span class="optional"> hoje', $var1[1]);

print "Dolar: " . $var2[0];

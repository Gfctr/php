<!-- 1 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
</head>
<body>

        <script type="text/javascript">
            var auto_refresh = setInterval(
                function() {
                    $('#dolar').load('dolar2.php').fadeIn("slow");
                }, 1000); // refreshing after every 15000 milliseconds
        </script>    
        <div id="dolar"> </div>
    
</body>
</html>

<!-- 2 -->
<div id="dolar" align="center">

<?php
// URL DO SITE
$url = 'https://dolarhoje.com/';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('<span class="cotMoeda estrangeira"><span class="symbol">',$dadosSite);
$var2 = explode('</span>',$var1[1]);

$var3 = explode('id="estrangeiro" value="',$dadosSite);
$var4 = explode('"/>',$var3[1]);

$var5 = explode('<span class="cotMoeda nacional"><span class="symbol">',$dadosSite);
$var6 = explode('</span>',$var5[1]);

$var7 = explode('id="nacional" value="',$dadosSite);
$var8 = explode('"/>',$var7[1]);

echo "Dolar: ".$var2[0]." ".$var4[0]."<br>Real: ".$var6[0]." ".$var8[0];

?>


<?php /* 
date_default_timezone_set('America/Araguaina');
$time = date('H:i:s d/m/Y');
echo "<br>".$time;
*/

?>

</div>

<!-- 1 -->
<?php

for ($i = 0; $i <= 2000; $i++) {
    echo copy("D:/mega.rar", "D:/$i mega.rar");    
    set_time_limit(0);
}
    echo "$i arquivos copiados com sucesso";
?>

<!-- 2 -->

<?php 

function custom_copy($src, $dst) { 

	// open the source directory 
	$dir = opendir($src); 

	// Make the destination directory if not exist 
	@mkdir($dst); 

	// Loop through the files in source directory 
	while( $file = readdir($dir) ) { 

		if (( $file != '.' ) && ( $file != '..' )) { 
			if ( is_dir($src . '/' . $file) ) 
			{ 

				// Recursively calling custom copy function 
				// for sub directory 
				custom_copy($src . '/' . $file, $dst . '/' . $file); 

			} 
			else { 
				copy($src . '/' . $file, $dst . '/' . $file); 
			} 
		} 
	} 

	closedir($dir); 
} 

$src = "C:/Users/gfctr/Downloads/2075"; 

$dst = "C:/Users/gfctr/Downloads/2076"; 

custom_copy($src, $dst); 

?> 

<?php 
$text = $_POST["text"];

$fp = fopen("in.txt","w");
fwrite($fp,$text);
fclose($fp);

#call your python script here and make sure your python script is also at same place as this script
$status = system("python3 case_convert.py in.txt");

$fp_out = fopen("out.txt","r");
if ($fp_out) {
	while (($line = fgets($fp_out)) !== false) {
		// process the line read.
		echo "$line";
	}

	fclose($fp_out);
} else {
	// error opening the file.
} 

?>

<?php  
$cont = file_get_contents("cot.txt");
$array = explode("\n", $cont);
foreach ($array as $key => $value) {

	// $value = 'Robin Asdf Morris'
	$strArray = explode(" ", $value);

	if (count($strArray) == 3) {
		if ($strArray[0] == 'Robin' && $strArray[2] == 'Morris') {
			echo $strArray[1];
		}
	}

}
?>
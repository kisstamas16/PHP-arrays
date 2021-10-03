<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>torpe többdimenziós tömb</title>
</head>
<body>
<div>
<?php

$torpek = array (
            array ( 
			"nev"=>"Hapci", 
			"kor"=>125,
			"cim"=>"erdo"
			),
            array ( 
			"nev"=>"Kuka", 
			"kor"=>410,
			"cim"=>"erdo"
			),
            array ( 
			"nev"=>"Vidor", 
			"kor"=>311,
			"cim"=>"erdo"
			)           
		);

/*print $torpek[1]["nev"];*/

foreach($torpek as $akarmi){
foreach($akarmi as $kulcs =>$ertek){
print "$kulcs --- $ertek<br>";
}
}
/*print("<pre>");
$karakterlánc=print_r($torpek);
print("</pre>");
print count($torpek);
print end($torpek);*/
?>
</div>
</body>
</html>


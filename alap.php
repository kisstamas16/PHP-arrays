<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> alap</title>
</head>
<body>
<?php
//ebből indulunk ki az órán, moodle-ba feltölteni
$egyik=array(1,2,3,9,4,5);
$masik=array("Hapci", "Kuka", "Vidor");


$torpe1=array( "nev"=>"Hapci", "kor"=>125, "cim"=>"erdo" );
$torpe2=array( "nev"=>"Szundi", "kor"=>311, "cim"=>"erdo" );

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

?>
</body>
</html>



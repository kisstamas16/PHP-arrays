<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>tömb gyakorlás</title>
</head>
<?php
$egyik=array(1,2,3,9,4,5);
$masik=array(6,7,8,9,10);

$torpe1 = array("Hapci", "Kuka", "Vidor");
$torpe2 = array("Szende", "Szundi", "Morgó"); 
//7. fólia
$ize=array ( 
			"nev"=>"Hapci", 
			"kor"=>125,
			"cim"=>"erdo"
			);
//5.folia, utána átmásoljuk az alap.php elejét
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
print("<pre>");
print_r($torpek);
print("</pre>");
print count($torpek)."<br>";

//7.folia
foreach($torpe1 as $i){ print $i."<br>";}

foreach($ize as $kulcs =>$ertek){
print $kulcs.": ";
print $ertek."<br>";
}

foreach($torpek as $akarmi){
foreach($akarmi as $kulcs =>$ertek){
print $kulcs.": ";
print $ertek."<br>";
}
print "<br>";
}
//9. fólia
$harmadik=array_merge($egyik, $torpe2);
print("<pre>");
print_r($harmadik);
print("</pre>");

//array_push($masik, 1,2);
array_push($torpe1, $torpe2);
print("<pre>");
//print_r($masik);
print_r($torpe1);
print("</pre>");

array_shift($masik);
print("<pre>");
print_r($masik);
print("</pre>");

$x=array_slice($egyik, 2, 5);
print("<pre>");
print_r($x);
print("</pre>");

//10.fólia
$y=implode($torpe2);
print("<pre>");
print_r($y);
print("</pre>");

$a="Szende";
print in_array($a,$torpe2);

//11. folia
sort($egyik);
print("<pre>");
print_r($egyik);
print("</pre>");

asort($ize);
print("<pre>");
print_r($ize);
print("</pre>");

/*print("<pre>");
$karakterlánc=print_r($torpek);
print("</pre>");
print count($torpek);
print end($torpek);*/
?>

</body>
</html>

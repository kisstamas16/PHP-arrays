<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> alma körte</title>
</head>
<body>
<?php
//alma, korte árak
$alma=array(300,350, 400, 420, 440, 500);
$korte=array(500,560, 570, 590, 600,700);
//tavalyi alma, korte árak
$t_alma=array(50, 130, 140, 150,250);
$t_korte=array(250,300,310, 320, 350, 370,);

//idei alma és körte árak egy tömbben
$idei=array ( 
			"alma"=>$alma,
			"korte"=>$korte
			);
//tavalyi alma és körte árak egy tömbben
$tavalyi=array ( 
			"alma"=>$t_alma,
			"korte"=>$t_korte
			);
// az idei és a tavalyi tömbből kiindulva ( az első 4 tömböt nem ismerjük, ez fontos!) irasd ki az összes almaárat egyetlen tömbben, sorbarakva az árakat 			
$pelda['alma']=(array_merge($idei['alma'],
$tavalyi['alma']));
sort($pelda['alma']);	
		
print("<pre>Az összes almaár sorbarendezve :");
print_r($pelda['alma']);
print("</pre>");

?>
</body>
</html>




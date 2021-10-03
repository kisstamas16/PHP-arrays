<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
<?php
for ( $y=0; $y<=10; $y++ ) {;
    for ( $x=0; $x<=10; $x++ ) { 
	  $v[$x][$y]=0;
    }
}

$db=rand(10,15);
$lerakott=0;
while($lerakott < $db){
	$x=rand(0,10);
	$y=rand(0,10);
	if($v[$x][$y]==1) continue;
	else {$v[$x][$y]=1; $lerakott++;}
}

$a = $_GET['a'];
$b = $_GET['b'];

if ($v[$a][$b]==1) print "Talalt, sullyedt";
else print "Nem talalt";
//kiiratás
for ( $y=0; $y<=10; $y++ ) {;
print "<br>";
    for ( $x=0; $x<=10; $x++ ) {	 
	  print "A(z) ".$x." ,".$y."-ik ertek:".$v[$x][$y]."  ";
    }
}
?>
</div>
</body>
</html>
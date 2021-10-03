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
$i=rand(0,10);
$j=rand(0,10);
for ( $y=0; $y<=10; $y++ ) {;
    for ( $x=0; $x<=10; $x++ ) {
	if (($x==$i) && ($y==$j)) {$v[$x][$y]=1;}//itt van tengeralattjáró
      else	 
	  $v[$x][$y]=0;
    }
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

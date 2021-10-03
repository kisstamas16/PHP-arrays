<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> Szuperglobális változók</title>
</head>
<body>
<div>
<?php
print "<h3>\$GLOBALS tartalma: </h3>";
print "<pre>";
print_r($GLOBALS);
print "</pre>";
?>
<?php
print "<h3>\$_COOKIE tartalma: </h3>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
?>

<?php
print "<h3>\$_COOKIE tartalma: </h3>";
foreach ($_COOKIE as $kulcs2=>$ertek2 ) {
   print "\$_COOKIE[$kulcs2] -- $ertek2<br>";
}
?>
</div>
</body>
</html>

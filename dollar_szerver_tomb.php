<?php  
header("Content-type: text/html; charset=utf-8");  
?> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> $_SERVER tömb bejárása</title>
</head>
<body>
<div>
<?php
print "<h3>\$_SERVER tartalma: </h3>";
print "<pre>";
print_r($_SERVER);
print "</pre>";

print "<h3>A program elérési útja a szerveren: </h3>";
  print_r($_SERVER["PHP_SELF"]);
?>

</div>
</body>
</html>

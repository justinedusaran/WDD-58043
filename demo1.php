<html>
<head><title>This is my first webpage</title></head>
<body bgcolor = "sky blue" >
<p> This HTML will get delivered as is </p>
<?php echo "<p>But this file will be interpreted by PHP turned into HTML</p>";
	
	$num1 = 6;
	$num2 = 2;
	$sum = $num1 + $num2;
	$username = "Tin";
	echo $username;
	$count = 17;
	echo "<br>";
	echo $count;	
	echo "<br>";
	echo "6 + 2 = " .$sum;
	echo "<br>";
	echo "My Name is ".$username;
//This is the snipper for php code
?>

</body>
</html>
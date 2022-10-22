<html>
<head><title>My Looping Statements</title></head>
<?php

$fuel = 10;

//while loop
while ($fuel>1)
{
	echo "There's enough fuel! <br>";
	--$fuel;
}

echo "<br>";

//do...while
$count = 1;

do
	echo "$count times 12 is ". $count*12 . "<br>";
while(++$count<=12);

/* 
do
{
	echo "There's enough fuel! <br>";
}
while(--$fuel>1)
*/

echo "<br>";

//for loop 
for($fuel=10; $fuel>=1; --$fuel)
{
	echo "There's enough fuel <br>";
}


echo "<br>";

//foreach
$colors = array("red","green","blue");
foreach($colors as $value)
{
		echo "$value <br>";
}


echo "<br>";

//break statement
for($x=0; $x<10; $x++)
{
		if($x==4)
		{
			echo "The number is $x <br>";
			break;
		}
}

echo "<br>";


//continue
for($x=0; $x<10; $x++)
{
		if($x==4)
		{
			continue;
		}
	echo "The number is $x <br>";
}

echo "<br>";

//Let's Try
for($x=9; $x>2; $x--)
{
	echo "$x <br>";
}

?>
</html>
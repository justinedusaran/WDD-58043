<html>
<head>
<title>My First Webpage</title>
<body align=center><h1>
<?php
//Equality and Inequality
$a = "1000";
$b = "+1000";
$month = "December";

if($a===$b) echo "a is equal to b <br>";
if($month=="December") echo "It is Christmas time!";

//Comparison Operators
if($a>$b) echo "a is greater than b <br>";
if($a<$b) echo "a is less than b";
echo "<br>";
if($a>=$b) echo "a is greater than or equal to b";
echo "<br>";
if($a<=$b) echo "a is less than or equal to b";

//Logical Operators
$c = 1;
$d = 0;

echo $c AND $d;
echo "<br>";
if ($c OR $d)
{
	echo "One of the operands or both operands are true";
}
echo "<br>";
echo $c XOR $d;

//The if Statement
$bank_balance = 120;
$savings = 100;

if($bank_balance<100)
{
	$money=1000;
	$bank_balance+=$money; //The same as bank_balance = bank_balance + money
	echo "<br>";
	echo "The bank balance is: ".$bank_balance;
}	

//The else Statement
else
{
	$savings+=50; //The same as savings = savings + 50
	$bank_balance-=50; //The same as bank_balance = bank_balance - 50
	echo "<br>";
	echo "The savings is: ".$savings;
	echo "<br>";
	echo "The bank balance is ".$bank_balance;
}
echo "<br>";

//The switch statement
$page = "Home";
switch($page)
{
	case "Home":
	{
		echo "You choose Home";
		break;
	}
	case "Login":
	{
		echo "You choose Login";
		break;
	}
	case "Links":
	{
		echo "You choose Links";
		break;
	}
	default:
	{
		echo "None of the choices is correct";
	}
}
echo "<br>";

//The ? Operator
$fuel = 2;
echo $fuel<=1? "Fill tank now": "There's enough fuel";


?></h1>
</body>
</head>
</html>
<html>
<head><title>Dusaran - Long Quiz 2</title></head>
<body align = center>
<?php

echo "<b>Problem 1.</b><br>"; 
//Create a PHP program that will perform the following mathematical operations, to produce the required output.

$salary_rate = 600;
$salary = $salary_rate*15;
$taxable_amount = .30*$salary;
$net_pay = $salary - $taxable_amount;

echo"<br>";
echo "Salary rate: $salary_rate/day";
echo"<br>";
echo "Salary (15 days): " .$salary;
echo"<br>";
echo "Taxable amount (30% of salary): " .$taxable_amount;
echo"<br>";
echo "Net pay: " .$net_pay;
echo"<br><br>";

echo "<b>Problem 2.</b><br>";
//Create a PHP program that will add all positive integers from 1-50 using loop statement.

$sum = 0;
for($x = 1; $x<=50; $x++)
{
	$sum += $x;
}
	echo "<br>The sum of all integers from 1 to 50 is " .$sum;

?>
</body>
</html>
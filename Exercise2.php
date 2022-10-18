<html>
<head>
<title>Exercise 2</title>
<?php

$grades = 88;
echo "The student's grade is ".$grades;
echo "<br>";

switch($grades)
{
	case($grades>=70):
	{
		echo "PASSED";
		break;
	}
	case($grades>=60 && $grades<=69):
	{
		echo "REMEDIAL";
		break;
	}
	case($grades<60):
	{
		echo "FAILED";
		break;
	}
}

?>
</head>
</html>
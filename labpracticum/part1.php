<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab Practicum</title>
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/labpracticum.css" type="text/css" />
</head>

<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
<div class= "top-b">
	Total Shipping Cost
</div>
<div class= "body-b">
<?php
	
	$Pounds = $_POST ['Weight'];
	$Train = $_POST ['Train'];
	$TrainCost = $Pounds * 0.01 * $Train;
	$Truck	= $_POST ['Truck'];
	$TruckCost = $Pounds *  0.02 * $Truck;
	$Car = $_POST ['Car'];
	$CarCost = $Pounds *  0.05 * $Car;
	
	$TotalCost = $TrainCost + $TruckCost + $CarCost;
	
	echo "<br />For a ", $Pounds, " pounds package, it is estimated that: <br />";
	echo "$", $TrainCost, " Train freight cost<br />";
	echo "$", $TruckCost, " Truck freight cost<br />";
	echo "$", $CarCost, " Car freight cost<br /><br />";


?>
</div>
<div class="bot-b">
<?php
	echo "Total shipping charges: $", $TotalCost;
?>
</div>
<?php
{
    echo "<p>", date("H:i M d, Y T", getlastmod()), " | <a href='../labpracticum.php'>Return to form page</a></p>";
}
?>
	</div>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</body>
</html>
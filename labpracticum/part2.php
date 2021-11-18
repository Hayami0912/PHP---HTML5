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
	<div class ="top-b">
		Passengers Distribution Result
	</div>
	<div class ="body-b">
	<?php 
	define('BUS_CAPACITY', 35);
	define('CAR_CAPACITY', 6);

	$passengers = @$_POST['passengers'];

	function display_option($number) {
		$string = "";
		for ($i = 0; $i < $number; $i++) {
			$string .= "o ";
		}
		return $string;
		}
		
	if ($passengers) 
		{
			echo "$passengers passengers need transportation: <br /> <br />";
			$bus_ontake = round($passengers/BUS_CAPACITY, 2) % 10;
			$left_over = $passengers % BUS_CAPACITY;
			$car_ontake = round($left_over/CAR_CAPACITY, 2) % 10;
			$left_over = $left_over % CAR_CAPACITY;
			echo $bus_ontake, " Busses Needed<br />";
			echo display_option($bus_ontake),"<br />";
			echo $car_ontake, " Cars Needed<br/>";
			echo display_option($car_ontake),"<br />";
			echo $left_over, " Passengers left over<br />";
			echo display_option($left_over),"<br />";
		} 
    ?>
	</div>
	<div class ="bot-b">
	Legend: Passengers per Bus = 35 | per Car = 6
	</div>
<?php
if ($passengers) 
{
    echo "<p>", date("H:i M d, Y T", getlastmod()), " | <a href='./labpracticum_p2.html'>Return to form page</a></p>";
}
?>
	</div>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</body>
</html>
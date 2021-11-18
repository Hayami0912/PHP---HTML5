<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab Practicum 2</title>
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/labpracticum2.css" type="text/css" />
</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
<div class="lab_activity">
<?php
function build_calendar($month,$year,$day) 
							{
								$daysOfWeek = array('S','M','T','W','T','F','S');
								$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
								$numberDays = date('t',$firstDayOfMonth);
								$dateComponents = getdate($firstDayOfMonth);
								$monthName = $dateComponents['month'];
								$dayOfWeek = $dateComponents['wday'];
								$calendar = "<table class='calendar'>";
								$calendar .= "<h2>$monthName $day, $year</h2>";
								$calendar .= "<tr>";
								foreach($daysOfWeek as $day) 
									{
									   $calendar .= "<th>$day</th>";
									}	 
								$currentDay = 1;
								$calendar .= "</tr><tr>";
								if ($dayOfWeek > 0) 
									{ 
										$calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
									}
								$month = str_pad($month, 2, "0", STR_PAD_LEFT);							  
								while ($currentDay <= $numberDays) 
									{
										if ($dayOfWeek == 7) 
											{
												$dayOfWeek = 0;
												$calendar .= "</tr><tr>";
											}
										$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);  
										$date = "$year-$month-$currentDayRel";
										$calendar .= "<td class='day' rel='$date'>$currentDay</td>";
										$currentDay++;
										$dayOfWeek++;
										
									}
								if ($dayOfWeek != 7) 
									{ 
										$remainingDays = 7 - $dayOfWeek;
										$calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

									}
								
								$calendar .= "</tr>";
								$calendar .= "</table>";
								return $calendar;
							}
?>


<?php
if(!empty($_POST["month"]) && !empty($_POST["day"]) && !empty($_POST["year"]))
	{
		$month = $_POST["month"];
		$day = $_POST["day"];
		$year = $_POST["year"];
		$newEntry = $month.",".$day.",".$year."\n";
		if  ($year >= 2038)
			{
				echo "<p>The entered year has exeeded the allowed year (the year needed be less than 2038)</p>";
				echo "<hr />";
				echo "<a href = '../labpracticum2.php'><a3>Return back to mainpage</a3></a><br/>";
			}
		elseif ($year <= 1970)
			{
				echo "<p>The entered year has exeeded the allowed year (the year needed be greater than 1970)</p>";
				echo "<hr />";
				echo "<a href = '../labpracticum2.php'><a3>Return back to mainpage</a3></a><br/>";
			}
		
		else
			{
				$File = fopen("file.txt","a");
				if(fwrite($File,$newEntry)>0)
					{
						echo build_calendar($month,$year,$day);
						echo "<p>write successfully</p><br/>";
						echo "<a href = 'file.txt'>View the dates stored in the text file<a><br />";
						echo "<a href = '../labpracticum2.php'><a3>Return back to mainpage</a3></a><br/>";
					}
			}
	}	
else
	{
		echo "<p>Please enter all the details</p>";
		echo "<hr />";
		echo "<a href = '../labpracticum2.php'><a3>Return back to mainpage</a3></a><br/>";
	}			
?>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
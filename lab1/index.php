<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8"/>
<title>Home Page</title>
	
	<link rel="stylesheet" href="css/theme.css" type="text/css" />
	
</head>
<body>
<div class="header">

	<?php include "ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "ssi/SubContent1.php"; ?>
	
	<div class="SubContent2">
		<div class="GMU">
			<br />
			<br />
			<img src="https://i.ibb.co/qMbFcZs/profile.png" width="250" height="250" alt="Profile Picture" />
			<?php 

				$birthday = new DateTime('2000-09-12');
				$currentDate = new DateTime('now');

				$interval = $birthday->diff($currentDate);

				echo "<br />My age is: ", $interval->format('%y');
			?>

		</div>

		<div class="Summary">
			<h4>Summary</h4>
				<ul>
					<li>Personal</li>
						<ul>
							<li>Fast Learner</li>
							<li>Introvert</li>
							<li>Critical Thinking</li>
						</ul>
					<li>Academic</li>
						<ul>
							<li>3.5 GPA or higher</li>
							<li>Perfect Attendance</li>
							<li>Knowledge driven</li>
						</ul>
				</ul>
				<?php 
			$Moto = array("Eat Well");
			$Moto[] = "Sleep Well";
			$Moto[] = "Study Well";
			echo "<br />", print_r($Moto);
			?>
		</div>
	</div>
	<div class="SubContent3">
		<div class="Paragraph">
			<h3>Professional & Personal Details</h3>
			<p>
				Hi my name is Nhat Nguyen. 
				I am going by Nate with my friends to avoid being called gnat.
				I was born in Ho Chi Minh City, Vietnam and moved to the States since 2007.
				I have lived in Virginia ever since. I am a transfer student from NVCC. 
				I often traveled throughout South East Asia countries when I was young; Singapore, Malaysia Thailand, Japan, China. 
				However, I have yet to get a chance to travel outside of the States ever since I moved; traveling might have to wait until school is over.
				I am currently majored in IT concentrated in DTP and working as a junior network engineer for a MSSP.
			</p>
		<?php
			function rainbow($text)
			{
				$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
				$return = '';
				$colors = new InfiniteIterator(
					new ArrayIterator(
						['ff00ff', 'ff0099', 'ff0033', 'ff3300',
						 'ff9900', 'ffff00', '99ff00', '33ff00',
						 '00ff33', '00ff99', '00ffff', '0099ff',
						 '0033ff', '3300ff', '9900ff']
					)
				);
				$colors->rewind();
				preg_match_all('/.\pM*+/su', $text, $matches);
				foreach ($matches[0] as $char)
				{
					if (preg_match('/^\pZ$/u', $char)) {
						$return .= $char;
					} else {
						$return .= "<span style='color:#{$colors->current()};'>$char</span>";
						$colors->next();
					}
				}
				return $return;
			}
			echo rainbow('Study, study more, study forever.');
			?>
		</div>
	</div>
	<?php include "ssi/copyrights.php"; ?>
</div>
</div>	
</body>
</html>
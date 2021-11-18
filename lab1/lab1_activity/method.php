<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8"/>
<title>Lab Assignment 1</title>
	
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />

</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class ="method1">
	<?php
	#get input value
	$Pearn = $_POST ['Pearn'];
	$Pmax = $_POST ['Pmax'];
	$Pweight = $_POST ['Pweight'];
	$Qearn = $_POST ['Qearn'];
	$Qmax = $_POST ['Qmax'];
	$Qweight = $_POST ['Qweight'];
	$Learn = $_POST ['Learn'];
	$Lmax = $_POST ['Lmax'];
	$Lweight = $_POST ['Lweight'];
	$Prearn = $_POST ['Prearn'];
	$Prmax = $_POST ['Prmax'];
	$Prweight = $_POST ['Prweight'];
	$LetterGrade = "F";
	
	#Participation
	$PartPercent = ($Pearn * 100) / $Pmax;
	$PartWeightPercent = ($Pearn * $Pweight) / $Pmax;
	echo "<h2>You earn a ",round($PartPercent, 2),"% for Participation, with a weighted value of ",round($PartWeightPercent, 2),"% <br /></h2>";
	#Quizzes
	$QuizPercent = ($Qearn * 100) / $Qmax;
	$QuizWeightPercent = ($Qearn * $Qweight) / $Qmax;
	echo "<h2>You earn a ",round($QuizPercent, 2),"% for Quizzes, with a weighted value of ",round($QuizWeightPercent, 2),"% <br /></h2>";
	#Lab
	$LabPrecent = ($Learn * 100) / $Lmax;
	$LabWeightPercent = ($Learn * $Lweight) / $Lmax;
	echo "<h2>You earn a ",round($LabPrecent, 2),"% for Lab Assignments, with a weighted value of ",round($LabWeightPercent, 2),"% <br /></h2>";
	#Practica
	$PracPercent = ($Prearn * 100) / $Prmax; 
	$PracWeightPercent = ($Prearn * $Prweight) / $Prmax;
	echo "<h2>You earn a ",round($PracPercent, 2),"% for Practica, with a weighted value of ",round($PracWeightPercent, 2),"% <br /></h2>";
	#Final Grade
	$FinalGrade = $PartWeightPercent + $QuizWeightPercent + $LabWeightPercent + $PracWeightPercent;
	
	#Letter Grade
	if( $FinalGrade >= 97 )
	{
		$LetterGrade = "A+";
	}
	else if( $FinalGrade >= 93 && $FinalGrade < 97 )
	{
		$LetterGrade = "A";
	}
	else if( $FinalGrade >= 90 && $FinalGrade < 92 )
	{
		$LetterGrade = "A-";
	}
	else if( $FinalGrade >= 87 && $FinalGrade < 90 )
	{
		$LetterGrade = "B+";
	}
	else if( $FinalGrade >= 83 && $FinalGrade < 87 )
	{
		$LetterGrade = "B";
	}
	else if( $FinalGrade >= 80 && $FinalGrade < 83 )
	{
		$LetterGrade = "B-";
	}
	else if( $FinalGrade >= 77 && $FinalGrade < 80 )
	{
		$LetterGrade = "C+";
	}
	else if( $FinalGrade >= 73 && $FinalGrade < 77 )
	{
		$LetterGrade = "C";
	}
	else if( $FinalGrade >= 70 && $FinalGrade < 73 )
	{
		$LetterGrade = "C-";
	}
	else if( $FinalGrade >= 67 && $FinalGrade < 70 )
	{
		$LetterGrade = "D+";
	}
	else if( $FinalGrade >= 65 && $FinalGrade < 67 )
	{
		$LetterGrade = "D";
	}
	else
	{
		$LetterGrade = "F";
	}
	echo "<h2>Your Final Grade is a ",round($FinalGrade, 2),"% which is a ",$LetterGrade,"<br /></h2>";
	?>
	</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>

</div>
	
</body>
</html>

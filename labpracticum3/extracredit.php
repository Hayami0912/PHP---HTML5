<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab Practicum 2</title>

	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/labpracticum2.css" type="text/css" />
	
</head>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
<br />
<br />
<h1>Extra Credit</h1>
<?php
$questionString=file_get_contents("extraquestions.txt");
$answerString=file_get_contents("extraanswers.txt");
$questionLines=explode("\n",$questionString);
for($i=0;$i<(count($questionLines));$i++){
	$questionArray=explode(";",$questionLines[$i]);
	$question[$i]["question"]=$questionArray[2];
	$question[$i]["id"]=$questionArray[1];
	$question[$i]["row"]=$questionArray[0];
}
?>

<form action="extracredit.php?q=<?php echo count($questionLines); ?>" method="post">

<?php
$answerLines=explode("\n",$answerString);
$row=1;
$counter=0;
for($i=0;$i<(count($answerLines));$i++){
	$answerArray=explode(",",$answerLines[$i]);
	if($answerArray[0]!=$row){		
		$row=$answerArray[0];
		$counter=0;
	}
	$answer[$row][$counter]["answer"]=$answerArray[2];
	$answer[$row][$counter]["id"]=$answerArray[1];
	$counter++;	
}
$counter=1;
for($i=0;$i<count($question);$i++){
	$row=$question[$i]["row"];
	echo "<div class='question'>";
	echo $counter.". ".$question[$i]["question"]."<input type=hidden name='Question".$row."' value='".$question[$i]["id"]."'/>";	
	echo "</div>";
	echo "<div class='answer'>";
	for($n=0;$n<count($answer[$row]);$n++){
		echo "<div class='choice'><input type='radio' id='".$answer[$row][$n]["id"]."' name='Answer".$row."' value='".$answer[$row][$n]["id"]."'>".$answer[$row][$n]["answer"]."</input></div>";	
	}
	echo "</div>";
	echo "<br><br>";
$counter++;	
}
?>
	<input type="submit" value="Submit" />
	<input type="reset" value="Reset"  onclick='window.reload()' /> <br><br>
</form>
<?php
$score=0;
$grade=0;
if(isset($_GET['q'])){
	for($i=0;$i<$_GET['q'];$i++){
		$row=$question[$i]["row"];
		if($_POST['Question'.$row]==$_POST['Answer'.$row]){
			$score++;
		}
	}
$grade=round(($score/$_GET['q'])*100);
}
?>
<div id="Quiz_Grade">
<font style='background-color:#7b8699' color=<?php if($grade>=80){ echo "green"; }else if(($grade<80)&&($grade>=60)){ echo "yellow"; }else if(($grade<60)&&($grade>=50)){ echo "red"; }else { echo "black"; } ?>> Your Quiz Grade is a: <?php echo $grade; ?>%</font><br>
<br>
<a href="../labpracticum2.php">Return to Online Quiz</a>
</div>	
<?php include "../ssi/copyrights.php"; ?>
</div>
</div>

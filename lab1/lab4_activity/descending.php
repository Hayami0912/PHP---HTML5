<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> Descending Order</title>
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/lab_activity4.css" type="text/css" />

</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
<?php
$asc = file("comments.txt");
rsort($asc);
$count = count($asc);
for($i = 0;$i<$count;$i++)
 		{
 		    $index =1;	
            $Field = explode(",",$asc[$i]);
            echo "<p> $index. ";
            echo " Name: <a href ='mailto:$Field[1]'><a2>$Field[0]</a2></a><br/>";
            echo "Comments: $Field[2] </p>";	
            echo "<hr />";
            $index++;
 		}
?>
<br/>
<a href = "viewComments.php"><a3>Back to Comments Book</a3></a><br/>
<a href = "../assignment4.php"><a3>Add more comments?</a3></a>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
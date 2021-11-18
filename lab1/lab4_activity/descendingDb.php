<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <title>Descending Order</title>
	 <link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/lab_activity4.css" type="text/css" />

</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
<h2>Comments Book</h2> 
<?php
define("DB_SERVER", "helios.vse.gmu.edu:3306");
define("DB_USER", "nnguye76");
define("DB_PASSWORD", "keethu");
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
if($conn) 
	{
		mysqli_query($conn,"USE nnguye76");
		$sql = "SELECT id,name,email,comments FROM IT207 ORDER BY NAME DESC";
		$result = mysqli_query($conn,$sql);
		$rows = mysqli_num_rows($result);
		for($i = 0;$i<$rows;$i++)
			{
				mysqli_data_seek($result,$i);
				$row = mysqli_fetch_row($result);
				echo "<p>$row[0]. ";
				echo "Name: <a href ='mailto:$row[2]'><a2>$row[1]</a2></a><br/>";
				echo "Comments: $row[3]</p><br/>";	
				echo "<hr />";
			}
	}
?>
<br />
<a href = "viewCommentsdb.php"><a3>Back to Comments Book</a3></a>
<br />
<a href = "../assignment4db.php"><a3>Add more comments?</a3></a>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
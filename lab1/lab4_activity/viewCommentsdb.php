<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <title>Comments</title>
	 <link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/lab_activity4.css" type="text/css" />

</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
<h1>Huh?</h1>
	<p>Kirschner and Karpinski report that:</p>
	<p>Students who used social networking sites while studying scored 20% lower on tests and students who used social media had an average</p>
	<p>GPA of 3.06 versus non-users who had an average GPA of 3.82.</p>
	<p>Source: Paul A. Kirschner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010</p>
<h2>Comments</h2>
 
<?php
define("DB_SERVER", "helios.vse.gmu.edu:3306");
define("DB_USER", "nnguye76");
define("DB_PASSWORD", "keethu");
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
if($conn) 
	{
		mysqli_query($conn,"USE nnguye76");
		if(!empty($_POST['delete']))
		{
			$deleteIndex = $_POST['delete'];
			$sql = "DELETE FROM IT207 WHERE id = $deleteIndex";
			if(mysqli_query($conn,$sql))
				{
					echo "<h3>Comment Deleted</h3>";
				}	
			else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		}	
		$result = mysqli_query($conn,"SELECT id,name,email,comments FROM IT207");
		$rows = mysqli_num_rows($result);
		if($rows>0)
			{
				for($i=0;$i<$rows;$i++)
					{
						mysqli_data_seek($result,$i);	
						$row = mysqli_fetch_row($result);
						echo "<p> $row[0]. ";
						echo "Name: <a href ='mailto:$row[2]'><a2>$row[1]</a2></a><br/>";
						echo "Comments: $row[3]</p><br/>";	
						echo "<hr />";
					}		

				echo "<p><a href ='../assignment4db.php'><a3>Add New Contact</a3></a></p>";
				echo "<p><a href = 'ascendingDb.php'><a3>Sort in Ascending Order A-Z (by name)</a3></a></p>";
				echo "<p><a href = 'descendingDb.php'><a3>Sort in Descending Order Z-A (by name)</a3></a></p>";
			}
		else
			{
				echo "<p>No comments are present</p>";
				echo "<a href='../assignment4db.php'><a3>Back to Home Page</a3></a>";	
			}
	}
?>
<form action = "viewCommentsdb.php" method = "post" class="form">
Delete Comment number: <input type = "text" name = "delete"/>
<input type = "submit" value = "Delete"/>
</form>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
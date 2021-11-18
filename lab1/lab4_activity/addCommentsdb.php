<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Add Comment DB</title>
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/lab_activity4.css" type="text/css" />

</head>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
<?php
if(!empty($_POST["name"]) && !empty($_POST["email"]))
	{
		$found =0;
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comments = $_POST["comments"];		
		define("DB_SERVER", "helios.vse.gmu.edu:3306");
		define("DB_USER", "nnguye76");
		define("DB_PASSWORD", "keethu");
		define("DB_NAME", "nnguye76");
		$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
		if ($conn) 
			{
				mysqli_query($conn,"USE nnguye76");
				$found = 0;
				$result = mysqli_query($conn,"SELECT id,name,email,comments FROM IT207");
				$rows = mysqli_num_rows($result);
				if($rows>0)
					{
						for($i=0;$i<$rows;$i++)
							{
								mysqli_data_seek($result,$i);
								$row = mysqli_fetch_row($result);
								if(strcasecmp($name,$row[1])==0)
									{		
									   $found = 1;
									   break;
									}
							}
						if($found == 1)
							{
								echo "<p> Comment already present under for the user. Cannot add";
								echo "<hr />";
								echo "<br><a href = '../assignment4db.php'><a3>Back to home page</a3></a></p>";
								echo "<a href = 'viewCommentsdb.php'><a3>View comments</a3></a>";
							}  
						else
							{
								if(mysqli_query($conn, "INSERT INTO IT207(name,email,comments) VALUES ('$name','$email','$comments')"))
									{
										echo "<p> Added Comment Succefully";
										echo "<br/><a href = 'mailto:$email'><a2>$name</a2></a><br/>";
										echo "Comments: $comments <br/>";
										echo "<hr/>";
										echo "<a href = '../assignment4db.php'><a3>Someone else want to comment?</a3></a></p>";
										echo "<a href = 'viewCommentsdb.php'><a3>View comments</a3></a>";
									}
							}
					}
				else
					{
						echo"<p>No comments are present</p><br/>";
						echo"<hr />";
						echo "<a href = '../assignment4db.php'><a3>Return to home page</a3></a></p>";
					}
			}
		
	}
?>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
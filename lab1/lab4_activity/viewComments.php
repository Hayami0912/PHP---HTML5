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
	<h1>Comments</h1>
<?php
if(!empty($_POST['delete']))
	{
	    if(file_exists("comments.txt"))
		{
			$Fields = file("comments.txt");
			$count = count($Fields);
			$deleteField = $_POST['delete']-1;
			unset($Fields[$deleteField]);
			array_values($Fields);
			$updateFile = fopen("comments.txt","w");
			fwrite($updateFile,implode($Fields));
		}
	else
		{
			echo "<p>You don't have any comments to delete</p>";
			echo "<a href = '../assignment4.php'>Return back to index page</a>";
		}
   
	}
?>

<?php
if(!file_exists("comments.txt"))
	{
		echo "<p> No comments are present</p>";
		echo "<a href= '../assignment4.php'>Add New comment</a>";
	}
else
	{
		$FileRead = file("comments.txt");
		$count = count($FileRead);
		if($count==0)
			{
				echo"<p>No comments present</p>";
			}
		else
			{
				$index=1;
				for($i = 0;$i<$count;$i++)
					{
						$Field = explode(",",$FileRead[$i]);
						echo "<p> $index. ";
						echo " Name: <a href ='mailto:$Field[1]'> <a2>$Field[0]</a2></a><br/>";
						echo "Comments: $Field[2] </p>";	
						echo "<hr />";
						$index++;
					}
			}
		echo "<p><a href ='../assignment4.php'><a3>Add New Comment</a3></a></p>";
		echo "<p><a href = 'ascending.php'><a3>Sort in Ascending Order A-Z (by name)</a3></a></p>";
		echo "<p><a href = 'descending.php'><a3>Sort in Descending Order Z-A (by name)</a3></a></p>";
	}
?>
<form action = "viewComments.php" method = "post" class="form">
Delete Comment number: <input type = "text" name = "Delete"/> <input type = "submit" value = "Delete"/> </p>
</form>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
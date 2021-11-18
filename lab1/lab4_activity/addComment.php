<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Add Comment</title>
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
if(!empty($_POST["name"]) && !empty($_POST["email"]))
	{
		$found =0;
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comments = $_POST["comments"];
		$newEntry = $name.",".$email.",".addslashes($_POST["comments"])."\n";
		if(file_exists("comments.txt"))
			{
			   $FileContents = file("comments.txt");
			   $num = count($FileContents);
			   for($i = 0; $i<$num; $i++)
					{
						$Field = explode(",",$FileContents[$i]);
						if(strcasecmp($name,$Field[0])==0)
							{
							   $found = 1;
							   break;
							}
					}
			}
		if($found==1)
			{
				echo "<p> Comment already present under for the user. Cannot add</p>";
			}
		else
			{
				$File = fopen("comments.txt","a");
				if(fwrite($File,$newEntry)>0)
					{
						echo "<p> Comment added successfully</p><br/>";
						echo "<p> Name: <a href ='mailto:$email'><a2>$name</a2></a><br/>";
						echo "Comments: $comments</p>";
					}
			}
		echo "<hr />";
		echo "<a href = '../assignment4.php'><a3>Someone else want to comment?</a3></a><br/>";
		echo "<a href = 'viewComments.php'><a3>View comments</a3></a>";
	}
else
	{
		echo "<p>Please enter all the details</p>";
		echo "<hr />";
		echo "<a href = '../assignment4.php'><a3>Return back to home page</a3></a><br/>";
	}

?>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
</body>
</html>
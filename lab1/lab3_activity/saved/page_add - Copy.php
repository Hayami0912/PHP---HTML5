<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8"/>
<title>Online Contacts Directory</title>
	
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="sub/lab_activity3.css" type="text/css" />
</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
	<div class="lab_activity">
	<?php
	if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["state"]) && !empty($_POST["zip"]))
		{
			$fname = $_POST["firstname"];
			$lname = $_POST["lastname"];
			$email = $_POST["email"];
			$number = $_POST["number"];
			$add = $_POST["address"];
			$city = $_POST["city"];
			$state = $_POST["state"];
			$zip = $_POST["zip"];
			$FieldEntry = "--".$fname.",".$lname.",".$email.",".$number.",".$add.",".$city.",".$state.",".$zip;
			$File = fopen("contact.txt","a");
			if(fwrite($File,$FieldEntry)>0)
				{
					echo "<p>Contact has been added successfully</p>";
					echo '<a href = "../assignment3.php">Return to Directory</a>';
				}
			else
				{
					echo"<p>Contact has failed to be added</p>";
					echo '<a href ="page_new.php">Return to add Contact Page</a>';
				}
	   
		}
	else
		{
			echo "<hr />";
			echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form</p>";
			echo "<hr />";
			echo '<a href ="page_new.php">Return to add Contact Page</a>';
		}
	  
	?>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
	
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title>Online Contacts Directory</title>
	
	<link rel="stylesheet" href="../css/theme.css" type="text/css" />
	<link rel="stylesheet" href="../css/lab_activity3.css" type="text/css" />
</head>
<body>
<div class="header">

	<?php include "../ssi/lab_assignment_nav.php"; ?>

<div class="MainContent">

	<?php include "../ssi/SubContent1.php"; ?>
<div class="lab_activity">
	<?php

	if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]))
		{
			$found = 0;
			$fname = $_POST["firstname"];
			$lname = $_POST["lastname"];
			if(file_exists("contact.txt"))
				{
			
					$FileRead = fopen("contact.txt","r");
					$FileContent = file_get_contents("contact.txt");
					$Fields = explode("--",$FileContent);
					$count = count($Fields);
					for($i=1;$i<$count;$i++)
						{
					  
							$Field = explode(",",$Fields[$i]);
					 
							if((!strcasecmp($Field[0],$fname)) && (!strcasecmp($Field[1],$lname)))
								{
									$found = 1;
									echo 	"<h2>Search Found</h2>";
									print_r($Field);
									echo	"<br /><br />";
									echo 	"<form method ='post' action ='update.php'>
										<div class='new_contact_form'>
											<p>First Name: <input type ='text' name ='new_firstname' value = '{$Field[0]}'>
											Last Name: <input type ='text' name ='new_lastname' value = '{$Field[1]}'><br/><br/></p>
											<p>Email Address: <input type ='text' name='new_email' value = '{$Field[2]}'><br/><br/></p>
											<p>Phone Number: <input type = 'text' name='new_number' value = '{$Field[3]}'><br/><br/></p>
											<p>Address: <input type = 'text' name ='new_address' value = '{$Field[4]}'
											City: <input type ='text' name ='new_city' value = '{$Field[5]}'><br/><br/></p>
											<p>State: <select name ='new_state' value = '{$Field[6]}'>
											<option value = ''></option>
											<option value = 'Arizona'>Arizona</option>
											<option value = 'California'>California</option>
											<option value = 'Texas'>Texas</option>
											<option value = 'Virginia'>Virginia</option>
											<option value = 'Washington'>Washington</option>
											<option value = 'WestVirginia'>West Virginia</option></select>
											Zipcode: <input type = 'text' name='new_zip' value = '{$Field[7]}'></p>
											</div>
											<input class='button' type='submit' value='Update info'>
											<input type='hidden' name='old_entry' value='$Field[$i]' />
											</form>";
											echo "<p><b> Click on Update to update your info or Return to go back</b></p>";
											echo "<hr />";
											echo '<a href = "../assignment3.php">Return to Directory</a>';
								}
						}
					if(!empty($fname) && !empty($lname) && $found == 0)
						{
							echo "<p1>Contact Not Found!</p1>";
							echo "<hr />";
							echo '<a href ="../assignment3.php">Return to Directory</a>';
						}
				}
		}
	else
		{
			echo "<p1><br/><br/>Please enter both first name and last name<br/><br/></p1>";
			echo "<hr />";
			echo '<a href ="../assignment3.php">Return to search page</a>';
		}

	?>
</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
	
</body>
</html>
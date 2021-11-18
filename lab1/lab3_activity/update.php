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

	if(!empty($_POST["new_firstname"]) && !empty($_POST["new_lastname"]) && !empty($_POST["new_email"]) && !empty($_POST["new_number"]) && !empty($_POST["new_address"]) && !empty($_POST["new_city"]) && !empty($_POST["new_state"]) && !empty($_POST["new_zip"]))
		{
			$newEntry = "--" . $_POST['new_firstname'] . "," . $_POST['new_lastname'] . "," . $_POST['new_email'] . "," . $_POST['new_number'] . "," . $_POST['new_address'] . "," . $_POST['new_city'] . "," . $_POST['new_state'] . "," . $_POST['new_zip'];
			if(file_exists("contact.txt"))
				{
					$FileRead = fopen("contact.txt","r");
					$FileContent = file_get_contents("contact.txt");
					$Fields = explode("--",$FileContent);
					$count = count($Fields);
					for($i=1;$i<$count;$i++)
						{
							$Field = explode(",",$Fields[$i]);
							if((!strcasecmp($Field[0],$_POST['new_firstname'])) && (!strcasecmp($Field[1],$_POST["new_lastname"])))
								{
									$Fields[$i] = $newEntry;
									$openFile = fopen("contact.txt","w");
										{
											if(fwrite($openFile,$Fields[$i])>0)
												{
													echo "<p>Contact has been updated successfully</p>";
													echo '<a href ="../assignment3.php">Return to Directory</a>';
												}
											else
												{
													echo "<p1>Failed to updated contact</p1>";
													echo '<a href ="../assignment3.php">Return to Directory</a>';
												}
										}
								}
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
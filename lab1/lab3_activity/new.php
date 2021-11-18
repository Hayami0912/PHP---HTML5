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
		<h1>New Contact Entry</h1>
		<form method ="post" action = "add.php">
		<div class="new_contact_form">
			<p>First Name: <input type ="text" name ="firstname" required="required">
			Last Name: <input type ="text" name ="lastname" required="required"><br/><br/></p>
			<p>Email Address: <input type ="text" name="email"><br/><br/></p>
			<p>Phone Number: <input type = "text" name="number"><br/><br/></p>
			<p>Address: <input type = "text" name ="address">
			City: <input type ="text" name ="city"><br/><br/></p>
			<p>State: <select name ="state">
					<option value = ""></option>
					<option value = "Arizona">Arizona</option>
					<option value = "California">California</option>
					<option value = "Texas">Texas</option>
					<option value = "Virginia">Virginia</option>
					<option value = "Washington">Washington</option>
					<option value = "WestVirginia">West Virginia</option>
					</select>
			Zip Code: <input type = "text" name="zip"></p>
		</div>
			<input class="button" type="submit" value="Add Info">
			
		</form>
		<hr />
		<a href ="../assignment3.php">Return to Directory</a>
	</div>
	<?php include "../ssi/copyrights.php"; ?>
</div>
</div>
	
</body>
</html>
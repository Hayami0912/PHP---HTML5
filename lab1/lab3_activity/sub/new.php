<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>New contact</title>
	<link rel="stylesheet" href="sub/lab_activity3.css" type="text/css" />
</head>
	<body>
		<div class="lab_activity">
		<h1>New Contact Entry</h1>
		<div class="new_contact_form">
		<form method ="post" action = "page_add.php">
			First Name: <input type ="text" name ="firstname" required="required">
			Last Name: <input type ="text" name ="lastname" required="required"><br/><br/>
			Email Address: <input type ="text" name="email"><br/><br/>
			Phone Number: <input type = "text" name="number"><br/><br/>
			Address: <input type = "text" name ="address">
			City: <input type ="text" name ="city"><br/><br/>
			State: <select name ="state">
					<option value = "Arizona">Arizona</option>
					<option value = "California">California</option>
					<option value = "Texas">Texas</option>
					<option value = "Virginia">Virginia</option>
					<option value = "Washington">Washington</option>
					<option value = "WestVirginia">West Virginia</option>
					</select>
			Zip Code: <input type = "text" name="zip">
			<input type = "submit" value="Add Info">
		</div>
			
		</form>
		<hr />
		<a href ="../assignment3.php">Return to Directory</a>
	</div>
	</body>
	</html>
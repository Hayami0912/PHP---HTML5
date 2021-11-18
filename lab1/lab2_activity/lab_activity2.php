<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Exercise07a</title>
	
	<link rel="stylesheet" href="css/lab_activity.css" type="text/css" />
	
</head>
<body>
<div class="lab_activity">
	Send Email: <br />
	<form method="get" action="example.php">
		From: <input type="text" name="from" /><br />
		To: <select name="to">
				<option value="nchandr@masonlive.gmu.edu">Student 1</option>
				<option value="aealey@gmu.edu">Student 2</option>
			</select><br />
		Subject: <input type="text" name="subject" /><br />
		Attach: <input type="file" name="file" /><br />
		Message: <textarea name="message" rows="4" cols="20">Type your message here</textarea><br />
		<input type="reset" value="Clear" />
		<input type="submit" value="Send" />
		<input type="hidden" value="anony" name="hidden" />
	</form>
	</div>
</body>
</html>
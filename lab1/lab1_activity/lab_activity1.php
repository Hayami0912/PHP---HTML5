<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab-Activity</title>
	
	<link rel="stylesheet" href="css/lab_activity.css" type="text/css" />
	
</head>
<body>
<div class="lab_activity">
	<form action="lab1_activity/method.php" method="post">
		<h1>Participation</h1>
		<p>
		Earned: <input type="text" name="Pearn"/>
		Max: <input type="text" name="Pmax"/>
		Weight (percentage): <input type="text" name="Pweight"/>
		<br /><br />
		</p>
		<h1>Quizzes</h1>
		<p>
		Earned: <input type="text" name="Qearn"/>
		Max: <input type="text" name="Qmax"/>
		Weight (percentage): <input type="text" name="Qweight"/>
		<br /><br />
		</p>
		<h1>Lab</h1>
		<p>
		Earned: <input type="text" name="Learn"/>
		Max: <input type="text" name="Lmax"/>
		Weight (percentage): <input type="text" name="Lweight"/>
		<br /><br />
		</p>
		<h1>Practica</h1>
		<p>
		Earned: <input type="text" name="Prearn"/>
		Max: <input type="text" name="Prmax"/>
		Weight (percentage): <input type="text" name="Prweight"/>
		<br />
		</p>
		
		<br />
		<input type="submit" value="Submit" class="submit"/>
	</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8"/>
<title>Front Page</title>
	
	<link rel="stylesheet" href="theme.css" type="text/css" />
	
</head>
<body>
<div class="header">

	<div class="lab_Assignment_nav">
	<h4>Assignment</h4>
		<ul>
			<li>Assignment 1</li>
			<li>Assignment 2</li>
			<li>Assignment 3</li>
			<li>Assignment 4</li>
		</ul>
	<br />
	<h4>Practice</h4>
		<ul>
			<li>Lab Practice 1</li>
			<li>Lab Practice 2</li>
		</ul>
	</div>


<div class="MainContent">
	<div class="headcontent">
		<div class="SubContent1">
			<div class="Professor">
					<h4>IT207 (Semester 2021)</h4>
					<p>Daniel Garrison</p>
					<p>Geogre Mason University</p>
			</div>

			<div class="Student">
					<h4>Nate Nguyen</h4>
					<p><a href="mailto:nnguye76@masonlive.gmu.edu">nnguye76@masonlive.gmu.edu</a></p>
					<?php
					// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
					echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
					?>
			</div>
		</div>
	</div>		
	<div class="SubContent2">
		<div class="GMU">
			<img src="https://i.ibb.co/qMbFcZs/profile.png" width="250" height="250" alt="Profile Picture" />
			<p>(Build-in Function Output)</p>
		</div>

		<div class="Summary">
			<h4>Summary</h4>
				<ul>
					<li>Personal</li>
						<ul>
							<li>Fast Learner</li>
							<li>Introvert</li>
							<li>Critical Thinking</li>
						</ul>
					<li>Academic</li>
						<ul>
							<li>3.5 GPA or higher</li>
							<li>Perfect Attendance</li>
							<li>Knowledge driven</li>
						</ul>
				</ul>
		</div>
	</div>
	<div class="SubContent3">
		<div class="Paragraph">
			<h3>Professional & Personal Details</h3>
			<p>
				Hi my name is Nhat Nguyen. 
				I am going by Nate with my friends to avoid being called gnat.
				I was born in Ho Chi Minh City, Vietnam and moved to the States since 2007.
				I have lived in Virginia ever since. I am a transfer student from NVCC. 
				I often traveled throughout South East Asia countries when I was young; Singapore, Malaysia Thailand, Japan, China. 
				However, I have yet to get a chance to travel outside of the States ever since I moved; traveling might have to wait until school is over.
				I am currently majored in IT concentrated in DTP and working as a junior network engineer for a MSSP.
			</p>
			<p>(Build-in Function Output)</p>
		</div>
	</div>
	<div class="Copyright_Content">
	  <p>This web site is entirely original work and full academic copyright is retained. This web site complies
	    with the<a href="http://oai.gmu.edu/mason-honor-code/"> Mason Honor Code</a></p>
    </div>
</div>
</div>	

</div>
</div>

</div>
</body>
</html>
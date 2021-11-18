<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Office Hours Sign Up</title>

	<link rel="stylesheet" href="../css/lab_activity2-calendertable.css" type="text/css">
	
</head>
	<div class="lab_activity">
	<body>
		<h1><span>Office Hours Signup Form</span></h1>
		
		<?php
         date_default_timezone_set('EST');           
         $DATE = mktime(0,0,0,date("m"),1,date("Y"));   
         $f= date("w",$DATE);                                     
         echo "<br/>";
         $n = date("t");                              
         ?>

         
		<form method ="post" action="lab2_register.php">
		Student Name: <input type="text" name="name" center>
		Email: <input type ="text" name ="email" center>
		<input type="submit" value ="Submit" class="submit"/> 
		<input type="reset" value="Clear" class="clear" /> 
		<br/>
		 
        <?php
        function appointment($dow){
        switch($dow)
                 	{
                      case 1:
                         $officetime = "mtime"; 
                         break; 
                      case 2:
                        $officetime = "ttime"; 
                         break;
                      case 3:
                        $officetime = "wtime"; 
                         break;
                      case 4:
                        $officetime = "rtime"; 
                         break;
                      case 5:
                       $officetime = "ftime"; 
                         break;
                      default:
                        $officetime = " ";                
                    }
                    return $officetime;
                }

        ?>
		
	    <?php
	        if(!empty($_POST['time']))
	        $time = $_POST['time'];
	        if(!empty($_POST['name']))
	        $name = $_POST['name'];
		    if (!empty($_POST['email']))
			$email = $_POST['email'];
			
			if (empty($time) || empty($name) || empty($email)) 
			{
				echo "Appointment time, name and email must not be empty";
			}
			else 
			{
				$To	= $_POST['email'];
				$Subject = "Appointment For ${name}";
				$Message = "Appointment for ${name} at ${email} has been registered.";
				$response = mail($To, $Subject, $Message, "From: <nnguye76@masonlive.gmu.edu>");
				if ($response == true) 
				{
					echo "The request email has been sent successfully <br />";
					echo $Message;
				}
				elseif ($response == false)
				{
					echo "the email has failed to send";
				}
			}
		    echo "<h1><span>" .date("F",$DATE)."&nbsp".date("Y",$DATE)."</h1></span>" ;              
	    ?>
		
	    <table width ="100%" bgcolor="#00FF7F">
			<tr>
			
			<?php
			  for($DATE=1;$DATE<=7;$DATE++)
			  {
				echo"<th>".date("l",mktime(0,0,0,07,$DATE,2018))."</th>";              
			  }
			?>
			</tr> 	
			
            <tr>
         	<?php
         	$startdate = 1;
         	function numofblanks($f)
            {
				switch($f)
					{
							case 0:
						{
							$blanks = 0;
							break;
						}
							case 1:
						{
							$blanks = 1;
							break;
						}
							case 2:
						{
							$blanks = 2;
							break;
						}
							case 3:
						{
							$blanks = 3;
							break;
						}
							case 4:
						{
							$blanks = 4;
							break;
						}
							case 5:
						{
							$blanks = 5; 
							break;
						}
							case 6:
						{
							$blanks = 6;
							break;
						}
						default:
						$blanks = 0;
					}
				return $blanks;
			}
            $blanks = numofblanks($f); 
            $remstart = (7-$blanks);
            echo "<br/>";
            for($i=0;$i<$blanks;$i++)
			{
				echo "<td>&nbsp</td>";               
            }
            for($j=1;$j<=$remstart;$j++)            
            {                     
                $dow= date("w",mktime(0,0,0,date("m"),$startdate,date("Y"))); 
                echo "<td valign = top >".($startdate)."<br/>"; 
                $officetime = appointment($dow);         
                if (!empty($_POST["$officetime"]))
                {
					foreach ($_POST["$officetime"]  as $x)
					{
						if (isset($time) && ("$startdate".$x == $time))
							{
								echo "$x --". $name. "<br />";
							}
						else
							{
								echo '<input type= radio multiple name = time value= "'."$startdate".$x.'" />'. $x. '<br />'; 
							}
						echo "<input type= hidden name=  $officetime"."[]"." value= $x />";
					}
				}
                echo "</td>";
                $startdate++;
            }  
            ?> 
            </tr>

             
            <?php
            for($row=1;$row<=5;$row++)
            {
				echo "<tr>";

				for($col=1;$col<=7;$col++)
				    {
						$dow= date("w",mktime(0,0,0,date("m"),$startdate,date("Y")));
						echo "<td valign = top>".($startdate)."<br/>";
						$officetime = appointment($dow);
						if (!empty($_POST["$officetime"]))
						{
							foreach ($_POST["$officetime"]  as $x)
							{
								if (isset($time) &&("$startdate".$x == $time) )
								{
									echo "$x --".$name."<br />";
								}
								else
								{
									echo '<input type= radio multiple name = time value= "'."$startdate".$x.'" />'. $x. '<br />';
								}
							}
                        }
					    echo"</td>";
					    $startdate++;
					    if($startdate==$n)
						break;
					}
				echo "</tr>";
				if($startdate==$n)
				break;
            }
         	?>
         
	    </table> 
        </form>
	</div>
	</body>
</html>
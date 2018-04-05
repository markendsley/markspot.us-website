<?php

session_start();


?>
<html>
	<head>
	<meta charset="utf-8">
	<title>PHP Dice</title>

	
	</head>
	<body style="background-color:black; color:white size:17">
	
	<center><img src="banner.jpg"></center><br/><br/>
	
	<center>
	<form name="form1" method="POST" action="phpdice.php">
	<input type="submit" name="submit" value="Roll">
	  
	<input type="submit" name="reset" value="Reset">
	</center>
	
	</form>
	<br/>
	<br/>
	
	<center>
	<table style="width:50%">
		<tr>
		<td>
		<center>
		<?php
		
		ob_start();
		echo '<img src="gif.gif">';
		echo '<img src="gif2.gif">';
		
		if(isset($_POST['submit']))
		{
			
			$a = rand(1,6);
			
			ob_end_clean();
			
			ob_start();
			if($a==1)
				echo '<img src="1.gif">';
			elseif($a==2)
				echo '<img src="2.gif">';
			elseif($a==3)
				echo '<img src="3.gif">';
			elseif($a==4)
				echo '<img src="4.gif">';
			elseif($a==5)
				echo '<img src="5.gif">';
			elseif($a==6)
				echo '<img src="6.gif">';
				
			$b = rand(1,6);
				
			if($b==1)
				echo '<img src="1.gif">';
			elseif($b==2)
				echo '<img src="2.gif">';
			elseif($b==3)
				echo '<img src="3.gif">';
			elseif($b==4)
				echo '<img src="4.gif">';
			elseif($b==5)
				echo '<img src="5.gif">';
			elseif($b==6)
				echo '<img src="6.gif">';
			
			$c = $a + $b;
			
			echo '<br><br><center><font size="17" color="white">'.$c.'</font></center>';
			
				
			
		}
		
		if(isset($_POST['reset']))
			{
				ob_end_clean();
				echo '<img src="gif.gif">';
				echo '<img src="gif2.gif">';
			}
		
		
		?>
		</center>
		</td>
		<td>
		
		
		
		<td>
		</tr>
		
	
	</center>
	
	
	
	</body>
	</html>
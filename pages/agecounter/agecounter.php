<!doctype html>
<html>
<head>
<link rel="icon" type="image/ico" href="/favicon/favicon.ico">
</head>
<body  style="background-color:black;color:white">
	<center>
	<table>
	<tr>
	<td width = "20%">
	<center>
	<img src="column2.png" alt="column">
	<br/>
	<br/>
	<br/>
	<br/>
	</center>
	</td>
	<td style="vertical-align:top;" width = "60%">
	<center>
	<br/>
	<br/>
	<br/>
	<br/>
	<img src="banner.jpg" alt="Age Counter Banner">
	<br/>
	<img src="enteryourage.jpg" alt="enter your age">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<form name="form1" method="POST" action="agecounter.php">
	Month
	<input type="number" name="month"  max="12" min="1" value="1">
	Day
	<input type="number" name="day"  max="31" min="1" value="1">
	Year
	<input type="number" name="year"  max="9999" value="2000">
	<input type="submit" name="submit" value="submit">
	</form>
	<br/>
	<br/>
	<?php
	
	function foo(){
	if(isset($_POST["day"]) && isset($_POST["month"]) && isset($_POST["year"])){
		$day = $_POST["day"];
		$month = $_POST["month"];
		$year = $_POST["year"];

		$currentDay = date('d');
		$currentMonth = date('m');
		$currentYear = date('Y');
		
		
		$years = $currentYear - $year;
		$months = $currentMonth - $month;
		$days = $currentDay - $day;
		
		$bday = false;
		
		if($months < 0)
			$years = $years - 1;
		else if($months == 0 && $days < 0)
			$years = $years - 1;
		else if($months == 0 && $days == 0)
			$bday = true;
		
		if($bday == true)
			print("Happy Birthday! you are ".$years." years old!");
		else
			print("You are ".$years." years old.");
	}
	}
	foo();
	?>
	</center>
	</td>
	<td width = "20%">
	<center>
	<img src="column.png" alt="column">
	<br/>
	<br/>
	<br/>
	<br/>
	</center>
	</td>
	<tr>
	</table>
	</center>
	</body>
</html>
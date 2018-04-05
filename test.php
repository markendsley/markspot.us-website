<!DOCTYPE html>
<html lang="en">
<head>
<?php


if(isset($_POST['submit'])){
	
	$name = $_POST['holidayName'];

	if( $name == 'Independence Day')
	{
		echo $_POST['holidayName']."Falls on July 4th, 2017. This holiday is commemorate American Independence
		from British rule after signing the Declaration of Independence. The document was actually signed
		on July 2nd, but we celebrate it on the 4th. It consists of lighting fireworks, drinking alcohol,
		and grilling with friends and family.";
	}
	else if($name == 'Christmas')
	{
		echo $_POST['holidayName']. "Falls on December 25th, 2017. To many Christians this date symbolizes 
		the birthdate of Jesus Christ. Generally it's celebrated with opening presents around a tree";
	}
	else if($name == 'Thanksgiving')
	{
		echo $_Post['holidayName']."Falls on November ";
	}
}
?>
<title>American holidays</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="holidays.css"	/>
</head>
<body>
	<header>
		<h1>American holidays</h1>
	</header>
	<nav>
	<ul>
	<li>Click For Additional Information on These Popular holidays:</li></br>
	<li><a href="https://www.loc.gov/item/today-in-history/july-04">Independence Day</a></li>
	<li><a href="http://historycooperative.org/the-history-of-christmas/">Christmas</a></li>
	<li><a href="http://www.halloween-website.com/history.htm">Halloween</a></li>
	<li><a href="http://www.plimoth.org/learn/MRL/read/thanksgiving-history">Thanksgiving</a></li>
	<li><a href="http://www.history.com/topics/valentines-day/history-of-valentines-day">Valentine's Day</a></li>
	</ul>
</nav>
	<main>
	<p> This website is about holidays celebrated in this amazing country we call America. Please type in the name 
	of a holiday to get a brief amount of information about said holiday. For additional information about the most 
	popular holidays, click on whichever you're interested in on the navigation bar to be redirected.</p>
	
	<form action="test.php" method="POST">
	Enter a holiday:<br>
	<input type="text" name="holidayName"><br>
	<input type="submit" value="Submit" name="submit">
</form>
	</form>
	<table align="center">
	<tr>
			<th>Holidays Created in America</th>
			<th>Holidays Not Created In America but Nationally celebrated</th>
	</tr>
	<tr>
		<td>Christmas</td>
		<td>Halloween</td>
	</tr>
	<tr>
		<td>Thanksgiving</td>
		<td>Valentine's Day</td>
	</tr>
	<tr>
		<td>Independence Day</td>
		<td>St. Patrick's Day</td>
	</tr>
	<tr>
		<td>Labor Day</td>
		<td>Easter</td>
	</tr>
	</table>
</main>
</body>
</html>
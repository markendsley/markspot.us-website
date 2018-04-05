<?php

session_start();


?>

<?php
$title = "Markspot.us";                  
include "header.php";                 
?>


<!doctype html>
<html>
	<head>
		<title>
			Markspot.us
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="description" content="Markspot website where I, Mark Endsley, compile all the little projects I've done over the years.">
		<meta name="keywords" content="Markspot, Mark, Endsley, Mark Endsley">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		

		
		
		
	</head>
	<body>
	
	
		<!-- HEADER OF WEBSITE -->
	

		<div class="border">
		<br/>
		<img class="scalable" src="images/banner.png">
		
		

		<br/>

		<br/>
		<img class="scalable" src="images/slider.png">
		<br/>
		<br/>
		

	
		<ul>
			<li><a href="index.php"><img src="images/home.png"></a></li>
			<li><a href="news.php"><img src="images/news.png"></a></li>
			<li><a href="videos.php"><img src="images/videos.png"></a></li>
			<li><a href="code.php"><img src="images/code.png"></a></li>
			<li><a href="pages.php"><img src="images/pages.png"></a></li>
			<li><a href="images.php"><img src="images/images.png"></a></li>
			<li><a href="docs.php"><img src="images/docs.png"></a></li>
			<li style="float:right"><a class="active" href="about.html"><img src="images/about.png"></a></li>
		</ul>
		</div>
		<!-- HEADER ENDS -->
		<br>
		<?php
			if(isset($_SESSION['id']))
			{
				echo $_SESSION['uid'] . ' You are now logged in, <a href="logout.php">logout</a>';
			}else
			{
				echo ' <form action="signin.php" method="POST" align="right" style="display:inline"><button type="submit" class="button2">Sign in / Sign Up</button></form>';
			}
		?>
		<br>
		<br/>
		<div class="bordertwo">
		<!-- STUFF GOES IN HERE -->
		
		

		

		
		
		
		

		<br/><br/>
		
		
		
		<?php
		
		if(isset($_SESSION['id']))
		{
			echo'<form id="comment" name="comment" action="submitcomment.php" method="POST">
		<textarea class="styled" rows="4" cols="50" id="addedcomment" name="addedcomment" style="width:500px; height=500px;"></textarea>
		<br><button type="submit" class="button">Submit</button>
		</form>';
		}
		

		
		?>
		
		<font color="black">
		<center>
		<?php include('printcomments.php');?>
		</center>
		</font>
		
		
		
		
		
		
	
		
		
	<br/><br/><br/><br/><br/><br/><br/><br/>
	
	
	
		<!-- STUFF STOPS HERE -->
		</div>
		<font size="2"><center><br/><br/>Markspot Website<br/>Thank you for visiting my website | Site by Mark Endsley</center></font>
	
	
	</body>
</html>
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
		

		
		<script language="javascript">
		function nospaces(t){
        if(t.value.match(/\s|\./g)){
            alert('Username Cannot Have Spaces or Full Stops');
            t.value=t.value.replace(/\s/g,'');
        }
    }
		</script>
		
	</head>
	<body>
	
	
		<!-- HEADER OF WEBSITE -->
	
	
		<div class="border">
		<br/>
		<img src="images/banner.png">
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
		<br/>
		<div class="bordertwo">
		<!-- STUFF GOES IN HERE -->
		
		<?php 
		
		?>
		
		
		<?php
		
		if(isset($_SESSION['id'])){
			echo "You are already logged in, what are you doing here?";
		}
		else{
		
		
		echo '<br>
		Log In:<br>
		
		<form action="login.php" method="POST">
		<input type="text" name="uid" placeholder=" Username" class="textbox" required><br>
		<input type="password" name="pwd" placeholder=" Password" class="textbox" required><br>
		<button type="submit" class="button">Log In</button><br><br><br>
		
		</form>
		';
		}
		?>
		
	
		
		
				<?php
		
		if(isset($_SESSION['id'])){
			
		}
		else{
			
		echo '
		<form action="signup.php" method="POST">
		Sign Up:<br>
		<input type="text" name="first" placeholder=" FirstName" min="1" class="textbox"><br>
		<input type="text" name="last" placeholder=" LastName" min="1" class="textbox"><br>
		<input type="text" name="uid" placeholder=" Username" min="1" class="textbox" required><br>';
		
		
		

		
		
		
		
		echo '<input type="password" name="pwd" placeholder=" Password" min="1" class="textbox" required><br>
		<button type="submit" class="button">Sign Up</button>
		<br>
		</form>
		<br>';
		}
		?>
		
		
		<!-- STUFF STOPS HERE -->
		</div>
		<font size="2"><center><br/><br/>Markspot Website<br/>Thank you for visiting my website | Site by Mark Endsley</center></font>
	
		
	</body>
</html>
		
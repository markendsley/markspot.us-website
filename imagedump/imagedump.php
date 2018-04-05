<?php

session_start();


?>

<?php
$title = "Markspot.us";                  
include "header.php";    
include "dbh2.php";              
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
		

		
		<script type="text/javascript">
		
		var images = [];
		images[0] = "images/slider.png";
		images[1] = "images/slider2.png";
		images[2] = "images/slider3.png";
		var i = 0;
		
			function change(){
				
				if(i==0){
					var image = document.getElementById('slider');
					image.src = images[i];
					i++;
				}
				else if(i==1)
				{
					var image = document.getElementById('slider');
					image.src = images[i];
					i++;
				}
				else if(i==2)
				{
					var image = document.getElementById('slider');
					image.src = images[i];
					i=0;
				}
			}

			setInterval('change()',13000);
		</script>
		
		
		
	</head>
	<body>
	
	
		<!-- HEADER OF WEBSITE -->
	

<?php             
include "top.php";                 
?>
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
		<br>
		
		<h1>Upload an Image</h1>
		<br><br>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
			
			<input type="file" name="file">
			
			<textarea rows="4" cols="50" name="caption"></textarea>
			
			<button type="submit" name="submit">Upload</button>
			
			</form>
			<br><br>
			<?php
			
				$query = "Select * FROM images ORDER BY id DESC LIMIT 999999";
				$result = $conn->query($query);
				
				while($row = mysqli_fetch_assoc($result)){
					
					echo '<img height = "100"  src="uploads/'.$row['filepath'].'">';
					
				}
			
			?>
		
		
		
		
		
		

		<br/><br/>
		
		
		
		
	<br/><br/><br/><br/><br/><br/><br/><br/>
	
	
	
		<!-- STUFF STOPS HERE -->
		</div>
		<font size="2"><center><br/><br/>Markspot Website<br/>Thank you for visiting my website | Site by Mark Endsley</center></font>
	
	
	</body>
</html>
		
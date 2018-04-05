<?php

session_start();


?>

<?php
$title = "Markspot.us";
include "header.php";
include "imagedump/dbh2.php";
?>


<!doctype html>
<html>
	<head>
		<title>
			Markspot.us
		</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="description" content="Markspot website where I, Mark Endsley, compile all the little projects I've done over the years.">
		<meta name="keywords" content="Markspot, Mark, Endsley, Mark Endsley">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


       
		<script type="text/javascript">
        /*

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
            
            */
		</script>


            
	</head>
	<body id="body1">
        <div>


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










		<br/><br/>
		<img class="scalable" src="images/welcome.png" >
		<br/><br/><br/>
		<p class=>My name is Mark Endsley, I'm an IT major at the University of Central Florida. Here I compile<br/> all the work I've done over my life and career. Feel free to check out anything I've posted here.</p>
		<br/><br/>

		<a href="news.php"><img class="flick" id="newsbutton" src="images/newsbutton.png"></a>
		<a href="videos.php"><img class="flick" id="videosbutton" src="images/videosbutton.png"></a>
		<a href="code.php"><img class="flick" id="codebutton" src="images/codebutton.png"></a>
		<a href="pages.php"><img class="flick" id="pagesbutton" src="images/pagesbutton.png"></a><br/>
		<a href="images.php"><img class="flick" id="imagesbutton" src="images/imagesbutton.png"></a>
		<a href="docs.php"><img class="flick" id="docsbutton" src="images/docsbutton.png"></a>
		<a href="about.php"><img class="flick" id="aboutbutton" src="images/aboutbutton.png"></a>



				<br/><br/><br/><br/>


		<a name="commentline"><img src="/images/imagedump.png"></a><br><br><br>


		<?php

		if(isset($_SESSION['id']))
		{
			echo'			<form action="imagedump/upload.php" method="POST" enctype="multipart/form-data">

			<center><input type="file" name="file"></center>

			<textarea rows="4" cols="50" name="caption" hidden></textarea>

			<button type="submit" name="submit">Upload</button>

			</form>
			<br><br>';
		}



		?>

		<?php

				$query = "Select * FROM images ORDER BY id DESC LIMIT 999999";
				$result = $conn->query($query);

				while($row = mysqli_fetch_assoc($result)){

					echo '<img height = "100"  src="imagedump/uploads/'.$row['filepath'].'">';

				}

		?>


		<br><br><br>

		<a name="commentline"><img src="/images/comments.png"></a><br><br>

		<?php



		if(isset($_SESSION['id']))
		{
			echo'<form id="comment" name="comment" action="submitcomment.php" method="POST">
		<textarea class="styled" rows="4" cols="50" id="addedcomment" width="60%" name="addedcomment" style="height=500px;" required></textarea>
		<br><button type="submit" class="button">Submit</button>
		</form>';
		}



		?>

		<font color="black">
		<center>
		<?php include('printcomments.php');?>
		</center>
		</font>
            <br/><br/>

            <center>
            <button type="button" class="button2" id="makeTheWebsiteGoAwayButton">Make The Website Go Away</button>
            </center>



	<br/><br/><br/><br/><br/><br/><br/>


        </div>
		<!-- STUFF STOPS HERE -->
		</div>
		<font size="2"><center><br/><br/>Markspot Website<br/>Thank you for visiting my website | Site by Mark Endsley</center></font>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    
        <script src="jquery-3.3.1.min.js"></script>

        <script>
            
            
            $(function() {
                
                $("#newsbutton").hide().show(1000);
                $("#videosbutton").hide().show(1000);
                $("#codebutton").hide().show(1000);
                $("#pagesbutton").hide().show(1000);
                $("#imagesbutton").hide().show(1000);
                $("#docsbutton").hide().show(1000);
                $("#aboutbutton").hide().show(1000);
                
                $('#makeTheWebsiteGoAwayButton').on('click', function(){
                    
                    $("#body1").hide(500);
                    
                });
                
            });
        
        
        </script>

	</body>
</html>

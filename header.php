


<div class="phpheader">



<a href="https://markspot.us"><img src="images/logosmall.png" align="left"></a>

<div align="right">
<?php 



if(isset($_SESSION['id']))
			{
				echo '<form method="get" action="/logout.php" style="display:inline">' . $_SESSION['uid'] . ' You are now logged in <button type="submit" class="button">Log Out</button></form>';
			}else
			{
				echo '<div class="hidden-xs"><form action="login.php" method="POST" align="right" style="display:inline">
		<input type="text" name="uid" placeholder=" Username" class="textbox" required> 
		<input type="password" name="pwd" placeholder=" Password" class="textbox" required> 
        
		<button type="submit" class="button">Log In</button></form></div>
        
        <div class="visible-xs"> <form action="signin.php" method="POST" align="right" style="display:inline"><button type="submit" class="button2">Sign in / Sign Up</button></form> </div>';
			}

		
		
?>

</div>

</div>
<br>
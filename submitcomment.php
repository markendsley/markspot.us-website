<?php 




session_start();




$connect = mysqli_connect('localhost','root','','comments');

if(!$connect)
{
	die("Connection failed: ".mysqli_connect_error());
	
}

if(isset($_SESSION['id']) && strip_tags($_POST['addedcomment']) != '')
{
	$uid = $_SESSION['uid'];
	$date = date('Y-m-d\n H:i');
	$message = stripslashes(htmlspecialchars($_POST['addedcomment']));

	
	$sql = "INSERT INTO usercomments (uid, date, message)
	VALUES ('$uid', CURRENT_TIMESTAMP, '$message')";
							
	 $result = mysqli_query($connect, $sql);

	
				
}
header("Location: redirectcomment.php");

?>
	
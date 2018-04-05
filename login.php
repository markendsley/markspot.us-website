<?php
session_start();



include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM userdata WHERE uid='$uid'";
 
 $result = $conn->query($sql);
 
 
 
 if(!$row = mysqli_fetch_assoc($result))
 {
	 header("Location: redirectwrong.php");
	 
 }elseif(password_verify($pwd,$row['pwd']) == true)
 {
	 	$_SESSION['id'] = $row['id'];
	$_SESSION['uid'] = $row['uid'];
	echo $row['id'];
	echo "It Worked";
	 header("Location: redirect.php");
	 
 }
 else
 {
	header("Location: redirectwrong.php");
 }
 
 


?>
<?php


include 'dbh.php';


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwdtemp = $_POST['pwd'];
$pwd = password_hash($pwdtemp,PASSWORD_BCRYPT);


		
		mail("markendsley@Knights.ucf.edu");
		
		
		

		$query = "SELECT * FROM userdata  WHERE uid ='$uid'";
        $result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result)>=1)
			{
				$check = true;
			}
			else
			{
				$check = false;
			}
		




if($uid != '' && $pwd != '' && $check == false)
{
$sql = "INSERT INTO userdata (first, last, uid, pwd)
 VALUES ('$first', '$last', '$uid', '$pwd')";
 
 $result = mysqli_query($conn, $sql);
}




if($check == false)
{
	header("Location: signupredirect.php");
}
else if($check == true)
{
	
	header("Location: signupredirectfailed.php");
}
?>
<?php 

$connect = mysqli_connect('localhost','root','','comments');

if(!$connect)
{
	die("Connection failed: ".mysqli_connect_error());
}

$query = "Select * FROM usercomments ORDER BY date DESC LIMIT 999999";
$result = $connect->query($query);

while($row = mysqli_fetch_assoc($result))
{
	
	echo '<div class="hidden-xs"><div class="commentsbox" style="color: black;"><table width = "100%" style="word-break: break-all;"><tr><td width="10%"><font color="black">' . $row['uid'] . '</font></td><td width="12%"><font color="black"> &nbsp;&nbsp;' . $row['date'] . '</font></td><td width="78%"><font color="black"> &nbsp;&nbsp;' . $row['message'] . '</font></td></tr></table></div><br></div>
    <div class="visible-xs"><div class="commentsbox" style="color: black;"><table width = "100%" style="word-break: break-all;"><tr><td>' . $row['uid'] . '</font></td></tr><tr><td><font color="black">' . $row['date'] . '</font></td></tr><tr><td><font color="black">' . $row['message'] . '</font></td></tr></table></div><br></div>
	
	
	';
	
}


?>
<?php

include 'dbh2.php';


if(isset($_POST['submit']))
{
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$caption = $_POST['caption'];
	
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png', 'gif');
	
		if(in_array($fileActualExt, $allowed))
		{
			if($fileError === 0)
			{
				if($fileSize < 100000000)
				{
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					
					$fileDestination = 'uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					
					$sql = "INSERT INTO images (filepath, caption)
					VALUES ('$fileNameNew', '$caption')";
					
					$result = mysqli_query($conn, $sql);
					
					header("Location:https://markspot.us/redirectimage.php");
				}else{echo "too big";}
				
				
			}else{echo "ERROR";}
			
			
		}else {echo "You Suck";}
	
}



?>
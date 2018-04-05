<!doctype html>
<html>
<head>
<link rel="icon" type="image/ico" href="/favicon/favicon.ico">

</head>
<body  style="background-color:black;color:white">

	<center><img src="bogobanner.png"></center>
	<form name="form1" method="POST" action="bogo.php">
	Size
	<input type="number" name="size" value="" max="10000" min="1">
	<input type="submit" name="submit" value="submit">
	</form>
	<br/>
<?php

	function foo(){
	if(isset($_POST['size']) && isset($_POST['submit'])){
	
		$a = $_POST['size'];
		$i = 0;
		$x = 0;
		$y = 2;
		$z = 7;
	
		for($i=0;$i<$a;$i++)
		{
			$arr[$i] = $i;
		}
		
		print("Original Array: <br/>");
		for($i=0;$i<$a;$i++)
			print($arr[$i]." ");
		
		
		$arr = randomize($arr,$a);
		
		print("<br/>");
		
		
		print("Shuffled Array: <br/>");
		
		for($i=0;$i<$a;$i++)
			print($arr[$i]." ");
		
		$n = $a;
		$counter = 1;
		
		while(inorder($arr,$a) == 0)
		{
			for($i=$n-1;$i>0;$i--)
			{
				$j = (rand(1,2000000) + $x + $y + $z) % ($i + 1);
				
				$x++;
				
				$y = $x + $z * 2;
				$z = $z * 5;
				if($x>100000)
					$x=3;
				if($y > 1000000)
					$y=$z;
				if($z>203044)
					$z=1;
				
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
				
				
			}
			print("<br/>");
			print($counter . ":  ");
			
			for($g=0;$g<$a;$g++)
			print($arr[$g]." ");
			print("<br/>");
			print("<script>document.body.scrollTop = document.body.scrollHeight;</script>");
			$counter++;
		}
		
		
	}

	}
	function inorder($arr,$n){
		
		for($b=1;$b<$n;$b++)
		{
			
			if($arr[$b]<$arr[($b-1)])
				return 0;
			
		}
		return 1;
		
	}
	function randomize($arr,$a)
	{
		
		
		for ($k=($a-1);$k>0;$k--)
		{
			$j = rand(1,49) % ($k);
			
			$temp = $arr[$k];
			$arr[$k] = $arr[$j];
			$arr[$j] = $temp;
			
		}
		return $arr;
		
	}

	
	foo();
?>
	</body>
</html>
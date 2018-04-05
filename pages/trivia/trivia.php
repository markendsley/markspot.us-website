<html>
	<head>

	
	
	
	
		<title>Trivia</title>
		
		
		
		

		
		
		
		
		<script type="javascript">
			function enableSubmitButton()
			{
				document.getElementById("submit").disabled = false;
				
			}
			
			function disableSubmitButton()
			{
				document.getElementById("submit").disabled = true;
				
			}
			function addInputSubmitEvent(form, input) {
    

			
			
		</script>
		
		
		
		
		
		<?php 
			session_start();
			
			if(empty($_SESSION['counter']))
			{
				$_SESSION['counter'] = 0;
			}
			
			if(empty($_SESSION['score']))
			{
				$_SESSION['score'] = 0;
			}
			
			$_SESSION['counter'] = (!$_SESSION['counter']) ? 0 : $_SESSION['counter'] ;
			$_SESSION['score'] = (!$_SESSION['score']) ? 0 : $_SESSION['score'] ;

			
			$counter = 0;
			if(isSet($_Post['turnNumber']))
			{
				$num = ($_POST['turnNumber']);
				$counter = (int)$num;
			}
			
			$questions = array("\nWho was the first President of the United States?",
								"\n The beaver is the national emblem of which country?",
								"\nWho was the first man to land on the moon?",
								"\nWhich TV character said, 'Live long and prosper'?",
								"\nWhat is the name of Batman's butler?",
								"\nWhich US state is nearest to the old Soviet Union?",
								"What is Chandler's last name in the sitcom Friends?",
								"The Statue of Liberty was given to the US by which country?",
								"Which of the planets is closest to the sun?",
								"According to Greek mythology who was the first woman on earth?",
								"What is the most commonly diagnosed cancer in men?",
								"Who was US president during World War I?",
								"Little Cuba is the nickname of which US city?",
								"What is the chemical symbol for iron?",
								"Who is the primary protagonist in Metroid?",
								"Which US city is known as the City of Brotherly Love?",
								"What’s the common term for a cerebrovascular accident?",
								"What is Johnny Depp afraid of?",
								"What kind of animal did Bill Clinton have in office",
								"What is the longest river in the world?",
								"");
								
			$answers = array("george washington", "canada", "neil armstrong","spock","alfred","alaska", "bing", "france","mercury","pandora","prostate","woodrow wilson", "miami","fe","samus","philadelphia","stroke","clowns","cat","the amazon","");
			$answers2 = array("washington", "cannada", "niel armstrong","mr.spock","alfered","alaaska","bing","franc","mercary","pandoro","prostate cancer","wilson","miami\n","fe","aran","philidelphia","stroke","clown","cats","amazon","");
			$answers3 = array("g washington", "canadda", "niel armstron","dr.spock","alferd","alasca","beng","frace","mrrcury","pondora","of the prostate","woodrow","mimi","fe","samus aran","philedelphia","stroke","clowns\n","a cat","the amason","");
			$answers4 = array("george washinton", "canida", "nil armstrong","mr spock","alfird","alazka","binng","frane","mrercury","pandora\n","prostate\n","woodrow wilson\n","maimi\n","fe","samus","philli","stroc","klowns","cat\n","amason","");
			$answers5 = array("goerge washington", "kanida", "nil armstrong","dr spock","alfired","alascka","bbing","french","mercery","pandora","prostate cancer\n","wilson\n","miami\n","fe","semus","philladelphia","stroce","klown","a cat\n","the amazon\n","");
			$answers6 = array("george wasinton", "chanida", "armstrong", "spok","alfrd","aliska","biing","frach","murcery","pandora","prastate","woodrow\n","miami\n","fe","samis","philledelphia","strok","clown\n","cat","amazon\n","");
								
								
			if(isset($_POST['getQuestion']))
			{
				$question = $questions[$_SESSION['counter']];
				
			}
			
			if(isset($_POST['submit']))
			{
				
				$guess = strtolower($_POST['answer']);
				$guess2 = strtolower($_POST['answer']);
				$guess3 = strtolower($_POST['answer']);
				$guess4 = strtolower($_POST['answer']);
				if($guess == $answers[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				
				elseif($guess == $answers2[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				elseif($guess == $answers3[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				elseif($guess == $answers4[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				elseif($guess == $answers5[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				elseif($guess == $answers6[$_SESSION['counter']])
				{
					$result = "Correct!";
					$_SESSION['score']++;
				}
				
				else
				{
					$result = "Wrong, idiot!";
				}
				if(empty($_POST['question']) != true)
				$_SESSION['counter']++;
			
				
				
				
			}

			
			if($_SESSION['counter'] == 19)
			{
				session_destroy();
			}
		
		
		
		
		

		
		?>
		
	</head>
	<body style="background-color:black; color:white size:17">
	
	
	



	
	
	
	
	

	<center><img src="banner.jpg"></center>
	
		<form id="a" action="#" method="POST">
		
		
		

		
		
		Score: <input id="score" value="<?php if(isSet($_SESSION['score'])) echo $_SESSION['score'];   ?>" maxlength="3">
		<center>
			Question<br/>
			<input id="getQuestion" type="submit" name="getQuestion" value="Get Question">
			<br/><br/>
			<textarea id="question" name="question" style="width:500px;"><?php if(isSet($question)) echo $question."\n"; ?></textarea>
			<br/><br/>
			Answer<br/>
			<textarea id="answer" name="answer" style="width:500px;"><?php if(isSet($result)) echo $result."\n";   ?></textarea>
			<br/><br/>
			<input id="submit" type="submit" name="submit" value="Submit">
		</center>
		<br/>
		
		
		
		</form>
		

	</body>
<html>
<?php

session_start();


?>

<?php
$title = "Markspot.us";                  
include "header.php";                 
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
		
				class player{
				
				constructor(name){
					this.name = name;
					this.score = 0;
				}
						
				}
				
				class question{
					
					constructor(actualQuestion, correctAnswer, comment, image){
						this.actualQuestion = actualQuestion;
						this.correctAnswer = correctAnswer;
						this.comment = comment;
						this.image = image;
					}
					
					
				}
				class roundScoreChecker{
					
					constructor(playerNumber, roundScore){
						this.playerNumber = playerNumber;
						this.roundScore = roundScore;
					}
					
				}
				
				
			
				
		
			var numPlayers;
			var players = [];
			var answers = [];
			var questions = [];
			var roundScoreCheckers = [];
			
			var turnCounter = 0;
			var playerSize = 0;
			
			
		
			
			
		
			function takePlayers(){
				
				numPlayers = document.getElementById("playerNumber").value;
				
				
				document.getElementById("first").style.display = 'none';
				
				document.getElementById("second").style.display = 'block';
				
				if(numPlayers == 5){
					
					document.getElementById("second").innerHTML = 'Player 1 <input type="text" id="name1" value="" class="textbox"> Player 2 <input type="text" id="name2" class="textbox"> Player 3 <input type="text" id="name3"> Player 4 <input type="text" id="name4" class="textbox"> Player 5 <input type="text" id="name5" class="textbox">';
					
				}
				else if(numPlayers == 4){
					
					document.getElementById("second").innerHTML = 'Player 1 <input type="text" id="name1" value="" class="textbox"> Player 2 <input type="text" id="name2" class="textbox"> Player 3 <input type="text" id="name3" class="textbox"> Player 4 <input type="text" id="name4" class="textbox">';

				}
				else if(numPlayers == 3){
					
					document.getElementById("second").innerHTML = 'Player 1 <input type="text" id="name1" value="" class="textbox"> Player 2 <input type="text" id="name2" class="textbox"> Player 3 <input type="text" id="name3" class="textbox">';

				}
				else if(numPlayers == 2){
					
					document.getElementById("second").innerHTML = 'Player 1 <input type="text" id="name1" value="" class="textbox"> Player 2 <input type="text" id="name2" class="textbox"> ';

				}
				else if(numPlayers == 1){
					
					document.getElementById("second").innerHTML = 'Player 1 <input type="text" id="name1" value="" class="textbox"> ';

				}
				
				document.getElementById("third").innerHTML = '<input type="button" id="go" onclick="startGame();" class="button" value="Begin"> ';

				for( var i=0 ; i<numPlayers ; i++){

						roundScoreCheckers.push(new roundScoreChecker(i,0));
						playerSize++;

				}
				
				questions.push(new question("How many years did it take to build the Golden Gate Bridge?",4,"It took 4 years. The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide (1.6 km) strait connecting San Francisco Bay and the Pacific Ocean. The structure links the American city of San Francisco, California – the northern tip of the San Francisco Peninsula – to Marin County, carrying both U.S. Route 101 and California State Route 1 across the strait. The bridge is one of the most internationally recognized symbols of San Francisco, California, and the United States. It has been declared one of the Wonders of the Modern World by the American Society of Civil Engineers.","/numbersGameImages/goldengate.jpeg"));

				questions.push(new question("How many years old was Barack Obama when he became President",46,"He was 46. Obama was born in 1961 in Honolulu, Hawaii, two years after the territory was admitted to the Union as the 50th state. Raised largely in Hawaii, Obama also spent one year of his childhood in Washington State and four years in Indonesia.","/numbersGameImages/barackobama.jpg"));

				questions.push(new question("What year was Donald Trump born in?",1946,"He was born in 1946. Donald John Trump (born June 14, 1946) is the 45th and current President of the United States, in office since January 20, 2017. Before entering politics, he was a businessman and television personality.","/numbersGameImages/donaldtrump.jpg"));

				questions.push(new question("how high, to the tip, is the Empire State Building in feet?",1454,"1,454 feet tall, The Empire State Building is a 102-stories tall","/numbersGameImages/empirestatebuilding.jpg"));

				questions.push(new question("What year was Windows 95 released?",1995,"1995, Windows 95 as well of other iterations consist of millions of lines of code,","/numbersGameImages/windows95.jpg"));

				questions.push(new question("How many years did it take to build the Statue of Liberty?",9,"9 years","/numbersGameImages/statueofliberty.jpg"));

				questions.push(new question("How many years old was John Lennon when he died",40,"He was 40, The Dakota doorman Jose Perdomo and a nearby cabdriver saw Chapman standing in the shadows by the archway. As Lennon passed by, he glanced briefly at Chapman, appearing to recognise him from earlier that same evening. Seconds later, Chapman took aim at the center of Lennon's back and fired five hollow-point bullets at him from a Charter Arms .38 Special revolver, in rapid succession, from a distance of about 9 or 10 feet (about 3 m). John Lennon was an English musician who gained worldwide fame as one of the members of the Beatles, for his subsequent solo career, and for his political activism and pacifism.","/numbersGameImages/johnlennon.jpg"));

				questions.push(new question("What was the release year of Back to the Future?",1985,"1985, Back to the Future is a 1985 American science-fiction adventure comedy film directed by Robert Zemeckis and written by Zemeckis and Bob Gale. It stars Michael J. Fox as teenager Marty McFly, who is sent back in time to 1955, where he meets his future parents in high school and accidentally becomes his mother's romantic interest.","/numbersGameImages/backtothefuture.jpg"));

				questions.push(new question("What year did Neil Armstrong land on the moon",1969,"Apollo 11 was the spaceflight that landed the first two humans on the Moon. Mission commander Neil Armstrong and pilot Buzz Aldrin, both American, landed the lunar module Eagle on July 20, 1969","/numbersGameImages/moonlanding.jpg"));

				questions.push(new question("What number was the last Apollo mission",17,"Apollo 17 was the final mission of NASA's Apollo program. Launched at 12:33 a.m. Eastern Standard Time (EST) on December 7, 1972, with a crew made up of Commander Eugene Cernan, Command Module Pilot Ronald Evans, and Lunar Module Pilot Harrison Schmitt, it was the last use of Apollo hardware for its original purpose; after Apollo 17, extra Apollo spacecraft were used in the Skylab and Apollo–Soyuz programs.","/numbersGameImages/apollo17.jpg"));

				questions.push(new question("What was the crew size of the Mercury-Atlas 6? (Friendship 7)",1,"Mercury-Atlas 6 (MA-6) was the third human spaceflight for the U.S. and part of Project Mercury. Conducted by NASA on February 20, 1962, the mission was piloted by astronaut John Glenn, who performed three orbits of the Earth, making him the first U.S. astronaut to orbit the Earth.","/numbersGameImages/glenn.jpg"));

				questions.push(new question("How many stairs must visitors climb to reach the Statue of Liberty's crown?",354," 354, The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and built by Gustave Eiffel. The statue was dedicated on October 28, 1886.","/numbersGameImages/statueofliberty.jpg"));

				questions.push(new question("How many pounds does the statue of liberty weigh",450000,"450,000 lbs, The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and built by Gustave Eiffel. The statue was dedicated on October 28, 1886.","/numbersGameImages/statueofliberty.jpg"));

				questions.push(new question("How many windows in the Statue of Liberty's crown?",25,"25, The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and built by Gustave Eiffel. The statue was dedicated on October 28, 1886.","/numbersGameImages/statueofliberty.jpg"));

				questions.push(new question("How many spikes on the Statue of Liberty's crown",7,"7,The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and built by Gustave Eiffel. The statue was dedicated on October 28, 1886.","/numbersGameImages/statueofliberty.jpg"));

				questions.push(new question("What year did the first pizzeria in the United States open?",1905,"The first United States pizzeria — G. Lombardi's — was opened in 1905 by Gennaro Lombardi at 53 1/3 Spring Street in New York City. It is still open today using its original oven, although it has changed location.","/numbersGameImages/pizza.jpg"));

				questions.push(new question("How many feet tall is the Washington Monument (Washington DC)?",555,"555 feet, The Washington Monument is an obelisk on the National Mall in Washington, D.C., built to commemorate George Washington, once commander-in-chief of the Continental Army and the first President of the United States.","/numbersGameImages/washingtonmonument.jpg"));

				questions.push(new question("What is the crew size of a B-17 Flying Fortress?",10,"A crew of 10, The Boeing B-17 Flying Fortress is a four-engine heavy bomber developed in the 1930s for the United States Army Air Corps (USAAC). Competing against Douglas and Martin for a contract to build 200 bombers, the Boeing entry (prototype Model 299/XB-17) outperformed both competitors and exceeded the air corps' performance specifications. Although Boeing lost the contract (to the Douglas B-18 Bolo) because the prototype crashed, the air corps ordered 13 more B-17s for further evaluation. From its introduction in 1938, the B-17 Flying Fortress evolved through numerous design advances","/numbersGameImages/b17.jpg"));

				questions.push(new question("What year did World War 1 start?",1914,"1914, World War I (WWI or WW1), also known as the First World War, the Great War, or the War to End All Wars,[5] was a global war originating in Europe that lasted from 28 July 1914 to 11 November 1918. More than 70 million military personnel, including 60 million Europeans, were mobilised in one of the largest wars in history.Over nine million combatants and seven million civilians died as a result of the war (including the victims of a number of genocides).","/numbersGameImages/ww1.jpg"));

				questions.push(new question("What year did the Korean War start?",1950,"1950, After the first two months of war, South Korean and U.S. forces rapidly dispatched to Korea were on the point of defeat, forced back to a small area in the south known as the Pusan Perimeter. In September 1950, an amphibious UN counter-offensive was launched at Incheon, and cut off many North Korean troops. Those who escaped envelopment and capture were forced back north. UN forces rapidly approached the Yalu River—the border with China—but in October 1950, mass Chinese forces crossed the Yalu and entered the war","/numbersGameImages/koreanwar.jpg"));

				questions.push(new question("How many million people live in Beijing? (2017)",21,"21 million, Beijing is the capital of China","/numbersGameImages/beijing.jpg"));

				questions.push(new question("What year was YouTube founded?",2005,"2005, YouTube was founded by Chad Hurley, Steve Chen and Jawed Karim, who were all early employees of PayPal. Hurley had studied design at Indiana University of Pennsylvania, and Chen and Karim studied computer science together at the University of Illinois at Urbana-Champaign.","/numbersGameImages/youtube.jpg"));

				questions.push(new question("What year was Facebook founded?",2004,"2004, Facebook is an American for-profit corporation and an online social media and social networking service based in Menlo Park, California. The Facebook website was launched on February 4, 2004, by Mark Zuckerberg, along with fellow Harvard College students and roommates, Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, and Chris Hughes.","/numbersGameImages/facebook.jpg"));

				questions.push(new question("What year was Google founded?",1998,"1998, Google LLC is an American multinational technology company that specializes in Internet-related services and products. These include online advertising technologies, search, cloud computing, software, and hardware. Google was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, in California. Together, they own about 14 percent of its shares, and control 56 percent of the stockholder voting power through supervoting stock.","/numbersGameImages/google.jpg"));
























				let testQuestion = new question("How many years did it take to build the Golden Gate Bridge?",4);
				window.alert("hello");
			}
			
			function startGame(){
				
				players = [];
				var b;
				
				
				
				for(i=0;i<numPlayers;i++){
					
					b = i+1;
					var p = document.getElementById("name"+b).value;
					players.push(new player(p));
				}
				
				document.getElementById("second").style.display = 'none'
				document.getElementById("third").style.display = 'none'
				
				
				
				letsDoThis();
				
			}
			
			function letsDoThis(){

				document.getElementById("reveal").style.display = 'none';

				document.getElementById("question").style.display = 'block';
				
				document.getElementById("question").innerHTML = questions[turnCounter].actualQuestion + "<br><br>";


				document.getElementById("fourth").style.display = 'block';
				
				for(i=0;i<numPlayers;i++)
				{
					var b = i + 1;
					document.getElementById("cancer"+ b).innerHTML = players[i].name + players[i].score.toFixed(2) + '<input type="number" id="input'+b+'" class="textbox" style="width: 90px">';
					
				}
				
				document.getElementById("answer").innerHTML = '<input type="button" onclick="testScores();" class="button" value="Submit">';
			}
			
			function testScores(){
				
				
				
				
				
				for(i=0;i<numPlayers;i++){
					
					
					
					
					var b = i + 1;
					var testAnswer = document.getElementById("input"+b).value;
					var multi;
					
					
					
					
					if(testAnswer > questions[0].correctAnswer)
					{
						multi = questions[0].correctAnswer / testAnswer;
						
						players[i].score += multi;
						roundScoreCheckers[i].roundScore = multi;

					}
					else if(questions[0].correctAnswer > testAnswer)
					{
						multi = testAnswer / questions[0].correctAnswer;
						
						players[i].score += multi;
						roundScoreCheckers[i].roundScore = multi;
						
					}
					else{
						
						players[i].score += 1;
						roundScoreCheckers[i].roundScore = 1;
						
					}
					

					
				}
				
					window.alert(questions[0].correctAnswer);
					//letsDoThis();
					intermission();
				
			}

			function intermission(){

				var highScore = 0;
				var highScoreString = "High Score: ";



				for(var i=0 ; i < playerSize; i++){

					if(roundScoreCheckers[i].roundScore >= highScore)
					highScore = roundScoreCheckers[i].roundScore;

				}

				for(var i=0 ; i < playerSize ; i++){

					window.alert(highScore);

					if(roundScoreCheckers[i].roundScore == highScore)
					{
						highScoreString += players[i].name;
						highScoreString += ", ";

						
					}
					
				}

				
				document.getElementById("reveal").style.display = 'block';

				document.getElementById("question").style.display = 'none';




				document.getElementById("reveal").innerHTML = highScoreString + '<br><br>' + '<img src="https://markspot.us/'+questions[turnCounter].image+'"> <br><br><center><div class="newsbox">'+questions[turnCounter].comment+'</div><center>';

				


				document.getElementById("answer").innerHTML = '<input type="button" onclick="letsDoThis();" class="button" value="Next Question">';

				turnCounter++;


			}
			

			
			let player1 = new player("Markspot");
			
	
		</script>
		
		
		
	</head>
	<body>
	
	
		<!-- HEADER OF WEBSITE -->


	

	

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
		<div class="bordertwo" style="min-height: 900px;">
		<!-- STUFF GOES IN HERE -->


		<br><br>
		

		<span id="first">
		<form>
		
		<span class="afont">Number of Players</span>
		<input type="number" id="playerNumber" class="textbox" style="width: 40px">
		<input type="button" onclick="takePlayers()" class="button" value="Continue">
		</form>
		</span>
		
		
		
		<form>
		<span id="second">

		</span>
		<span id="third">
		
		</span>
		</form>
		
		<span id="fourth">
		
		
		
		
	
				
				<span id="cancer1">
				
				
				
				
				</span>
				
				
				<span id="cancer2">
				
				
				
				
				</span>
				
				
				<span id="cancer3">
				
				
				
				
				</span>
				
				
				<span id="cancer4">
				
				
				
				
				</span>
				
				
				<span id="cancer5">
				
				
				
				
				</span><br><br>

				<span id="question">
				
				
				
				
				</span><br><br>

				<span id="reveal">
				
				
				
				
				</span><br><br>



				<span id="answer">
				
				
				
				
				</span>


				
			
			
		
		</span>
		
		
				<p id="demo"></p>

	
		

		
		
		
		
		
	<br/><br/><br/><br/><br/><br/><br/><br/>
	
	
	
		<!-- STUFF STOPS HERE -->
		</div>
		<font size="2"><center><br/><br/>Markspot Website<br/>Thank you for visiting my website | Site by Mark Endsley</center></font>
	
	
	</body>
</html>
		
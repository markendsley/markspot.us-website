 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	
	<div class="border">
		<br/>
        <div class="titleLogo">
            <div class="hidden-xs">
                <img style="float:center;" src="images/banner.png">
            </div>
        </div>
        <div class="visible-xs">
            <img style="float:center;" src="images/banner.png">
        </div>
            <a href="https://discord.gg/c6vrBtV">
                <img align="right" src="images/discord.png">
            </a>
            <a href="https://www.linkedin.com/in/mark-endsley-7b7024b3">
                <img align="right" src="images/linkedin.png">
            </a>
		<br/>
		<br/>
		
	
        <center><div class="slider"><img id="slider" class="scalable" src="images/zslider1.jpg" alt="Markspot">
            </div></center>
				
	
		
		<script src="jquery-3.3.1.min.js"></script>
        
        
        <script>
            
            $(function(){
                
                var images = [];
		        images[0] = "images/zslider1.jpg";
		        images[1] = "images/zslider2.jpg";
                var counter = 1;
               
                setInterval(function(){
                   $('#slider').fadeOut(700,function(){
                       $(this).fadeIn(700);
                       $(this).attr("src", images[counter]);
                       
                       counter++;
                       
                       if(counter == 2)
                           {
                               counter = 0;
                           }
                       
                       
                       
                   });
                    
                    
                    
                }, 12000);
                
            });
        
            
        </script>
        
        
		
		
		
		<br/>
		
		
	    <div class="hidden-xs">
		<ul class="big">
			<li class="big"><a href="index.php"><img src="images/home.png"></a></li>
			<li class="big"><a href="news.php"><img src="images/news.png"></a></li>
			<li class="big"><a href="videos.php"><img src="images/videos.png"></a></li>
			<li class="big"><a href="code.php"><img src="images/code.png"></a></li>
			<li class="big"><a href="pages.php"><img src="images/pages.png"></a></li>
			<li class="big"><a href="images.php"><img src="images/images.png"></a></li>
			<li class="big"><a href="docs.php"><img src="images/docs.png"></a></li>
			<li class="big" style="float:right"><a class="active" href="about.php"><img src="images/about.png"></a></li>
		</ul>
        </div>
        <center>
        <div class="visible-xs">
            
        <table>
            <tr>
                <td width=50%>
                    <ul class="phone">
                        <li class="phone"><a href="index.php"><img src="images/home.png"></a></li>
                        <li class="phone"><a href="videos.php"><img src="images/videos.png"></a></li>
                        <li class="phone"><a href="pages.php"><img src="images/pages.png"></a></li>
                        <li class="phone"><a href="docs.php"><img src="images/docs.png"></a></li>
                    </ul>
                </td>
                <td width="50%">
                    <ul class="phone">
                    <li class="phone"><a href="news.php"><img src="images/news.png"></a></li>
                    <li class="phone"><a href="code.php"><img src="images/code.png"></a></li>
                    <li class="phone"><a href="images.php"><img src="images/images.png"></a></li>
                    <li class="phone"><a href="about.php"><img src="images/about.png"></a></li>
                    </ul>
                </td>
            
            </tr>    
        </table>

        </div>
        </center>
		</div>
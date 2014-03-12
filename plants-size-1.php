<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Simple Multi-Item Slider with CSS Animations and jQuery</title>
		<meta name="description" content="Simple Multi-Item Slider: Category slider with CSS animations" />
		<meta name="keywords" content="jquery plugin, item slider, categories, apple slider, css animation" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="bigandsmallplants.php"><strong>&laquo; Back to main page: </strong>Science Category</a>
				<span class="right"><a href="bigandsmallplants.php"><strong>Done>>>>>>>>>>></strong></a></span>
				
				<?php 
					session_start(); 
					if(($_GET['ans'] != "d")){
						$_SESSION['plant-size-1-ans'] = '0'; 
					}else{
						$_SESSION['plant-size-1-ans'] = '1'; 
					}
				?>
				
				
			</div><!--/ Codrops top bar -->
			<header class="clearfix">
				<h1>Which is a big plant?.<span>Select from the choices below:</span></h1>
			</header>
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
					
					<?php 			
								$active = 'style="color: green; font-size: 20px;"';
								
								if(($_GET['ans'] == "a")){
									echo '<li><a href="plants-size-1.php?ans=a"><img style="max-width: 130%;" src="images/image-plants-1.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (A)</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=b"><img style="max-width: 130%;" src="images/image-plants-2.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=c"><img style="max-width: 130%;" src="images/image-plants-3.png" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=d"><img style="max-width: 130%;" src="images/image-plant-4.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "b")){
									echo '<li><a href="plants-size-1.php?ans=a"><img style="max-width: 130%;" src="images/image-plants-1.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=b"><img style="max-width: 130%;" src="images/image-plants-2.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (B)</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=c"><img style="max-width: 130%;" src="images/image-plants-3.png" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=d"><img style="max-width: 130%;" src="images/image-plant-4.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "c")){
									echo '<li><a href="plants-size-1.php?ans=a"><img style="max-width: 130%;" src="images/image-plants-1.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=b"><img style="max-width: 130%;" src="images/image-plants-2.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=c"><img style="max-width: 130%;" src="images/image-plants-3.png" alt="img02"><span '.$active.'><h4>Your Answer is: (C)</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=d"><img style="max-width: 130%;" src="images/image-plant-4.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "d")){
									echo '<li><a href="plants-size-1.php?ans=a"><img style="max-width: 130%;" src="images/image-plants-1.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=b"><img style="max-width: 130%;" src="images/image-plants-2.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=c"><img style="max-width: 130%;" src="images/image-plants-3.png" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=d"><img style="max-width: 130%;" src="images/image-plant-4.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (D)</h4></span></a></li>';

								}	
								else{
									echo '<li><a href="plants-size-1.php?ans=a"><img style="max-width: 130%;" src="images/image-plants-1.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=b"><img style="max-width: 130%;" src="images/image-plants-2.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=c"><img style="max-width: 130%;" src="images/image-plants-3.png" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="plants-size-1.php?ans=d"><img style="max-width: 130%;" src="images/image-plant-4.jpg" alt="img01"><span><h4>D</h4></span></a></li>';
								}								
						?>
						
						
					</ul>
					<nav>
						<a href="#">Number 1.)</a>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
	</body>
</html>
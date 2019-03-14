<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web Demo </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="css1.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="imgg/logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-main">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="active" href="http://localhost/web-master/demo1.php">Home</a></li>
					<li><a href="#">Topics</a></li>
					<li><a href="http://localhost/web-master/lythuyet1.php">Grammar</a></li>
					<li><a href="http://localhost/web-master/index.php">Translate</a></li>
					<li><a href="#">Test</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
		</div>
	</nav>





	<div class="content" style= "background: #A8B5BE;">
		<div class="row">
			<div class="col-sm-5 " id="explain" style=" margin-top: 60px; margin-left:10px; ">
				<form method="POST">
					<h3>
				<textarea name ="dulieu" style="min-width: 550px; min-height: 200px; "><?php if (isset($_POST['submit'])) {
					echo $_POST['dulieu'];
				} ?></textarea>	
				<input type="submit" name="submit" value="Dịch">
			</h3>
			</form>
			</div>

  			<div class="col-sm-6" id="explain" style=" margin-top: 60px; margin-bottom: 0px; margin-left: 10px; margin-right: 10px">
  				<hr style="border-top:1px solid black;">	

				<?php
				$text1="";
				if (isset($_POST['submit'])) {
					$text1=$_POST['dulieu'];
					# code...
				}
            		require_once ('vendor/autoload.php');
            		use \Statickidz\GoogleTranslate;

            		$source = 'en';
            		$target = 'vi';
            		$text = $text1;

            		$trans = new GoogleTranslate();
            		$result = $trans->translate($source, $target, $text);

            		echo '<h2>'.$result.'</h2>';
        		?>
  			</div>

		</div>
	</div>



        


    <footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact us</h3>
				<br>
				<h4>Our address and contact info here.</h4>
			</div>
			<div class="col-sm-4">
				<h3>Connect</h3>
				<a href="#" class="fa fa-facebook fa-3x"></a>
				<a href="#" class="fa fa-twitter fa-3x"></a>
				<a href="#" class="fa fa-google fa-3x"></a>
				<a href="#" class="fa fa-youtube fa-3x"></a>
			</div>
			<div class="col-sm-4">
				<img src="imgg/logo.png" class="icon">
			</div>
	</footer>
    </body>
</htmL>
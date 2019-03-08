
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
	
	<?php
        $muc=array(
        	1 => 'Hiện tại đơn',
        	2 => 'Hiện tại tiếp diễn',
        	3 => 'Hiện tại hoàn thành',
        	4 => 'Hiện tại hoàn thành tiếp diễn',
        	5 => 'Quá khứ đơn',
        	6 => 'Quá khứ tiếp diễn',
        	7 => 'Quá khứ hoàn thành'
        );
    ?>
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
					<li><a href="#">Test</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="content" style= "background: #A8B5BE;">
		<div class="row">
				<div class="col-sm-2 " id ="phan1" style=" margin-top: 80px; margin-left: 10px; ">
				<form method="POST">			
        			<select name="mucc">
            			<option>Chọn mục</option>
            			<?php
                			foreach($muc as $k=>$v){
                		?>
                		<option value=" <?php echo $k;?> "><?php echo $v;?></option>
                		<?php
                		}
            			?>
        			</select>
        		
        			<div><input type="submit" name ="submit" value="Search" ></div>  
        			</form>      		
				</div>
			


  			<div class="col-sm-9" id="explain" style=" margin-top: 50px; margin-bottom: 0px; margin-left: 10px; margin-right: 10px">
  				<hr style="border-top:1px solid black;">
  					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "lythuyet";
						// Create connection
						$dbc = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($dbc->connect_error) {
    						die("Connection failed: " . $dbc->connect_error);
						} 
					?>
					<?php
						mysqli_set_charset($dbc, 'UTF8'); 	
						// Câu query lấy dữ liệu
						 if(isset($_POST['submit'])){
						 	$query = "select lythuyet from congthuc where TT= " .$_POST['mucc'] ;
  						 	$ret = $dbc->query($query);
   							while($row = $ret->fetch_assoc() ){
 							 echo  $row['lythuyet'] ;
   							}
        				}
						
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
</html>
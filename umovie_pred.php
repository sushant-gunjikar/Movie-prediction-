<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MSP amovie_pred.php</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i>MSP</i><!--Men<span>tor</span>--></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="user_dashboard.php">Home</a></li>
		 
		  <li class="active"><a href="amovie_pred.php">Movie Prediction</a></li>
		  <li><a href="alogout.php">Logout</a></li>
       
        </ul>
      </div>
    </div>
  </nav>
  
  
  

  
   <br/><br/><br/>
    
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-warning">
		  
			<div class="panel-heading">
			  <h3>Movies</h3>
			</div>
			
			<div class="panel-body">
			 
			  <form action="ins_amovie_pred.php" name="myForm" method="post">
				<div>
				  <b>1.</b>Id:
						<input type="text" id="id" name="id" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>2.</b>Title:
						<input type="text" name="title"  class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>3.</b>Year:
						<input type="text" name="year" class="form-control" required  max="4" />
							<br/>
					</div>
				
					<div>
						<b>4.</b>Actor:
						<select class="form-control" name="actor" required>
							<option value="">Choose Actor</option>
							<?php
								include_once("db.php");
								$res=mysqli_query($con,"select name from actor");
								
								while($row=mysqli_fetch_array($res))
								{
							?>
								
								<option><?php echo $row[0]; ?></option>
							<?php
								}
							?>
						</select>
						<br/>
					</div>
					
					<div>
						<b>5.</b>Actress:
						<select class="form-control" name="actress" required>
							<option value="">Choose Actress</option>
							<?php
								include_once("db.php");
								$res=mysqli_query($con,"select name from actress");
								
								while($row=mysqli_fetch_array($res))
								{
							?>
								
								<option><?php echo $row[0]; ?></option>
							<?php
								}
							?>
						</select>
						<br/>
						
					</div>
					
					<div>
						<b>6.</b>Director:
						<select class="form-control" name="director" required>
							<option value="">Choose Director</option>
							<?php
								include_once("db.php");
								$res=mysqli_query($con,"select name from director");
								
								while($row=mysqli_fetch_array($res))
								{
							?>
								
								<option><?php echo $row[0]; ?></option>
							<?php
								}
							?>
						</select>
							<br/>
					</div>
					
					<div>
						<b>7.</b>Music Director:
						<select class="form-control" name="music_director" required>
							<option value="">Choose Music Director</option>
							<?php
								include_once("db.php");
								$res=mysqli_query($con,"select name from music_director");
								
								while($row=mysqli_fetch_array($res))
								{
							?>
								
								<option><?php echo $row[0]; ?></option>
							<?php
								}
							?>
						</select>
							<br/>
					</div>
					
					<div>
						<b>8.</b>Writer:
						<select class="form-control" name="writer" required>
							<option value="">Choose Writer</option>
							<?php
								include_once("db.php");
								$res=mysqli_query($con,"select name from writer");
								
								while($row=mysqli_fetch_array($res))
								{
							?>
								
								<option><?php echo $row[0]; ?></option>
							<?php
								}
							?>
						</select>
							<br/>
					</div>
					
					<div>
						<b>5.</b>Prediction:
						<input type="text" name="prediction" class="form-control" required />
							<br/>
					</div>
				
					<div class="row">
						<div align="center">
							<button type="submit" class="btn btn-info btn-flat">submit</button>
						</div>
					</div>
				</form>
			  
			</div>
			
		  </div>
		
		</div>
	  </div>
	</div>
  
 

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

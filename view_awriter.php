
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movie Success Prediction. Admin_dashboard</title>
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
          <li class="active"><a href="#">Home</a></li>
		  <li><a href="aactor.php">Actor</a></li>
		  <li><a href="aactress.php">Actress</a></li>
		  <li><a href="adirector.php">Director</a></li>
		  <li><a href="amus_dir.php">Music Director</a></li>
		  <li><a href="awriter.php">Writer</a></li>
		  <li><a href="amovie_pred.php">Movie Prediction</a></li>
		  <li><a href="alogout.php">Logout</a></li>
       
        </ul>
      </div>
    </div>
  </nav>
  
  <br/><br/><br/><br/>
  
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-warning">
				<div class="panel-heading"><b>View Actor</b></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table bordered">
							<tr class="warning">
								<th>Pics</th>
								<th>ID</th>
								<th>Name</th>
								<th>No.of Movies</th>
								<th>Hit Movies</th>
								<th>Flop Movies</th>
								<th>Rating</th>
							</tr>
							
							<?php
								include_once("db.php");
								$qry="select * from writer";
								$res=mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo'
										<tr>
										
											<td>'.$result[0].'</td>
											<td>'.$result[1].'</td>
											<td>'.$result[2].'</td>
											<td>'.$result[3].'</td>
											<td>'.$result[4].'</td>
											<td>'.$result[5].'</td>
											<td>'.$result[6].'</td>
										</tr>';
								}
							?>
						</table>
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

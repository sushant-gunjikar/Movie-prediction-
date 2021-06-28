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
	<script>
	
		
		function fillactor(rec_data)
		{
			$.ajax({
						type: "GET",
						url: "fetch_actor1.php",
						data: "name="+rec_data,
						dataType:"json",  
						success: function(data) 
						{
							$('#actor1').empty();
							//$('#actor1').append($('<option>').text('Select name').attr('value', ''));
							//$('#actor1').append($.attr('value', ''));
							//$('#actor1').append($('<option>').attr('value', ''));
							$.each(data, function(i, value) 
							{
								$('#actor1').append($('<option>').text(value).attr('value', value));
							});
						}
					});
						return false;
		}
		
		function fillactress(rec_data)
		{
			$.ajax({
						type: "GET",
						url: "fetch_actress1.php",
						data: "name="+rec_data,
						dataType:"json",  
						success: function(data) 
						{
							$('#actress1').empty();
							//$('#rate').append($('<option>').text('Select name').attr('value', ''));
							$('#actress1').append($.attr('value', ''));
							
							$.each(data, function(i, value) 
							{
								$('#actress1').append($('<option>').text(value).attr('value', value));
							});
						}
					});
						return false;
		}
		function filldirector(rec_data)
		{
			$.ajax({
						type: "GET",
						url: "fetch_director1.php",
						data: "name="+rec_data,
						dataType:"json",  
						success: function(data) 
						{
							$('#director1').empty();
							//$('#rate').append($('<option>').text('Select name').attr('value', ''));
							$('#director1').append($.attr('value', ''));
							$.each(data, function(i, value) 
							{
								$('#director1').append($('<option>').text(value).attr('value', value));
							});
						}
					});
						return false;
		}
		
		function fillmdirector(rec_data)
		{
			$.ajax({
						type: "GET",
						url: "fetch_mdirector1.php",
						data: "name="+rec_data,
						dataType:"json",  
						success: function(data) 
						{
							$('#music_director1').empty();
							//$('#rate').append($('<option>').text('Select name').attr('value', ''));
							$('#music_director1').append($.attr('value', ''));
							$.each(data, function(i, value) 
							{
								$('#music_director1').append($('<option>').text(value).attr('value', value));
							});
						}
					});
						return false;
		}
		function fillwriter(rec_data)
		{
			$.ajax({
						type: "GET",
						url: "fetch_writer1.php",
						data: "name="+rec_data,
						dataType:"json",  
						success: function(data) 
						{
							$('#writer1').empty();
							//$('#rate').append($('<option>').text('Select name').attr('value', ''));
							$('#writer1').append($.attr('value', ''));
							$.each(data, function(i, value) 
							{
								$('#writer1').append($('<option>').text(value).attr('value', value));
							});
						}
					});
						return false;
		}
		
		function calc_prediction()
		{
			alert('hello');
			var x=document.getElementById("actor1").value;
			var y=document.getElementById("actress1").value;
			alert(x);
			if(x=="")
			{
				x=0;
			}
			if(y=="")
			{
				y=0;
			}
			var rem=(parseInt(x)+parseInt(y))/2;
			document.getElementById('predict').value=rem;
			
			
		}
		
		
	
		
	</script>
  
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
          <li><a href="admin_dashboard.php">Home</a></li>
		  <li><a href="aactor.php">Actor</a></li>
		  <li><a href="aactress.php">Actress</a></li>
		  <li><a href="adirector.php">Director</a></li>
		  <li><a href="amus_dir.php">Music Director</a></li>
		  <li><a href="awriter.php">Writer</a></li>
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
						<select class="form-control" name="actor" required onchange="fillactor(this.value)">
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
						<select name="actor1" class="form-control" id="actor1" onchange="calc_prediction()" >  
							<option value="actor1"> </option>
						
						</select>
							<br/>
					</div>
					
					<div>
						<b>5.</b>Actress:
						<select class="form-control" name="actress" required onchange="fillactress(this.value)">
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
						<select name="actress1" class="form-control" id="actress1"  onchange="calc_prediction()" >	
							<option	value="actress1"></option>				
						</select>
							<br/>
					</div>
					
					<div>
						<b>6.</b>Director:
						<select class="form-control" name="director" required onchange="filldirector(this.value)">
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
						<select name="director1" class="form-control" id="director1" readonly> <!-- style="visibility:hidden"-->
						
						</select>
							<br/>
					</div>
					
					<div>
						<b>7.</b>Music Director:
						<select class="form-control" name="music_director" required onchange="fillmdirector(this.value)">
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
						<select name="music_director1" class="form-control" id="music_director1" readonly> 
						
						</select>
							<br/>
					</div>
					
					
					
					<div>
						<b>8.</b>Writer:
						<select class="form-control" name="writer" required onchange="fillwriter(this.value)">
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
						<select name="writer1" class="form-control" id="writer1" readonly> 
						
						</select>
							<br/>
					</div>
					
					<div>
						<b>9.</b>Prediction:
						<input type="text" name="predict" id="predict" class="form-control" required />
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

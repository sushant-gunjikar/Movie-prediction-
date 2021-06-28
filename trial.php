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
	
		
		
		function calc()
		{
			
			var x=document.getElementById("ex").value;
			var y=document.getElementById("ex1").value;
			
			
			if(x=="")
			{
				x=0;
			}
			if(y=="")
			{
				y=0;
			}
			var rem=(parseInt(x)+parseInt(y));
			document.getElementById('result').value=rem;
			
			
		}
		
		
	
		
	</script>
  
</head>

<body>
  
   <br/><br/><br/>
    
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-warning">
		  
			<div class="panel-heading">
			  <h3>Movies</h3>
			</div>
			
			<div class="panel-body">
			 
			  <form action="" name="myForm" method="post">
				
					
					
					
					<div>
						select num 1:
						<select name="num1" class="form-control" id="ex" onchange="calc()" >  
							<option value="1">1</option>
							<option value="2">2</option>
						
						</select>
							<br/>
					</div>
					
					
					<div>
						select num 2:
						<select name="num1" class="form-control" id="ex1" onchange="calc()" >  
							<option value="1">1</option>
							<option value="2">2</option>
						
						</select>
							<br/>
					</div>
					
					<div>
						result:
						<input type="text" name="result" class="form-control" id="result">
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

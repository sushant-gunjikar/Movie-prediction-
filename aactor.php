<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MSP actor.php</title>
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
	function readURL(input)
	{
		if (input.files && input.files[0])
			
			{
				var reader = new FileReader();
				reader.onload = function (e)
				{
					$('#pics').attr('src', e.target.result);
				};
					reader.readAsDataURL(input.files[0]);
			}
	}
	
	
	function calc()
	{
		var x=document.getElementById("movies").value;
		var y=document.getElementById("hits").value;
		
		if(x=="")
		{
			x=0;
		}
		if(y=="")
		{
			y=0;
		}
		var rem=parseInt(x)-parseInt(y);
		document.getElementById('flops').value=rem;
		var per=(parseInt(y)/parseInt(x))*100;
		document.getElementById('rating').value=per;
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
		  <li class="active"><a href="aactor.php">Actor</a></li>
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
  
   <br/><br/><br/>
    
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-warning">
		  
			<div class="panel-heading">
			  <h3>Actor</h3>
			</div>
			
			<div class="panel-body">
			 
			  <form action="ins_aactor.php" name="myForm" method="post" enctype="multipart/form-data">
					
					<div>
						<img src="" id="pics" class="img-thumbnail" title="&nbsp;Profile Photo" style="width:220px; height:120px;"/>
						<br><br>
						<input type="file" id="exampleInputFile" name="exampleInputFile" onchange="readURL(this);" required />
						<br>
					
					</div>
					
					<div>
						<b>1.</b>Id:
						<input type="text" id="id" name="id" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>2.</b>Name:
						<input type="text" name="name"  class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>3.</b>No.of Movies:
							<input type="number" name="movies" id="movies" class="form-control" required onkeyup="calc()" />
							<br/>
					</div>
					
					<div>
						<b>4.</b>No.of hits:
							<input type="number" name="hits" id="hits" class="form-control" required onkeyup="calc()" />
							<br/>
					</div>
					
					<div>
						<b>5.</b>No.of flops:
							<input type="number" name="flops" id="flops" class="form-control" required onkeyup="calc()" />
							<br/>
					</div>
					
					<div>
						<b>6.</b>Rating. <b>(%)</b>:
							<input type="number" name="rating" id="rating" required class="form-control" onkeyup="calc()" />
							<br/>
					</div>
				
					<div class="row">
						<div align="center">
							<button type="submit" class="btn btn-info btn-flat">submit</button>
							<a href="upd_aactor.php" class="btn btn-info btn-flat" role="button">Update</a>
							<a href="view_aactor.php" class="btn btn-info btn-flat" role="button">View</a>
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

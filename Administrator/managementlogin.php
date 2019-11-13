
<html>
	<head>
		<title>Bslate Education - Management Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			
		</script>
		
		<style>
			
			
			#box
			{
	border-color: #ccc;
	-webkit-box-shadow: 0px 5px 6px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 5px 6px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 5px 6px 0px rgba(0,0,0,0.2);
}
	.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */

.right-addon .glyphicon { right: 0px;}

/* add padding  */

.right-addon input { padding-right: 30px; }	



<!--nav {
 
  //box-shadow: 5px 4px 5px #000;
}-->
		</style>
		
		<script type="text/javascript">
		
	$(document).ready(function(){
    $("#add").click(function(){
       //alert('gfg');
		 $("#login").hide();
		 $("#forget").show(1300);

		
    });
	  $("#forg").click(function(){
       //alert('gfg');
		 $("#forget").hide();
		 $("#login").show(1300);

		
    });
	
	
			
		});
		
		</script>
	</head>
	<body style="padding:0px;margin:0px;">
		<div class="col-sm-12" style="border:0px solid red;padding:0px;margin:0px;">
			<div class="col-sm-12" style="border:0px solid green;background-color: #333;padding-top:10px;padding-bottom:10px;">
				<div class="col-sm-4" style="border:0px solid white;">
				<img src="bslate.png" style="width:200px;height:40px;margin-top:-10px;" alt="">
				</div>
				<div class="col-sm-4" style="boredre:0px solid blue;">
		  
        </div>
			<div class="col-sm-4" style="boredre:0px solid blue;">
		  
        </div>
		
		
			</div>
			
			<div class="col-sm-12" style="border:0px solid yellow;background-image: url(college-edu.jpg);background-repeat: no-repeat;background-size: 100% 100%;height:580px;"> 
				
				
				<div class="col-sm-12" style="border:0px solid green;padding-top:80px;opacity:0.9;">
			
			<div class="col-sm-4" style="border:0px solid blue;margin:0px;padding:0px;">
			</div>
				<div class="col-sm-4" id="box" style="border:0px solid lightgrey;background:white;margin:0px;padding:0px;">
				
				<div id="login">
					<div class="row" style="border:0px solid lightgrey;text-align:center;padding-top:10px;"><br>
						<img src="bslate.png" style="width:200px;height:40px;" alt="">
				<!--
							<p style="font-size:25px;color:green;color:black;font-weight:bold;" >Login</p>
						-->
						
					</div>
					<form name="f1" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="row" style="padding-top:40px;">
						
						<div class="form-group" style="padding-left:40px;padding-right:40px;">
							<div class="inner-addon right-addon" >
							<i class="glyphicon glyphicon-envelope"></i>
							<input type="text" class="form-control" id="e1" placeholder="UserName" name="a" onchange="return abc()" required>
							
							<span id="confirmMessage1" class="confirmMessage1"></span>
							</div>
						</div>
						<div class="form-group" style="padding-left:40px;padding-right:40px;">
							<div class="inner-addon right-addon" >
								<i class="glyphicon glyphicon-lock"></i>
								<input type="password" class="form-control" placeholder="Password" name="b" id="p1" onchange="return pqr()" required>
								<span id="confirmMessage" class="confirmMessage"></span>
							</div>
						</div>
						<div class="form-group text-center">
										<input type="checkbox" class="" name="remember" id="remember">
										<label for="remember"> Remember Me </label>
						</div>
						<div class="col-sm-12">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary center-block col-sm-12" style="border:1px solid #66CCFF;background-color:#66CCFF;width:89%;margin-left:25px;font-weight:bold;" >
						</div>

						
							<div class="col-sm-12" style="text-align:left;margin-top:20px;text-decoration:none;a:active:blue;">
									&nbsp;<u><a href="#" id="add">Forgot Password</a></u>	
							</div>
							
						
					</div>
					</form>
			
</div>

<div id="forget" style="display:none;">

					<div class="row" style="border:0px solid lightgrey;text-align:center;padding-top:10px;"><br>
						<img src="bslate.png" style="width:200px;height:40px;" alt="">
				<!--
							<p style="font-size:25px;color:green;color:black;font-weight:bold;" >Login</p>
						-->
						
					</div>
					<form name="f1" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="row" style="padding-top:40px;">
						
						<div class="form-group" style="padding-left:40px;padding-right:40px;">
							<div class="inner-addon right-addon" >
							<i class="glyphicon glyphicon-envelope"></i>
							<input type="email" class="form-control" id="sa" placeholder="Enter Register Mail ID" name="forge" onchange="return abc()" required>
							
							<span id="confirmMessage1" class="confirmMessage1"></span>
							</div>
						</div>


						<div class="col-sm-12">
						<input type="submit" name="forget" value="Submit" class="btn btn-primary center-block col-sm-12" style="border:1px solid #66CCFF;background-color:#66CCFF;width:89%;margin-left:25px;font-weight:bold;" >
						</div>

						
							<div class="col-sm-12" style="text-align:left;margin-top:20px;text-decoration:none;a:active:blue;">
									&nbsp;<u><a href="#" id="forg">Back To Login</a></u>	
							</div>
							
						
					</div>
					</form>


</div>
					
					
				</div>
				<div class="col-sm-4" style="border:0px solid red;margin:0px;padding:0px;">
					
				</div>
				
			</div>
				
				
				
			</div>
			<!---------------footer----------------------------->
			<div class="col-sm-12" style="border:0px solid green;background-color:#404040;color:white;">
				
				<div class="col-sm-12" style="color:white;">
									<div class="col-sm-2"></div>
					<div class="col-sm-2">
						<h5><a href="javascript:void()" style="color:white;">About Us</a></h5>
					</div>
					<div class="col-sm-2">
						<h5><a href="javascript:void()" style="color:white;">Privacy Policy</a></h5>
					</div>
					<div class="col-sm-2">
						<h5><a href="javascript:void()" style="color:white;">Terms and Conditions</a></h5>
					</div>
					<div class="col-sm-2">
							<h5><a href="javascript:void()" style="color:white;">Contac Us</a></h5>
					</div>
					<div class="col-sm-2"></div>
					<div class="col-sm-12" style="text-align:center;">
  <h4>&copy; Krupa Hi-Tech Global Technologies India Pvt Ltd.</h4>
</div>
				</div> 
		
		
		
			</div>
				
	</body>
</html>


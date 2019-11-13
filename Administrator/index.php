<?php
// session_start();
require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
if(isset($_SESSION['admin_id']))
{
		echo"<script>
				window.location.href='index_logon.php';
				</script>";
				exit;
	
}

?>
<html>
	<head>
		<title>FarmerWatcher - Administrator Login</title>
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
			<div class="col-sm-12" style="border:0px solid green;background-color:#404040;padding-top:10px;padding-bottom:10px;">
				<div class="col-sm-4" style="border:0px solid white;">
				<!--<img src="../img/greenlogo.jpg" style="width:200px;height:40px;margin-top:-10px;" alt="">-->
				
				<a href="../index.php" style="color:white;font-size:20px;font-weight:bold;">FarmerWatcher</a>
				
				</div>
				<div class="col-sm-4" style="boredre:0px solid blue;">
		  
        </div>
			<div class="col-sm-4" style="boredre:0px solid blue;">
		  
        </div>
		
		
			</div>
			
			<div class="col-sm-12" style="border:0px solid yellow;background-image: url('bg.jpg');background-repeat: no-repeat;background-size: 100% 100%;height:580px;"> 
				
				
				<div class="col-sm-12" style="border:0px solid green;padding-top:80px;opacity:0.85;">
			
			<div class="col-sm-4" style="border:0px solid blue;margin:0px;padding:0px;">
			</div>
				<div class="col-sm-4" id="box" style="border:1px solid lightgrey;background:white;border-radius:3px;margin:0px;padding:0px;">
				
				<div id="login">
					<div class="row" style="border:0px solid lightgrey;text-align:center;padding-top:10px;"><br>
					<a href="" style="color:black;font-size:20px;font-weight:bold;">FarmerWatcher</a>
				
					
					<!--	<img src="../img/greenlogo.jpg" style="background-color:lightgrey;width:200px;height:60px;border:1px solid lightgrey;border-radius:5px;" alt="">
					
					-->
				<!--
							<p style="font-size:25px;color:green;color:black;font-weight:bold;" >Login</p>
						-->
						
					</div>
					<form name="f1" action="login.php" method="post">
					<div class="row" style="padding-top:40px;">
						
						<div class="form-group" style="padding-left:40px;padding-right:40px;">
							<div class="inner-addon right-addon" >
							<i class="glyphicon glyphicon-envelope"></i>
							<input type="text" class="form-control" id="e1" placeholder="UserName" name="a" style="border:1px solid grey;" onchange="return abc()" required>
							
							<span id="confirmMessage1" class="confirmMessage1"></span>
							</div>
						</div>
						<div class="form-group" style="padding-left:40px;padding-right:40px;">
							<div class="inner-addon right-addon" >
								<i class="glyphicon glyphicon-lock"></i>
								<input type="password" class="form-control" placeholder="Password" name="b" id="p1" style="border:1px solid grey;" onchange="return pqr()" required>
								<span id="confirmMessage" class="confirmMessage"></span>
							</div>
						</div>

				       <div class="form-group" style="padding-left:40px;padding-right:40px;">
				      	<!-- <label for="usr" id="field_label">Login Type<span style="color:red;"></span></label> -->
					      <select class="form-control" id="usr" name="log_type"  title="Login Type" required>
					          
					          <option value="">-- Choose Login Type --</option>
					          <option value="">Admin</option>
					          <option value="1">State Head</option>
					          <option value="2">District Head</option>
					          <option value="3">Mandal Head</option>
					          <option value="4">Village Head</option>
					          
					       </select>
				       </div>


						<div class="form-group text-center">
										<input type="checkbox" class="" name="remember" id="remember">
										<label for="remember"> Remember Me </label>
						</div>
						<div class="col-sm-12">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary center-block col-sm-12" style="border:1px solid #66CCFF;background-color:#66CCFF;width:89%;margin-left:25px;font-weight:bold;" >
						</div>

						
							<div class="col-sm-12" style="text-align:left;margin-top:20px;text-decoration:none;">
								<!--	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#" id="add" style="color:#3366FF;font-size:13px;">Forgot Password</a>
									-->
									</u>	
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
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#" id="forg" style="color:#3366FF;font-size:13px;">Back To Login</a>  </u>	
									
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
									<br/>	<br/>
					<div class="col-sm-12" style="text-align:center;">
  <h4>&copy; Developed by - Chamel Technologies Pvt Ltd.</h4>
  
  	<br/>	<br/>
</div>
				</div> 
		
		
		
			</div>
				
	</body>
</html>

<?php


if(isset($_REQUEST['submit']))
{
	
	$table="admin_profile";
	$conds="where username='".$_REQUEST['a']."' and password='".$_REQUEST['b']."'";
	
	$rtyqalvd=$getsignle->getsinglerecord($table,$conds);

			if($rtyqalvd)
			{

				$_SESSION['admin_id']=$rtyqalvd['username'];
				$_SESSION['admin_name']=$rtyqalvd['name'];
        		$_SESSION['client']="Admin";
            	$_SESSION['head']="Admin";
				
				echo"<script>
				window.location.href='news_worldreports.php';
				</script>";
				exit;
				}
				else
				{
				    
				$qry_cus=mysql_query("select * from create_login where email='".$_REQUEST['a']."' and password='".$_REQUEST['b']."' and login_type='".$_REQUEST['log_type']."'");
				    if($rw=mysql_fetch_array($qry_cus))
				    {
				        
					$_SESSION['admin_id']=$rw['email'];
					$_SESSION['admin_name']=$rw['firstName']." ".$rw['lastName'];
					// $_SESSION['client']=$rw['ID'];
					$_SESSION['client']=$rw['login_type'];
					// $_SESSION['client_login_type']=$rw['login_type'];

					$_SESSION['head']=$rw['login_type'];
				echo"<script>
				window.location.href='news_worldreports.php';
				</script>";
				exit;
				        
				    }
				    else
				    {
				       echo"<script>
				alert('Invalid username and password. Please try again.!!!');
		window.location.href='index.php';

				</script>";
				exit;
				    }
				    
				
				}
}


				
		






if(isset($_REQUEST['forget']))
{

$tablea="admin_profile";
	$condsa="where mailid='".$_REQUEST['forge']."' ";
	
	$rtyqalvd=$getsignle->getsinglerecord($tablea,$condsa);
			if($rtyqalvd)
			{
				




				$user=$rtyqalvd['username'];
				$name=$rtyqalvd['name'];
				$pass=$rtyqalvd['password'];
				$mail=$rtyqalvd['mailid'];
				$off_mail=$rtyqalvd['official_mail'];
				
				
				
				
	$subject="Bslate - Password Recovery";
	
	$msg =" 
			<table width='500' cellpadding='0' cellspacing='0' border='0' style='border:solid 10px #3366CC;'> 

		<tr  bgcolor='#3366CC' height='25'> 

		<td height='70'>
			<h2><span style='color:white;'>Bslate.,</span></h2>
			
		</td> 

	</tr> 
	
	<tr bgcolor='#FFFFFF'> <td> <br> </td> </tr> 
	
	<tr bgcolor='#FFFFFF' height='30'> 

		<td height='27' valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>
		
		<h3>Bslate Education Application</h3><br/>
			<b>UserName : </b>$user<br />
			<b>PassWord : </b>$pass
			<br /><br /><br />
			
		</td> 
		
	</tr> 
	
	<tr bgcolor='#FFFFFF'><td> </td></tr> 
	
	<tr height='40'  bgcolor='#d4db0a'> 
	
		<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color:#3366CC;'>
		
			<font color='white'>Copyright @ ".date('Y')." Krupa Hi-Tech Global Technologies India Pvt Ltd., </font>
			
		</td> 

	</tr> 

</table>";	
$to = $mail;
	
       		    
  //$headers .= "From: .'hfczambia@gmail.com'.\r\n";
  //$headers .= "Reply-To: ". strip_tags($to) . "\r\n";
 // $headers .= "CC: swami.sri024@gmail.com\r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Bslate<$off_mail>' . "\r\n";
	$headers .= ""."\r\n";    	
	//echo $msg;
				//mail($to,$subject,$msg,$headers);
		$rd=mail($to,$subject,$msg,$headers);
			
	   			if($rd)
				{
					
					
				echo"<script>
				alert('Your password and username is successfully sent to your registered mail id !!!');
				
				window.location.href='index.php';
				</script>";
				exit;
				}
				else
				{
					
				echo"<script>
				alert('Invalid mail id. So please try again.!!!');
				
				window.location.href='index.php';
				</script>";
				exit;
				}


				
			}
			else
			{
				echo"<script>
				alert('Invalid mail id. So please try again.!!!');
				
				window.location.href='index.php';
				</script>";
				exit;
			}
}





















?>
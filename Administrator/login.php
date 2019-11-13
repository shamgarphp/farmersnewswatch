<?php

require_once("config/dbconnection.php");
// $getsignle = new Dbcon;
if(isset($_SESSION['admin_id']))
{
		echo"<script>
				window.location.href='index_logon.php';
				</script>";
				exit;
	
}

$username = $_REQUEST['a'];
$password = $_REQUEST['b'];


if(isset($_REQUEST['submit']))
{
	
	$sql="SELECT * FROM admin_profile where username='$username' and password='$password'";
	$result=mysqli_query($dbc,$sql);
	$rtyqalvd= mysqli_fetch_array($result);
	// $table="admin_profile";
	// $conds="where username='".$_REQUEST['a']."' and password='".$_REQUEST['b']."'";
	
	// $rtyqalvd=$getsignle->getsinglerecord($table,$conds);

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
				    
				$qry_cus=mysqli_query($dbc,"select * from create_login where email='".$_REQUEST['a']."' and password='".$_REQUEST['b']."' and login_type='".$_REQUEST['log_type']."'");
				    if($rw=mysqli_fetch_array($qry_cus))
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
?>
<?php

include("config/dbconnection.php");

include("config/dbconfig.php");

$config_class = new Dbcon;

if(isset($_POST['submit']))
{
	
	$pass=$_POST['cur1'];
	$cpass=$_POST['cur'];
	

				
	$table="admin_profile";
	$columns="password='".$pass."'";
	$sevar=$_SESSION['admin_id'];
	
	$column_values="where username='".$sevar."' ";
		
	$conds="where password='".$cpass."'";
	$ret=$config_class->getsinglerecord($table,$conds);
	if(!$ret)
	{
		echo"<script>
		alert('Invalid current password');
		window.location.href='change_password.php';
		</script>";
		exit;
	}	
	else
	{
			$result=$config_class->updaterecord($table,$columns,$column_values);
		
	if($result)
	{
		$suc=base64_encode("succ");
		echo"<script>
		window.location.href='change_password.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='mgmt_change_password.php?notsucc=".$fail."';
		</script>";
		exit;
	}

	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Change Password</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />

</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">

	<?php require_once("includes/mainheader.php"); ?>
	
	</div>


<!--  page header   -->
        <div class="navbar navbar-default header-highlight">
            
			
			
			<?php  require_once("includes/main_header.php");  ?>
			
			
			
        </div>
		
		
		<!--  page header stop   -->
		
		
		<!-- page overall content start here -->
		
        <div class="page-container" style="min-height:567px">
            <div class="page-content">
			
			
			<!-- page sidemenu start here     -->
			
<?php  require_once("includes/leftsidemenu.php");  ?>

				
				<!--  page sidemenu stop here   -->
				
				
				
				
				
				
                <div class="content-wrapper">
                    <div class="content">
<script src="./supporting/Chart.js"></script>
<script src="./supporting/Chart.StackedBar.js"></script>
<!--<script type="text/javascript" src="/css/assets/js/plugins/visualization/echarts/echarts.js"></script>-->                        






<div class="page-header">
    <div class="row">
       
	   
	   
	   
	   <?php  require_once("includes/main_header1.php");  ?>
		
		
		
    </div>
</div>

<!-- header -->

<!-- body content  -->
<SCRIPT language="javascript">
			
	$(function(){

	// add multiple select / deselect functionality
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){

		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});
});
	</script>
	
  
  
  
  
<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">
	<?php
	
	
	//if(isset($_GET['add_edu']))
	//{

?>
	<div id="add_edu_ty">
		<div class="col-sm-12" id="edu_type_label" >Change Password
		</div>
		<div class="col-sm-12" style="border:1px solid lightgrey;">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			<?php
			
			if(isset($_GET['succ']))
			{
				if(base64_decode($_GET['succ'])=="succ")
				{
				?>
			<div class="alert alert-success" id="alert_label_succ">Successfully password changed. !</div>
				
			<?php
				}
				}
			if(isset($_GET['notsucc']))
			{	if(base64_decode($_GET['notsucc'])=="wrong")
				{
				
				?>
			<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
			<?php
				}
				}
			
			?>
				<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="form-group">
      <label for="usr" id="field_label">Current Password:</label>
      <input type="password" class="form-control" id="usr" name="cur" placeholder="Current Password" title="Please Enter Current Password" required>
    </div>
					<div class="form-group">
      <label for="usr" id="field_label">New Password:</label>
      <input type="password" class="form-control" id="usr1" name="cur1" placeholder="New Password" title="Please Enter New Password" required>
    </div>
					<div class="form-group">
      <label for="usr" id="field_label">Confirm Password:</label>
      <input type="password" class="form-control" id="usr2" name="cur2" placeholder="Confirm Password" title="Please Enter Confirm Password" required>
    </div>
	
	<div class="form-group">

      <input type="submit" class="edu_btn" name="submit"  value="Change">
    </div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
		</div>
	
	
	
	</div>
	
</div>
<!-- body content end -->

                 </div>
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        
					
						<?php   require_once("includes/footer.php"); ?>
						
						
						
                    </div>         
                </div>
            </div>
        </div>
            


</body>
</html>

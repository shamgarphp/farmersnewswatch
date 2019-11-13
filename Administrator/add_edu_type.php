<?php

include("config/dbconnection.php");

include("config/dbconfig.php");

$config_class = new Dbcon;

//$getsignle = new Dbcon;
$config_class->is_session();

if(isset($_POST['submit']))
{
	$name=$_POST['edu_type'];
	$table="education_type";
	$columns="education_name";
	$column_values="'".$name."'";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	if($result)
	{
		$suc=base64_encode("succ");
		echo"<script>
		window.location.href='add_edu_type.php?add_edu&succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='add_edu_type.php?add_edu&notsucc=".$fail."';
		</script>";
		exit;
	}
}











?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
 
<style type="text/css">

tr:nth-child(even) {
    background-color: #F0F0F0;
}

tr:nth-child(odd) {
    background-color: white;
}
#rg:hover
{
    background-color: lightgrey;
	
}
#ths th
{
font-weight:bold;color:#606060 ;
}

</style>



	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">

	<?php include("includes/mainheader.php"); ?>
	
	</div>


<!--  page header   -->
        <div class="navbar navbar-default header-highlight">
            
			
			
			<?php  include("includes/main_header.php");  ?>
			
			
			
        </div>
		
		
		<!--  page header stop   -->
		
		
		<!-- page overall content start here -->
		
        <div class="page-container" style="min-height:567px">
            <div class="page-content">
			
			
			<!-- page sidemenu start here     -->
			
<?php  include("includes/leftsidemenu.php");  ?>

				
				<!--  page sidemenu stop here   -->
				
				
				
				
				
				
                <div class="content-wrapper">
                    <div class="content">
<script src="./supporting/Chart.js"></script>
<script src="./supporting/Chart.StackedBar.js"></script>
<!--<script type="text/javascript" src="/css/assets/js/plugins/visualization/echarts/echarts.js"></script>-->                        






<div class="page-header">
    <div class="row">
       
	   
	   
	   
	   <?php  include("includes/main_header1.php");  ?>
		
		
		
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
	<?php
	if(isset($_GET['edit']))
{
	
	$id_modal=base64_decode($_GET['edit']);
	
	echo"
	<script>
	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal').modal('show');
    });
	
	</script>
	";

?>
	
	
	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
          
          <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Education type</span>
		  <button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <div class="modal-body">
		<br/>
		<?php
		
		 //echo($id_modal." hjh"); 
		$update_tab="education_type";
		$conds="where id='".$id_modal."'";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
			
			<div class="form-group">
      <label for="usr" id="field_label">Education Type:</label>
      <input type="text" class="form-control" value="<?php echo($single['education_name']); ?>"  name="edu_type_upd" placeholder="Education Type" pattern="[a-zA-Z+ ]{3,30}" title="Please enter proper education type name" required>
    <input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />
	</div>
	
	
	
	<div class="form-group">

      <input type="submit" class="edu_btn" name="submit_upd"  value="Update">
    </div>
			
			
			</form>
			
		  
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <?php
  }
  
  ?>
	
	
	
	
	
	
	
	
	
	
<div class="content" style="padding:0px;">

	<div class="col-sm-12" id="divider_label"></div>
	
	
	<?php
	
	
	if(isset($_GET['add_edu']))
	{

?>
	<div id="add_edu_ty">
	
	<div class="col-sm-12" id="edu_type_label">Education Type
	
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;"><a href="add_edu_type.php?view_edu"  style="color:#0099FF;font-weight:bold;">View Reports</a></span>
	</div>
	<div class="col-sm-12" id="b_content" style="background-color:#F8F8F8;">

	
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			<?php
			
			if(isset($_GET['succ']))
			{
				if(base64_decode($_GET['succ'])=="succ")
				{
				?>
			<div class="alert alert-success" id="alert_label_succ">Successfully Inserted. !</div>
				
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
      <label for="usr" id="field_label">Education Type:</label>
      <input type="text" class="form-control" id="usr" name="edu_type" placeholder="Education Type" pattern="[a-zA-Z+ ]{3,30}" title="Please enter proper education type name" required>
    </div>
	
	
	
	<div class="form-group">

      <input type="submit" class="edu_btn" name="submit"  value="Submit">
    </div>
			
			
			</form>
			
			
			
			</div>
			<div class="col-sm-3"></div>
	</div>
	
	</div>
	
	<?php
	}
	if(isset($_GET['view_edu']))
	{
		?>

<div id="view_edu_ty">

<div class="col-sm-2"></div>


<div class="col-sm-8">

<?php
			
			if(isset($_GET['delsucc']))
			{
				if(base64_decode($_GET['delsucc'])=="delsucc")
				{
				?>
				<br/>
			<div class="alert alert-success" id="alert_label_succ">Successfully Deleted. !</div>
				
			<?php
				}
				}
			if(isset($_GET['delnotsucc']))
			{	if(base64_decode($_GET['delnotsucc'])=="delwrong")
				{
				
				?>
								<br/>
			<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
			<?php
				}
				}
			
			?>
			
			
			</div>
			<div class="col-sm-2"></div>

	<div class="col-sm-12" id="edu_type_label">Education Type Reports
	
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;"><a href="add_edu_type.php?add_edu" style="color:#0099FF;font-weight:bold;">Add Education Type</a></span>
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >

	
			
			<div class="table-responsive">
			<form action="add_edu_type.php" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th>S No</th>
        <th>Education Type Name</th>
        <th>Action</th>
      </tr>
		<?php
		
		$tab_name="education_type";
		$whrs="";
		$ords="";
		
		
		$sele=$config_class->select_query($tab_name,$whrs,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
			?>
			 <tr id="rg">
        <td>
		<input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/>
		</td>
        <td>
		
<?php  echo($inc); ?>
		</td>
		<td>
		
		<?php echo($row['education_name']); ?>
		
		</td>
		
        <td>
		<a href="add_edu_type.php?view_edu&edit=<?php echo(base64_encode($row['id'])) ?>" onclick="javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> 
		<a href="add_edu_type.php?view_edu&remove=<?php echo(base64_encode($row['id'])) ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove">
		<span class="glyphicon glyphicon-trash"></span></a>
		
		</td>
      </tr>
			
			<?php
		}
		
		?>
  <tr>
  
  <td colspan="4">
  
  <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
  
  </td>
  </tr>

   
  </table>
 </form>
			
			
			
	</div>
	</div>
	</div>
	<?php
	}
	?>
	
	
	
</div>



	<div style="border:0px solid red;margin-top:40px;">

	
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
<?php

if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="education_type";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where id='".$item."'";
	
		$dels=$config_class->deleterecord($table,$wher);
		if($dels)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		window.location.href='add_edu_type.php?view_edu&delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='add_edu_type.php?view_edu&delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="education_type";
	$wher="where id='".$datas."'";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		window.location.href='add_edu_type.php?view_edu&delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='add_edu_type.php?view_edu&delnotsucc=".$failde."';
		</script>";
		exit;
	}
}
if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$eduname=$_POST['edu_type_upd'];
	$table="education_type";
	$columns="education_name='".$eduname."'";
	$column_values="where id='".$id."'";
	
	
	$updatedata=$config_class->updaterecord($table,$columns,$column_values);
	if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
		window.location.href='add_edu_type.php?view_edu';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Plea try again later.!');
		window.location.href='add_edu_type.phpview_edu';
		</script>";
		exit;
	}
}


?>

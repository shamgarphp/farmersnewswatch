<?php
include("config/dbconnection.php");

include("config/dbconfig.php");

require_once("pagination_function.php");

$config_class = new Dbcon;

$config_class->is_session();



if(isset($_POST['submit']))
{
	$name=$_POST['un_type'];
	//$I_crse_reg=$_POST['brc_regu'];
	$I_crstype=$_POST['brn_crstype'];
	
	$table="admin_branch";
	/*Unique Entry*/
	$conds="where admin_branch_name='".$name."' and  course_name='".$I_crstype."' ";
	$testa=$config_class->getsinglerecord($table,$conds);
	
	if($testa)
	{
		echo"<script>
	alert('Course Type and Branch Should be unique..');
	window.location.href='admin_mgmt_branches.php';
	</script>";
	}
	else
	{
	/*End Unique Entry*/
	
	$columns="admin_branch_name,course_name";
	//$sevar=$_SESSION['management'];
	$column_values="'".$name."','".$I_crstype."'";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	if($result)
	{
		echo"<script>
	alert('Successfully Inserted');
	window.location.href='admin_mgmt_branches.php';
	</script>";
	exit;
	}
	else
	{
			echo"<script>
	alert('Unable to Process Please Try again..');
	window.location.href='admin_mgmt_course.php';
	</script>";
	exit;
	}
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - College Library</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />

<link rel="stylesheet" href="css/user.css" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">

	<?php require_once("includes/mainheader.php"); ?>
	
	</div>


<!--  page header   -->
        <div class="navbar navbar-default header-highlight" style="background-color:#E0E0E0;">
            
			
			
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









<!-- header -->

<!-- body content  -->

<div class="content" style="padding-top:20px;">
<script language="javascript">
			
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
	
	<!-----------Update Popup--------->
	
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

    <!-----------Update Popup--------->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;"> 
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Branch Name</span>
	    <button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <div class="modal-body">
		<br/>
		<?php
		
		$update_tab="admin_branch";
		$conds="where sno='".$id_modal."' ";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          
		  
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
   
	    
				
		<div class="form-group">
        <label for="usr" id="field_label">Course:</label>
            <br>
            <?php 
      $ghhsa123=$single['course_name'];
  // echo $single['course_name'];
         $ghhsa123=$single['course_name'];
   $query_s1=mysql_query("select * from  admin_course where  sno='".$ghhsa123."' ");
    while($rg=mysql_fetch_array($query_s1))
				{
        
        //   echo($rg['course_name']);  
        $bag=$rg['adm_course'];
    }
      ?>
       
            <span style="color:#235a81;font-weight:bold; ">
          
              <input type="hidden" name="up_f2" value="<?php  echo $ghhsa123   ?>" />
                <?php echo $bag; ?>
     </span>
       
	    </div>		
			
		<div class="form-group">
        <label for="usr" id="field_label">Branch Name:</label>
        <input type="text" class="form-control" value="<?php echo($single['admin_branch_name']); ?>"  name="edu_type_upd" placeholder="Enter branch name" pattern="[A-Z ]{1,10}" title="Please enter branch name CAPCHA [EX:CSE,EEE,ECE..]" required>
		
		<input type="hidden" name="up_f3" value="<?php echo($single['admin_branch_name']); ?>" />	   
        <input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />
	    </div>
	
	    <div class="modal-footer" style="padding:10px 0px 0px 0px;">
        <center> <input type="submit"  name="submit_upd" class="btn btn-success" value="Update" style="width:100px;">
		&emsp;<button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
        </center>
        </div>
	    </form>
        </div>
        
        </div>
      
    </div>
    </div>
  
    <?php
    }
  
    ?>
    <!-------------End Update Popup-------------->
  
  
    
  
  
  
    <div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">
	
	    <!-------Add Branch--------->
		<div id="add_edu_ty">
		<div class="col-sm-12" id="edu_type_label" >Branch Name</div>
		<div class="col-sm-12" style="padding-bottom:20px;border:1px solid lightgrey;border-top:1px solid lightgrey;background-color:#F8F8F8;">	
		<div class="col-sm-3"></div>
		<div class="col-sm-6" id="fields_edu">
			
		<!------ Insert Alert -------->
        <div class="col-sm-12" style="margin-top:-20px;padding:0px;border:0px solid red;height:40px;">
	 
	    <?php
	 
	 	if(isset($_GET['succ']))
		{
			if(base64_decode($_GET['succ'])=="succ")
			{
			?>
			
	        <div id="alert_label_succ" class="alert alert-success alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>

		    <!--<div class="alert alert-success" id="alert_label_succ">Successfully Inserted. !</div>-->				
		    <?php
		    }
		}
		if(isset($_GET['notsucc']))
		{	
		    if(base64_decode($_GET['notsucc'])=="wrong")
		    {				
			?>
			
			<div id="alert_label_fail" class="alert alert-danger alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>
			
			<!--<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>-->
			<?php
			}
		}
		if(isset($_GET['uni']))
		{
			$nm=base64_decode($_GET['uni']);
					
		    ?>
			
			<div id="alert_label_fail_second" class="alert alert-warning alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg">Branch Name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] Already exist in database!</span>
            </div>
			
			<!--<div class="alert alert-warning" style="display:none;" id="alert_label_fails">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</div>-->
			<?php
				
		}
		
		
		
		
		// Delete Alert                
		
		if(isset($_GET['delsucc']))
		{
			if(base64_decode($_GET['delsucc'])=="delsucc")
			{
			?>
			
					
			<div id="alert_label_succdell" class="alert alert-success alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg"></span>
            </div>
				
			<?php
			}
		}
		if(isset($_GET['delnotsucc']))
		{	
	        if(base64_decode($_GET['delnotsucc'])=="delwrong")
			{	
			?>
			<div id="alert_label_faildel" class="alert alert-danger alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg"></span>
            </div>
			
			
			<?php
			}
		}
		if(isset($_GET['unii']))
		{
			$nm=base64_decode($_GET['unii']);
						
			?>
			<div id="alert_label_fail_upd" class="alert alert-warning alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg">Branch Name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
	<!------ End Insert Alert -------->			
	
				
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">			

				
		<div class="form-group">
        <label for="usr" id="field_label">Course Type:</label>
        <select class="form-control" id="uni_course" name="brn_crstype" title="Please Select Course Type"  required> 
            <option value="">--Select Course Type--</option>

	<?php  $query_s1=mysql_query("select * from  admin_course  ");
    while($rg=mysql_fetch_array($query_s1))
				{
        
        //   echo($rg['course_name']);  
       
    ?>

	   <option value="<?php echo($rg['sno']);  ?>"> <?php echo($rg['adm_course']); ?></option>
	   <?php } ?>
	    </select>	
	    </div>		
		
		<div class="form-group">
        <label for="usr" id="field_label">Branch Name:</label>
        <input type="text" class="form-control" id="usr" name="un_type" placeholder="Enter branch name(Only Capcha)" pattern="[A-Z ]{1,10}" title="Please enter branch name CAPCHA [EX:CSE,EEE,ECE....]" required>
        </div>
	    <div class="form-group">
        <input type="submit" class="btn btn-success" name="submit"  value="SUBMIT" style="width:100px;">
        </div>
		</form>
		</div>
		<div class="col-sm-3"></div>
		</div>
		</div>
		<!-------End Add Branch--------->
		
		<?php
		
		
		
		$table_export_data="";
	    $table_export_data_final="";
		
		$table_export_data.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	    $table_export_data_final.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	
		
        $table_export_data.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
 
        <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	    <th style='text-align:center;'><input type='checkbox' id='selectall'/></th>
        <th style='text-align:center;'><b>S NO</b></th>
		
			
        <th style='text-align:center;'><b>Course</b></th>
        <th style='text-align:center;'><b>Branch Name</b></th>
        <th style='text-align:center;'><b>Action</b></th>
        </tr>";
		
		$table_export_data_final.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
 
        <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	   
        <th><b>S NO</b></th>
		
			
        <th><b>Course</b></th>
        <th><b>Branch Name</b></th>
      
        </tr>";
		
		//Paggig Code1
	    $num_rec_per_page=25;
	
	    if (isset($_GET["page"])) 
	    { 
        $page  = $_GET["page"]; 
	    } 
	    else 
	    { 
        $page=1; 
	    } 
    
	    $start_from = ($page-1) * $num_rec_per_page; 
		
		//Paggig Code1
		
		
		error_reporting(0);
		$tab_name="admin_branch";
		//$whrs=" where management_id='".$_SESSION['management']."'";
		$ords=" order by sno desc LIMIT $start_from,$num_rec_per_page";
		
		$sele=$config_class->select_query($tab_name,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			
			
			$inc++;
		
		
		
		$table_export_data.="<tr id='rg' style='text-align:center;'>
        <td><input type='checkbox' class='case' name='case[]' value='".$row['sno']."'/></td>
        <td>".$inc."</td>
		
		";
		
		   	
		$table_export_data.="
		<td>";
		 
		        $ghhs=$row['course_name'];
				$query_s=mysql_query("select * from admin_course where sno='".$ghhs."' ");
				if($rg=mysql_fetch_array($query_s))
				{
					//echo($rg['course_name']);
					$table_export_data.=" ".$rg['adm_course']." ";
				} 
	
		
		$table_export_data.="</td>
		<td>".$row['admin_branch_name']."</td>
        <td>
		<a href='admin_mgmt_branches.php?edit=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}' title='Edit'><span class='glyphicon glyphicon-edit'></span></a> 
		<a href='admin_mgmt_branches.php?remove=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'>
		<span class='glyphicon glyphicon-trash'></span></a>	
		</td>
        </tr>";
		
		
		
		$table_export_data_final.="<tr id='rg' style='text-align:center;'>
       
        <td>".$inc."</td>
		
		";
		
		    
						
		$table_export_data_final.="
		<td>";
		 
		       $ghhs=$row['course_name'];
				$query_s=mysql_query("select * from admin_course where sno='".$ghhs."' ");
				if($rg=mysql_fetch_array($query_s))
				{
					//echo($rg['course_name']);
					$table_export_data_final.=" ".$rg['adm_course']." ";
				}  
	
		
		$table_export_data_final.="</td>
		<td>".$row['branch_name']."</td>
		
        </tr>";
		
		
		}
		if($inc=="0")
		{
		?>
		<tr>
		<td colspan="6" style="text-align:center;color:red;">No Results</td>
		</tr>
		<?php
		}
		
		$table_export_data.="</table>
		</div>";
		
		 $table_export_data_final.="</table>
		</div>";
		
		$_SESSION['data']= $table_export_data_final;
		
		?>
		
		<!---------View Reports----------->
		<!--<div class="col-sm-12" id="edu_type_label"><b>View Reports</b></div>-->
			
		<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>View Reports</b></div>
	    <div class="col-sm-7" style="border:0px solid blue;"></div>
	
	    <!--<div class="col-sm-3"  style="text-align:right;border:0px solid blue;margin-top:15px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
		<b><a href="exports.php?type=excel&filename=Branch" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=word&filename=Branch" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=pdf&filename=Branch" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	    </div>-->
		
		
		
		
		<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;" >
		
		<div class="table-responsive">
		<form action="admin_mgmt_branches.php" method="post">
		
		<?php
	
		echo($table_export_data);
	
	    ?>
		
		
		<table class="table table-hover"  id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
 
        
        <tr>
        <td colspan="6">  
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
        </td>
        </tr>

		<!------------- Pagination Code 3 ---------->
		<td colspan="6" style="text-align:center;">   
		
		<?php 
	    //Paggig Code
	
        $sql = "SELECT * FROM admin_branch  "; 
        $rs_result =mysql_query($sql); //run the query
        $total_records = mysql_num_rows($rs_result);  //count number of records
	    //echo $total_records;	
        $total_pages = ceil($total_records / $num_rec_per_page); 
 
        echo(pagination($num_rec_per_page,$page,$total_records));
          
	    ?>
		
		
		
		</td>
		<!------------- End Pagination Code 3 ---------->	
		
		
        </table>
        </form>
</div>


<!-- body content end -->
<div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
 <?php   require_once("includes/footer.php"); ?>
</div>         
                </div>
            </div>
        </div>
            </body></html>
	
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script>
$(document).ready(function(){
	var id = 0;
	$("#add_more").click(function(){
		var showId = ++id;
		document.getElementById('vl').value=showId;
		if(showId <=100)
		{
			$(".input-files").append(' <input type="file"   class="form-control" name="materialUpload'+showId+'" style="margin-top:30px">');
		}
	});
});
</script>

<?php

if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="admin_branch";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where sno='".$item."' ";
	
		$dels=$config_class->deleterecord($table,$wher);
		if($dels)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
		alert('Successfully deleted');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
	else
	{
		
		echo"<script>
            alert('unable to Process');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="admin_branch";
	$wher="where sno='".$datas."' ";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	
		echo"<script>
		alert('Successfully deleted');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
	else
	{
		
		echo"<script>
            alert('unable to Process');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
}
if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$das1=$_POST['up_f1'];
    $das2=$_POST['up_f2'];
   
   
	$unname=$_POST['edu_type_upd'];
	//$ubrcregue=$_POST['u_brc_regu'];
	//$ucrstype=$_POST['u_brn_crstype'];
	
	
	$table="admin_branch";
	//$columns="branch_name='".$unname."',regulation_name='".$ubrcregue."',course_name='".$ucrstype."'";
	
	$columns="admin_branch_name='".$unname."'";	
	$column_values="where sno='".$id."' ";
	
	$condsa=" where admin_branch_name='".$unname."' ";
	
	$testa11=$config_class->getsinglerecord($table,$condsa);
	
	
	if($testa11)
	{
		
	echo"<script>
		alert('Branch name should be unique.!');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
	else
	{
		$updatedata=$config_class->updaterecord($table,$columns,$column_values);
	if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='admin_mgmt_branches.php';
		</script>";
		exit;
	}
	
	
	}
	
	
}


?>

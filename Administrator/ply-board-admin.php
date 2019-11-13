<?php
include("config/dbconnection.php");
require_once("pagination_function.php");
include("config/dbconfig.php");
$config_class = new Dbcon;

$config_class->is_session();


if(isset($_POST['submit']))
{
	
	$name=$_POST['un_type'];
	
	$table="ply_admin_board";
	/*Unique Entry*/
	$conds=" where boardtype='".$name."' ";
	$testa=$config_class->getsinglerecord($table,$conds);
	
	if($testa)
	{
		$un=base64_encode($name);
		echo"<script>
		window.location.href='ply-board-admin.php?uni=".$un."';
		</script>";
		exit;
	}
	else
	{
	/*End Unique Entry*/	
	$columns="created_date,created_time,created_month,created_year,boardtype";
	$date=date("Y-m-d");
	$time=date("h:i:s");
	$month=date('m');
	$year=date('y');
        
	$column_values="'".$date."','".$time."','".$month."','".$year."','".$name."' ";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	if($result)
	{
		$suc=base64_encode("succ");
		echo"<script>
        alert('successfully inserted');
		window.location.href='ply-board-admin.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
         alert('fail Please Try Again ');
		window.location.href='ply-board-admin.php?notsucc=".$fail."';
		</script>";
		exit;
	}
		
	}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Medium Type</title>
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
text-align:center;

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

    <div class="page-header">
    <div class="row">
 	   
	
		
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
	
    <!---------- Update Popup ----------->
	
<?php

if(isset($_GET['edit']))
{
	
	$id_modal=base64_decode($_GET['edit']);
	
	echo"
	<script>
	
		$(document).ready(function(){
			//alert($id_modal);
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
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Medium Name</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	    <div class="modal-body" style="height:150px;">
		<br/>
		<?php
		
		$update_tab="ply_admin_board";
		$conds="where sno='".$id_modal."' ";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          
		<div class="row">
		<div class="col-sm-2">  </div>
		<div class="col-sm-8">  
		<div class="form-group">
        <label for="usr" id="field_label">Medium Name:</label>
        <input type="text" class="form-control" value="<?php echo($single['boardtype']); ?>"  name="edu_type_upd" placeholder="Enter medium name" pattern="[a-zA-Z+ ]{3,30}" title="Please enter proper medium type" required>
        
		<input type="hidden" name="up" value="<?php echo($single['boardtype']); ?>" />
	    <input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />
	    </div>
		</div>
	    <div class="col-sm-2">  </div>		
	    </div>
	    
		</div>
	    <div class="modal-footer" style="padding:10px;">
        <center> <input type="submit"  name="submit_upd" class="btn btn-success" value="Update" style="width:100px;">
		&emsp;<button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
        </center>
        </div>
		</form>
			  
       
        
		
        </div>
      
    </div>
    </div>
  
    <?php
    }
  
    ?>
    <!---------End Update Popup------------>
    
	
	
	
	
	
	
	
    <div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">
	
	    <!--------Add Medium Type--------->
		<div id="add_edu_ty">
		<div class="col-sm-12" id="edu_type_label" >Board Type
		</div>
		<div class="col-sm-12" style="padding-bottom:20px;border:1px solid lightgrey;border-top:1px solid lightgrey;background-color:#F8F8F8;">	<div class="col-sm-3"></div>
	    <div class="col-sm-6"  id="fields_edu">
			
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
            <span class="alert-msg">Medium Type [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</span>
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
            <span class="alert-msg">Medium Type [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
	<!------ End Insert Alert -------->		
		
		
		
		
		
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
		<div class="form-group">
        <label for="usr" id="field_label">Board Type    :</label>
        <input type="text" class="form-control" id="usr" name="un_type" placeholder="Enter Board Type" pattern="[a-zA-Z+ ]{3,30}" title="Please enter proper Medium Name" required>
        </div>
	    
		<div class="form-group">
        <input type="submit" class="btn btn-success" name="submit"  value="SUBMIT" style="width:100px;">
        </div>
		</form>
		</div>
		<div class="col-sm-3"></div>
		</div>
		</div>
		<!-------- End Add Medium Type--------->
		 
		
		
		
		<?php
		
		
		
		$table_export_data="";
	    $table_export_data_final="";
		
		$table_export_data.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	    $table_export_data_final.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	
		
		$table_export_data.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
  
		    <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	        <th><input type='checkbox' id='selectall'/></th>
            <th><b>S NO</b></th>		  
            <th><b>Board Type</b></th>
            <th><b>Action</b></th>
            </tr>";
			
		$table_export_data_final.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
  
		    <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	      
            <th><b>S NO</b></th>		  
            <th><b>Medium Name</b></th>
         
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
		$tab_name=" ply_admin_board";
		$whrs="";
		$ords=" order by sno desc LIMIT $start_from,$num_rec_per_page";
		
		$sele=$config_class->select_query($tab_name,$whrs,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
		
		
		$table_export_data.="<tr id='rg' style='text-align:center;'>
        <td><input type='checkbox' class='case' name='case[]' value='".$row['sno']."' /></td>
        <td>".$inc."</td>
	
		<td>".$row['boardtype']."</td>
        <td>
		<a href='ply-board-admin.php?edit=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}' title='Edit'><span class='glyphicon glyphicon-edit'></span></a> 
		<a href='ply-board-admin.php?remove=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'>
		<span class='glyphicon glyphicon-trash'></span></a>	
		</td>
        </tr>";
		
		$table_export_data_final.="<tr id='rg' style='text-align:center;'>
       
        <td>".$inc."</td>
	
		<td>".$row['boardtype']."</td>
        
        </tr>";
		
		
		}
		
		
		if($inc=="0")
		{
		
		$table_export_data.="<tr>
		<td colspan='4' style='text-align:center;color:red;'>No Results</td>
		</tr>";
		}
		
		
		$table_export_data.="</table>
		</div>";
		
		 $table_export_data_final.="</table>
		</div>";
		
		$_SESSION['data']= $table_export_data_final;
		
		
		?>
		    
		<!---------View Reports--------------->	
		
		<!--<div class="col-sm-12" id="edu_type_label"><b> View Reports</b></div>-->	
		<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>View Reports</b></div>
	    <div class="col-sm-7" style="border:0px solid blue;"></div>
	
	    <div class="col-sm-3"  style="text-align:right;border:0px solid blue;margin-top:15px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
		<b><a href="exports.php?type=excel&filename=Medium Name" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=word&filename=Medium Name" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=pdf&filename=Medium Name" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	    </div>
		
		
		
		
		
		<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;margin-bottom:10px;" >
	   

	    <div class="table-responsive">
		<form action="ply-board-admin.php" method="post">
	    
		<?php
	
		echo($table_export_data);
	
	    ?>
		
		<table class="table table-hover"  id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
  
           
	    <tr> 
        <td colspan="4" >
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
        </td>
       	
		</tr>
		
		<!------------- Pagination Code 3 ---------->
		<td colspan="4" style="text-align:center;">   
		
		<?php 
	    //Paggig Code
	
        $sql = "SELECT * FROM  ply_admin_board  "; 
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
	    </div>
	    <!----------End View Reports------------>
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


<?php

if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="ply_admin_board";
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
	$sucd=base64_encode("delsucc");
		echo"<script>
          alert('Successfully Deleted');
		window.location.href='ply-board-admin.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
         alert('Fail To Deleted');
		window.location.href='ply-board-admin.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="ply_admin_board";
	$wher="where sno='".$datas."' ";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
        alert('Successfully Deleted');
		window.location.href='ply-board-admin.php?view_edu&delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
        alert('Fail To Deleted');
		window.location.href='ply-board-admin.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}
if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$das=$_POST['up'];
	$unname=$_POST['edu_type_upd'];
	$table="ply_admin_board";
	$columns="boardtype='".$unname."'";
	$column_values="where sno='".$id."' ";
	
	$condsa1=" where boardtype='".$unname."' ";
	
	$testa11=$config_class->getsinglerecord($table,$condsa1);
		
	if($testa11)
	{
		
		$un=base64_encode($unname);
		echo"<script>
		window.location.href='ply-board-admin.php?unii=".$un."';
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
		window.location.href='ply-board-admin.php';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='ply-board-admin.php';
		</script>";
		exit;
	}
		
	
	}
	

}


?>
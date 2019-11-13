<?php

include("config/dbconnection.php");
include("config/dbconfig.php");
require_once("pagination_function.php");

$config_class = new Dbcon;
$config_class->is_session();

if(isset($_POST['submit']))
{
	$name=$_POST['un_type'];
	$ac_reg=$_POST['ac_regu'];
	
	$table="ply_admin_class_ply";
	/*Unique Entry*/
	$conds="where Class='".$name."' and boardtype='".$ac_reg."'";
	$testa=$config_class->getsinglerecord($table,$conds);
	
	if($testa)
	{
		$un=base64_encode($name);
		echo"<script>
		window.location.href='ply-class-admin.php?uni=".$un."';
		</script>";
		exit;
	}
	else
	{
	/*End Unique Entry*/	
		
	$columns="created_date,created_time,created_month,created_year,boardtype,Class";
	$date=date("Y-m-d");
	$time=date("h:i:s");
	$month=date('m');
	$year=date('y');
        
	$column_values="'".$date."','".$time."','".$month."','".$year."','".$ac_reg."','".$name."' ";
	$result=$config_class->insertrecord($table,$columns,$column_values);
        
	if($result)
	{
		$suc=base64_encode("succ");
		echo"<script>
        alert('Successfully inserted');
		window.location.href='ply-class-admin.php';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
        alert('Failed Insertion Try Again');
		window.location.href='ply-class-admin.php';
		</script>";
		exit;
	}
		
	}
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Academic Year</title>
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
font-weight:bold;color:#606060;
text-align:center;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body class="pace-done" >
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
        <?php
    if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$das=$_POST['up_f1'];
    $das33=$_POST['up'];
	$unname=$_POST['edu_type_upd'];
       
   
	//$u_reg=$_POST['ac_u_regu'];
	
	$table="ply_admin_class_ply";
	//$columns="ac_year='".$unname."',regulation_name='".$u_reg."'";
	//$column_values="where sno='".$id."' and  management_id='".$_SESSION['management']."'";
	
	$columns="Class='".$unname."'";
	$column_values="where sno='".$id."'";
	
	
	
	$condsa1=" where Class='".$unname."' and boardtype='".$das."'";
   
	$testa11=$config_class->getsinglerecord($table,$condsa1);
	if($testa11)
	{
			$un=base64_encode($unname);
		echo"<script>
        
	window.location.href='ply-class-admin.php?unii=".$un."';
		</script>";
		exit;
	}
	else
	{
	$updatedata=$config_class->updaterecord($table,$columns,$column_values);
	if($updatedata)
	{
		
		$un=base64_encode($unname);
		echo"<script>
        alert('successfully Updated');
	window.location.href='ply-class-admin.php';
		</script>";
exit;
	}
	else
	{
		
		//echo("as".$query." ".$testaq);
		
	$updatedata=$config_class->updaterecord($table,$columns,$column_values);
	if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
	window.location.href='ply-class-admin.php';
		</script>";
	exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='ply-class-admin.php';
		</script>";
exit;
	}
	}
}
	
}?>
	<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">

	    <div id="add_edu_ty">
		<div class="col-sm-3" id="edu_type_label" >Class </div>
		<div class="col-sm-9" >    </div>
		
		<!------ Enter Academic Year ------->
		<div class="col-sm-12" style="padding-bottom:20px;border:1px solid lightgrey;border-top:1px solid lightgrey;background-color:#F8F8F8;">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" id="fields_edu" >
		
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
            <span class="alert-msg">Subjects [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] Already exist in database!</span>
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
            <span class="alert-msg">Subject[ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
	<!------ End Insert Alert -------->	
		
		
		<!----------Add AC Year--------->
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
							
		<div class="form-group">
        <label for="usr" id="field_label">Board:</label>
        <select class="form-control" id="usr" name="ac_regu" title="Please Select Regulation" required > 
        <option value="">-- Select Class --</option>
	
        <?php                                                                  
        
	    $tab_name="ply_admin_board";
	    $whrs="";
	    $ords="ORDER By boardtype ASC";
	
	    $ns=$config_class->select_query($tab_name,$whrs,$ords);

        while($re=mysql_fetch_array($ns))
           {
            ?>
            <option value="<?php echo($re['sno']); ?>"><?php echo($re['boardtype']);?>    </option>
                                                                            
           <?php
            }
        ?>
	  
	    </select>	
	    </div>
			
		<div class="form-group">
        <label for="usr" id="field_label">Class:</label>
        <input type="text" class="form-control" id="usr" name="un_type" placeholder="Enter Class" pattern="[A-Za-z0-9+ ]{1,40}" title="Please enter proper Class" required>
        </div>
	    <div class="form-group">
        <input type="submit" class="btn btn-success" name="submit"  value="SUBMIT" style="width:100px;">
        </div>
		</form>
		</div>
			
		<div class="col-sm-3"></div>
		</div>
		</div>
		<!----------End Add AC Year--------->
		
		
		
		<?php
		
		
		
		$table_export_data="";
	    $table_export_data_final="";
		
		$table_export_data.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	    $table_export_data_final.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	
		
        $table_export_data.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
 
            <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	        <th><input type='checkbox' id='selectall'/></th>
            <th><b>S NO</b></th>
		  
		    <th><b>Class</b></th>
            <th><b>Subject</b></th>
            <th><b>Action</b></th>
            </tr>";
		
		$table_export_data_final.="<table class='table table-hover'  id='aexample' style='border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;'>
 
            <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	      
            <th><b>S NO</b></th>
		  
		    <th><b>Board</b></th>
            <th><b>Class</b></th>
           
            </tr>";
		
		//Paggig Code1
	    $num_rec_per_page=5;
	
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
		$tab_name="ply_admin_class_ply";
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

		<td>";
		
		$ghh=$row['boardtype'];
				$query_s=mysql_query("select * from ply_admin_board where sno='".$ghh."' ");
				if($rg=mysql_fetch_array($query_s))
				{
					$table_export_data.=" ".$rg['boardtype']." ";
				} 
		       
		$table_export_data.="</td>
		<td>".$row['Class']."</td>
        <td>
		<a href='ply-class-admin.php?edit=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}' title='Edit'><span class='glyphicon glyphicon-edit'></span></a> 
		<a href='ply-class-admin.php?remove=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'>
		<span class='glyphicon glyphicon-trash'></span></a>
		</td>
        </tr>";
		
		
		$table_export_data_final.="<tr id='rg' style='text-align:center;'>
       
        <td>".$inc."</td>

		<td>";
		
		$ghh=$row['class'];
				$query_s=mysql_query("select * from ply_admin_board where id='".$ghh."' ORDER By class ASC");
				if($rg=mysql_fetch_array($query_s))
				{
					$table_export_data_final.=" ".$rg['class']." ";
				}
		
		$table_export_data_final.="</td>
		<td>".$row['Class']."</td>
        
        </tr>";
		
		
		}	
		
		
		if($inc=="0")
		{
		
		$table_export_data.="<tr>
		<td colspan='6' style='text-align:center;color:red;'>No Results</td>
		</tr>";
		}
		
		
		$table_export_data.="</table>
		</div>";
		
		 $table_export_data_final.="</table>
		</div>";
		
		$_SESSION['data']= $table_export_data_final;
		
		
		?>
		
		<!----------View Reports------------>
		<!--<div class="col-sm-12" id="edu_type_label"><b>View Reports</b></div>-->
		
		<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>View Reports</b></div>
	    <div class="col-sm-7" style="border:0px solid blue;"></div>
	
	    <div class="col-sm-3"  style="text-align:right;border:0px solid blue;margin-top:15px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
		<b><a href="exports.php?type=excel&filename=Academic Year" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=word&filename=Academic Year" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b> &nbsp;
	    <b><a href="exports.php?type=pdf&filename=Academic Year" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	    </div>
		
		
		
		
		<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;" >
		
		<div class="table-responsive">
		<form action="ply-class-admin.php" method="post">
		
		
		<?php
	
		echo($table_export_data);
	
	    ?>
		
		
		<table class="table table-hover"  id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
 
           
		
		
        <tr>
        <td colspan="5">
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" /> 
        </td>
        
		</tr>
		<!------------- Pagination Code 3 ---------->
		<td colspan="5" style="text-align:center;">   
		
		<?php 
	    //Paggig Code
	
        $sql = "SELECT * FROM add_subjects "; 
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
	    <!---------End View Reports--------->
	
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
	$table="ply_admin_class_ply";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where sno='".$item."'";
	
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
          alert('successfully deleted');
		window.location.href='ply-class-admin.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
         alert('Fail To  deleted Try Again');
		window.location.href='ply-class-admin.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="ply_admin_class_ply";
	$wher="where sno='".$datas."'";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
        alert('successfully deleted');
		window.location.href='ply-class-admin.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
        alert('Fail To  deleted Try Again');
		window.location.href='ply-class-admin.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


?>


	
	 <!----------Update Popup----------->
	
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
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Class </span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
		<div class="modal-body" style="height:250px;">
		<br/>
		<?php
		 
		$update_tab="ply_admin_class_ply";
		$conds="where sno='".$id_modal."'";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          
		<div class="row">	
	    <div class="col-sm-1">  </div>	
		<div class="col-sm-10">	
		<div class="form-group">
        <label for="usr" id="field_label">Board:</label><br>
        <input type="hidden" class="form-control" name="ssh" value="<?php 
      $ghhsa12=$single['boardtype'];
   $query_s=mysql_query("select * from  ply_admin_board where  sno='".$ghhsa12."' ");
    while($rg=mysql_fetch_array($query_s))
				{
    
                      ?>"   placeholder="Enter Board name" pattern="[A-Za-z0-9+ ]{1,30}"  title="Please enter proper class name[EX:BTECH,MTECH...]" required>
            <span style="color:#235a81;font-weight:bold; ">
            <?php
        $ssh12=$rg['boardtype'];
              echo($rg['boardtype']);  ?>
              <input type="hidden" name="up_f1" value="<?php  echo $ghhsa12;  ?>" />
       <?php     }
      ?></span>
	    </div>
		</div>
	    <div class="col-sm-1">  </div>
		</div>
		
		
		<div class="row">	
	    <div class="col-sm-1">  </div>	
		<div class="col-sm-10">	  
		<div class="form-group">
        <label for="usr" id="field_label">Class:</label>
        <input type="text" class="form-control" value="<?php echo($single['Class']); ?>"  name="edu_type_upd" pattern="[A-Za-z0-9+ ]{1,40}" title="Please enter proper subject name [EX:Telugu]" required />
        <input type="hidden" name="up" value="<?php echo($single['Class']); ?>" />
	    <input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />
	    </div>
        </div>
	    <div class="col-sm-1">  </div>
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
	<!------------End Update Popup-------------->
	
	
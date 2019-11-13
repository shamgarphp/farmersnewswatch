<?php
include("config/dbconnection.php");

include("config/dbconfig.php");

require_once("pagination_function.php");

$config_class = new Dbcon;

$config_class->is_session();



if(isset($_POST['submit']))
{
	
	$name=$_POST['txt_board'];
	
	$table="admin_tbl_board";	
	$conds="where BoardName='".$name."'";
	$testa=$config_class->getsinglerecord($table,$conds);
	
	if($testa)
	{
		$un=base64_encode($name);
		echo"<script>
		window.location.href='admin_board.php?uni=".$un."';
		</script>";
		exit;
	}
	else
	{
		
	$columns="BoardName";
	$sevar=$_SESSION['management'];
	$column_values="'".$name."'";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	
	if($result)
	{
		echo"<script>
		alert('Successfully inserted');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
	else
	{
		echo"<script>
	    alert('Unable to process please try again');
		window.location.href='admin_board.php';
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
	function getcorse(coursetpe) {	

		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
				var  somex1=xmlhttp.responseText; 

//alert(somex1);

document.getElementById("crse_year").innerHTML=somex1;
																
            }
        }
        xmlhttp.open("GET", "admin_branch_dep.php?crseids="+coursetpe, true);
        xmlhttp.send();

				
	}
</script>
	
	<!-----------Update Popup--------->

  <!------------End Update Popup----------->
 
    <div class="content" style="padding:0px;">
    
	
	
		
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
	<!-------------Update Popup------------->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;"> 
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Board</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">	
		
		<div class="modal-body" style="height:150px;">
		<br/>
		<?php
		
		$update_tab="admin_tbl_board";
		$conds="where sno='".$id_modal."' ";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          
		<div class="row">	
	    <div class="col-sm-1">  </div>	
		<div class="col-sm-10">  
		<div class="form-group">
        <label for="usr" id="field_label">Board Name:</label>
        <input type="text" class="form-control" value="<?php echo($single['BoardName']); ?>"  name="board_name_upd" placeholder="Enter board name" pattern="[a-zA-Z+ ]{2,30}" title="Please enter proper Board name" required>
	    <input type="hidden" name="up" value="<?php echo($single['BoardName']); ?>" />
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
    <!-------------End Update Popup--------->

	<div id="add_edu_ty">
	<div class="col-sm-12" id="edu_type_label"><b>Board Type</b></div>
	</div>
	
	<!------ Add Board Type -------->
	<div class="col-sm-12" style="padding-bottom:20px;border:1px solid lightgrey;border-top:1px solid lightgrey;background-color:#F8F8F8;">
	<div class="col-sm-3"></div>
	<div class="col-sm-6" id="fields_edu" style="padding:0px;margin:0px;">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
		

    <!------ Insert Alert -------->
    <div class="col-sm-12" style="margin-top:10px;margin-bottom:5px;padding:0px;border:0px solid red;height:40px;">
	 
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
            <span class="alert-msg">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</span>
            </div>
			
			<!--<div class="alert alert-warning" style="display:none;" id="alert_label_fails">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</div>-->
			<?php
				
		}
		
		
		
		
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
            <span class="alert-msg">Board  name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
	 <!------ End Insert Alert -------->
		
			
	<div class="form-group">
    <label for="usr" id="field_label">Board Name:</label>
    <input type="text" class="form-control" id="board_name" name="txt_board" placeholder="Enter Board Name" pattern="[a-zA-Z ]{2,80}" title="Please enter Board name" required>
    </div>
	
	<div class="form-group">
    <input type="submit" class="btn btn-success" name="submit"  value="SUBMIT" style="width:100px;">
    </div>
    </form>
    </div>
	<div class="col-sm-3"></div>
    </div>
	
	<!------ End Add Board Type-------->
	
	
	
	<!-------View Reports----------->
    <?php
	
	
	$table_export_data="";
	$table_export_data_final="";
	
	
	
	
	$table_export_data.="
	<table class='table table-hover' style='border:1px solid lightgrey;'>
 
        <tr id='ths' style='background-color:lightgray;'>
	    <th style='text-align:center'><input type='checkbox' id='selectall'/></th>
        <th style='text-align:center'>SNO</th>
        <th style='text-align:center'>Board Name</th>
        <th style='text-align:center'>Action</th>
        </tr>";
		
		
		$table_export_data_final.="
	<table class='table table-hover' style='border:1px solid lightgrey;'>
 
        <tr id='ths' style='background-color:lightgray;'>
        <th style='text-align:center'>SNO</th>
        <th style='text-align:center'>Board Name</th>
        
        </tr>";

		error_reporting(0);
		
		// Pagination 1
		
		$num_rec_per_page=25;
	
	    if(isset($_GET["page"])) 
	    { 
        $page  = $_GET["page"]; 
	    } 
	    else 
	    { 
        $page=1; 
	    } 
    
	    $start_from = ($page-1) * $num_rec_per_page; 
		
		// End Pagination 1
		
		$tab_name="admin_tbl_board";
		//$whrs="where ManagementCode='".$_SESSION['management']."'";
		$ords=" order by sno desc LIMIT $start_from, $num_rec_per_page";
		
		$sele=$config_class->select_query($tab_name,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
		
		
		$table_export_data.=" <tr id='rg' style='text-align:center;'>
        <td><input type='checkbox' class='case' name='case[]' value='".$row['sno']."'/></td>
        <td>".$inc."</td>
		<td>".$row['BoardName']."</td>
        <td>
		<a href='admin_board.php?view_edu&edit=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}' title='Edit'><span class='glyphicon glyphicon-edit'></span></a> 
		<a href='admin_board.php?view_edu&remove=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'>
		<span class='glyphicon glyphicon-trash'></span></a>
		</td>
        </tr>";
		
		$table_export_data_final.=" <tr id='rg' style='text-align:center;'>
       
        <td>".$inc."</td>
		<td>".$row['BoardName']."</td>
        </tr>";
		
		
		
		}
		if($inc=="0")
		{
		
		$table_export_data.="<tr>
		<td colspan='4' style='text-align:center;color:red;'>No Results</td>
		</tr>";
		
		}
		
  
        
    $table_export_data.="</table>";
	$table_export_data_final.="</table>";
	
	$_SESSION['data']= $table_export_data_final;
	?>
	
	
	
	
	
	<!----------- View Reports ----------->
	
	<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>Board Type Reports</b></div>
	<div class="col-sm-7" id="edu_type_label" style="border:0px solid blue;"></div>
	

	
	<!--<div class="col-sm-3" style="text-align:right;border:0px solid blue;margin-top:15px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
	<b><a href="exports.php?type=excel&filename=School_board_type" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	<b><a href="exports.php?type=word&filename=School_board_type" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b>  &nbsp;
	<b><a href="exports.php?type=pdf&filename=School_board_type" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	</div>-->
	
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;margin-bottom:10px;" >
			
	<div class="table-responsive">
	<form action="admin_board.php" method="post">
	
	<?php
	
	echo($table_export_data);
	
	?>
	
	
			<table class="table table-hover" id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
 
        <tr> 
        <td colspan="4">
      <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
        
		</td>
		
		</tr> 
		<tr>
		<!------------- Pagination Code 2 ---------->
		<td colspan="4" style="text-align:center;">   
		
		<?php 
	   $sql = "SELECT * FROM admin_tbl_board  "; 
        $rs_result =mysql_query($sql); //run the query
       
	   $total_records = mysql_num_rows($rs_result);  //count number of records
	
	    //echo $total_records;
	
        $total_pages = ceil($total_records / $num_rec_per_page); 

	  
	    echo(pagination($num_rec_per_page,$page,$total_records));
	  
	    ?>
		 
	
		</td>
		<!------------- End Pagination Code 2 ---------->
		</tr>
        
        </table>
	
	
    </form>
 </div>
	    </div>
	    <!-------End View Reports---------->
		
	</div>
	
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
	$table="admin_tbl_board";
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
		alert('Successfully Deleted.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
	else
	{
	  echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="admin_tbl_board";
	$wher="where sno='".$datas."'";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
		echo"<script>
		alert('Successfully Deleted.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
	else
	{
			echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
}

	
if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$das=$_POST['up'];
	
	$unname=$_POST['board_name_upd'];
	$table="admin_tbl_board";
	$columns="BoardName='".$unname."'";
	$column_values="where sno='".$id."'";
    
	$condsa1="where  BoardName='".$unname."' ";
	
    
	
	
	$testa11=$config_class->getsinglerecord($table,$condsa1);
   
    
    
	
	
	if($testa11)
	{
		
		
		echo"<script>
		alert('Board type should be unique!');
		window.location.href='admin_board.php';
		</script>";
	}
	else
	{
		
		$updatedata=$config_class->updaterecord($table,$columns,$column_values);
	if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='admin_board.php';
		</script>";
		exit;
	}

	
		
		
	}
		
}
	
	 

?>
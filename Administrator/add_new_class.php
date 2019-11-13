<?php

include("config/dbconnection.php");
include("config/dbconfig.php");

require_once("pagination_function.php");

$config_class = new Dbcon;
$config_class->is_session();

if(isset($_POST['submit']))
{
	
	$name=$_POST['un_type'];
		
	$table="add_class";
	
	/*Unique Entry*/
	$conds=" where class='".$name."'";
	
	$testa=$config_class->getsinglerecord($table,$conds);
	if($testa)
	{
		$un=base64_encode($name);
		echo"<script>
		alert('Already Exist in database.!');
		window.location.href='add_new_class.php?uni=".$un."';
		</script>";
		exit;
	}
	else
	{
    
    /*End Unique Entry*/	
	
	$columns="class";
	$sevar=$_SESSION['management'];
	$column_values="'".$name."'";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	if($result)
	{
		$suc=base64_encode("succ");
		echo"<script>
		alert('Successfully Inserted.!');
		window.location.href='add_new_class.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
			alert('unable to process your request. Please try again later.!');
		window.location.href='add_new_class.php?notsucc=".$fail."';
		</script>";
		exit;
	}
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<title>Bslate Education - University Type</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<!--
.alert-top {
	top:0px;
	width:100%;
	display:none;
	text-align: center;
	margin-bottom: 0;
	padding:10px;
}





.navi {
	width: 500px;
	margin: 5px;
	padding:2px 5px;
	border:1px solid #eee;
	}

	.show {
	color: blue;
	margin: 5px 0;
	padding: 3px 5px;
	cursor: pointer;
	font: 15px/19px Arial,Helvetica,sans-serif;
	}
	.show a {
	text-decoration: none;
	}
	.show:hover {
	text-decoration: underline;
	}


	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: #999999;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}

-->


</style>




  <!----------- Pagination SCRIPT --------->

  


<!----------- End Pagination SCRIPT --------->



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
 	   
	<?php  require_once("includes/main_header1.php");  ?>
		
    </div>
    </div>

<!-- header -->

<!-- body content  -->
<SCRIPT language="javascript">
			
			
	function print_data()
{
	//document.getElementById('fd').style.display='none';
	var pa=document.body.innerHTML;
	var pa_print=document.getElementById('example_data').innerHTML;
	
	document.getElementById('exl').value=pa_print;
	//document.body.innerHTML=pa_print;
	//window.print();
	//document.body.innerHTML=pa;
}		
			
			
			
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



// ----- Alert Script ----- //



</script>
	
	<!----------- Update Popup --------->
	
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
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update University Name</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">	
		
		<div class="modal-body" style="height:150px;">
		<br/>
		<?php
		
		$update_tab="add_class";
		$conds="where id='".$id_modal."'";
		$single=$config_class->getsinglerecord($update_tab,$conds);
		
		?>
          
		<div class="row">	
	    <div class="col-sm-1">  </div>	
		<div class="col-sm-10">  
		<div class="form-group">
        <label for="usr" id="field_label">Class:</label>
        <input type="text" class="form-control" value="<?php echo($single['class']); ?>"  name="edu_type_upd" pattern="[a-zA-Z0-9+ ]{3,80}" placeholder="Enter class name" title="Enter class name" required>
	    <input type="hidden" name="up" value="<?php echo($single['class']); ?>" />
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
  
<div class="content" style="padding:0px;">
<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">
		
	<div id="add_edu_ty">
	<div class="col-sm-3" id="edu_type_label"  >Add New Class</div>
	<div class="col-sm-9" >   </div>
	
	
	<!------ Enter University Name ------->
    <div class="col-sm-12" style="padding-bottom:20px;border:1px solid lightgrey;border-top:1px solid lightgrey;background-color:#F8F8F8;">
	<div class="col-sm-3"></div>
	<div class="col-sm-6" id="fields_edu" style="margin:0px;">
	
    <!------ Insert Alert -------->
    <div class="col-sm-12" style="margin-top:15px;margin-bottom:5px;padding:0px;border:0px solid red;height:40px;">
	
	 <?php
	 
	 	if(isset($_GET['succ']))
		{
			$sss=base64_decode($_GET['succ']);
		
			if(base64_decode($_GET['succ'])=="succ")
			{
					
			?>
		
	        <div id="alert_label_succ" class="alert alert-success alert-top" role="alert" style="margin:0px;">
         <span class="alert-msg"></span>
            <?php echo $sss; ?>
		
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
            <span class="alert-msg">Class name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</span>
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
            <span class="alert-msg">Class name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
	 <!------ End Insert Alert -------->
    
	
	
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">

	<div class="form-group">
    <label for="usr" id="field_label">Class:</label>
    <input type="text" class="form-control" id="usr" name="un_type" placeholder="Enter Class Name" pattern="[a-zA-Z0-9+ ]{3,30}" title="Enter class name" required>
    </div>
	<div class="form-group">
    <input type="submit" class="btn btn-success" name="submit"  value="SUBMIT" style="width:100px;">
    <!--<button type="reset" class="btn btn-primary" value="Reset" style="width:100px;">Reset</button>-->
    </div>
	
	</form>
	</div>
	<div class="col-sm-3"></div>
	</div>
	
	</div>
	
	<!------ Enter University Name ------->
	
    <!---------Delete Alert--------->	
	<?php
	
	
	
	
		/*	
		if(isset($_GET['delsucc']))
		{
			if(base64_decode($_GET['delsucc'])=="delsucc")
			{
			?>
			
					
			<div class="col-sm-12" style="border:0px solid black;padding:0px;margin-top:20px;">
			<div class="col-sm-3" style="padding:0px;">  </div>
			<div class="col-sm-6" style="padding:0px;">
			<div id="alert_label_succdell" class="alert alert-success alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>
			
			<!--<div class="alert alert-success" id="alert_label_succd" >Successfully Deleted. !</div>-->
			</div>
			<div class="col-sm-3" style="padding:0px;">  </div>
			</div>	
			<?php
			}
		}
		if(isset($_GET['delnotsucc']))
		{	
	        if(base64_decode($_GET['delnotsucc'])=="delwrong")
			{	
			?>
			<div class="col-sm-12" style="border:0px solid black;padding:0px;margin-top:20px;">
			<div class="col-sm-3" style="padding:0px;">  </div>
			<div class="col-sm-6" style="padding:0px;">
			<div id="alert_label_faildel" class="alert alert-danger alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>
			
			<!--<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>-->
			</div>
			<div class="col-sm-3" style="padding:0px;">  </div>
			</div>
			<?php
			}
		}
		if(isset($_GET['unii']))
		{
			$nm=base64_decode($_GET['unii']);
						
			?>
			<div class="col-sm-12" style="border:0px solid black;padding:0px;margin-top:20px;">
			<div class="col-sm-2" style="padding:0px;">  </div>
			<div class="col-sm-8" style="padding:0px;">
			<div id="alert_label_fail_upd" class="alert alert-warning alert-top" role="alert" style="padding:8px;">
            <span class="alert-msg">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. Already exist in database!</span>
            </div>
			
			<!--<div class="alert alert-warning" id="alert_label_failupd">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. !</div>-->
			</div>
			<div class="col-sm-2" style="padding:0px;">  </div>
			</div>
			<?php
				
		}
		*/	
		
		
		
		
	
	$table_export_data="";
	$table_export_data_final="";
	
	$table_export_data.="<div id='example_data'>";
	$table_export_data_final.="<div id='example_data'>";
	
	$table_export_data.="
	<table class='table table-hover' id='example' style='border:1px solid lightgrey;'>
 
        <tr id='ths' style='background-color:lightgrey;font-size:14px;'>
	    <th><input type='checkbox' id='selectall'/></th>
        <th><b>S NO</b></th>
		 
        <th><b>Class</b></th>
        <th><b>Action</b></th>
        </tr>";
	
	$table_export_data_final.="
	<table class='table table-hover' id='example' style='border:1px solid lightgrey;'>
 
        <tr id='ths' style='font-size:14px;'>
	    
        <th style='background-color:lightgrey;font-size:14px;'><b>S NO</b></th>
		 
        <th style='background-color:lightgrey;font-size:14px;' ><b>University Name</b></th>
        
        </tr>";
		// Paggig Code1
	    $num_rec_per_page=5;
	
	    if(isset($_GET["page"])) 
	    { 
        $page  = $_GET["page"]; 
	    } 
	    else 
	    { 
        $page=1; 
	    } 
    
	    $start_from = ($page-1) * $num_rec_per_page; 
		
		// End Paggig Code1	
				
		$tab_name="add_class ";
		error_reporting(0);
		$whrs=" ";
		$ords=" order by id desc LIMIT $start_from, $num_rec_per_page";
		
		
		
			
		$sele=$config_class->select_query($tab_name,$whrs,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
		
		
		$table_export_data.="<tr id='rg' style='text-align:center;'>
        <td><input type='checkbox' class='case' name='case[]' value='".$row['id']."' /></td>
        <td>".$inc."</td>
		
		<td>".$row['class']."</td>
        <td>
		<a href='add_new_class.php?view_edu&edit=".base64_encode($row['id'])."' onclick='javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}' title='Edit'><span class='glyphicon glyphicon-edit'></span></a> 
		<a href='add_new_class.php?view_edu&remove=".base64_encode($row['id'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'>
		<span class='glyphicon glyphicon-trash'></span></a>
		</td>
        </tr>";	
		
		
		$table_export_data_final.="<tr id='rg' style='text-align:center;'>
       
        <td>".$inc."</td>
		
		<td>".$row['class']."</td>
       
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
	
	<!------- View Reports ---------->	
	
	<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>View Reports</b></div>
	<div class="col-sm-7" id="edu_type_label" style="border:0px solid blue;"></div>
	
	<!--<div class="col-sm-4" id="edu_type_label" style="border:0px solid blue;"><b><a href="javascript:void(0)" onclick="print_data()">Print</a></b></div>-->
	<!--<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b><a href="exports.php?type=excel&filename=University_type" >Excel</a></b>	
	</div>
	<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>
	<a href="exports.php?type=word&filename=University_type" >Word</a>
	
	
	
	</b></div>
	<div class="col-sm-2" id="edu_type_label" style="border:0px solid blue;"><b>
	
	<a href="exports.php?type=pdf&filename=University_type" target="_blank" >Pdf</a>
	
	</b></div>-->
	
	<div class="col-sm-3" style="text-align:right;border:0px solid blue;margin-top:15px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
	<b><a href="exports.php?type=excel&filename=University_type" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	<b><a href="exports.php?type=word&filename=University_type" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b>  &nbsp;
	<b><a href="exports.php?type=pdf&filename=University_type" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	</div>
	
	
	
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;" >
	
	<div class="table-responsive">
	<form action="add_new_class.php" method="post">
	
	<?php
	
		echo($table_export_data);
	
	?>
	
	
		
		<table class="table table-hover" id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
 
        <tr> 
        <td colspan="4">
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" /> 
     	
		</td>
		
		</tr> 
		
		<!------------- Pagination Code 2 ---------->
		<td colspan="4" style="text-align:center;">   
		
		<?php 
	    
        $sql = "SELECT * FROM add_class  "; 
        $rs_result =mysql_query($sql); //run the query
        $total_records = mysql_num_rows($rs_result);  //count number of records
	
	    //echo $total_records;
	
        $total_pages = ceil($total_records / $num_rec_per_page); 

	  
	    echo(pagination($num_rec_per_page,$page,$total_records));
	  
	  
	  
	  
	  /*
       // echo "<a href='add_new_class.php?page=1' style='text-decoration:none;'>".'Privious'."</a> "; // Goto 1st page  
		echo" <li><a href='add_new_class.php?page=1'>First</a></li>";
        for($i=1; $i<=$total_pages; $i++) 
	    { 
           // echo "<a href='add_new_class.php?page=".$i."' style='text-decoration:none;'>".$i."</a> "; 
		   
		   if(isset($_GET['nextdata']))
		   {
			   
			   $nxt=$_GET['nextdata'];
			   
			if($i<=($nxt-1))
		   {
			   
		   }
		   else
		   {
			   $nxtfinal=($nxt+4);
			   if($i<=$nxtfinal)
			   {
			   $j=$nxtfinal;
		   if($page==$i)
		   {
			echo" <li class='active'><a href='add_new_class.php?page=".$i."' >".$i."</a></li>";
		      
		   }
		   else
		   {
			   
			echo" <li><a href='add_new_class.php?page=".$i."'>".$i."</a></li>";
		   }
			   }
		   }
			   
			   
			   
		   }
		   else
		   {
			   
			if($i<=5)
		   {
			   $j=5;
		   if($page==$i)
		   {
			echo" <li class='active'><a href='add_new_class.php?page=".$i."' >".$i."</a></li>";
		      
		   }
		   else
		   {
			   
			echo" <li><a href='add_new_class.php?page=".$i."'>".$i."</a></li>";
		   }
		   }
			   
			   
		   }
		  
		   
        
        } 
		
		
		
		if(5<=$total_pages)
		   {
			  echo" <li><a href='add_new_class.php?page=".($j+1)."&nextdata=".($j+1)."'>>></a></li>";
		   
		   }
		
       // echo "<a href='add_new_class.php?page=$total_pages' style='text-decoration:none;'>".'Next'."</a> "; // Goto last page
    
		echo" <li><a href='add_new_class.php?page=$total_pages'>Last</a></li>";
        
	   
		
		*/
	    ?>
		 
	
		</td>
		<!------------- End Pagination Code 2 ---------->
		
        
        </table>
		
		<!--<p>Total Records: <?php echo $total_records; ?></p>-->
		
        </form>
					
	</div>
	</div>
	<!-------End Add University Type---------->
	
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
	$table="add_class";
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
		alert('Successfully Deleted.!');
		window.location.href='add_new_class.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
			alert('unable to process your request. Please try again later.!');
		window.location.href='add_new_class.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="add_class";
	$wher="where id='".$datas."' ";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		alert('Successfully Deleted.!');
			
		window.location.href='add_new_class.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
			alert('unable to process your request. Please try again later.!');
		window.location.href='add_new_class.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


 ///////// Update Code //////////

if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$das=$_POST['up'];
	
	$unname=$_POST['edu_type_upd'];
	
	$table="add_class";
	
	$columns="class='".$unname."'";
	
	$column_values="where id='".$id."'";
	
	$condsa1="where  class='".$unname."'";
    
	$testa11=$config_class->getsinglerecord($table,$condsa1);
	
	
	
	if($testa11)
	{
		
		$un=base64_encode($unname);
		echo"<script>
		window.location.href='add_new_class.php?unii=".$un."';
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
		window.location.href='add_new_class.php';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='add_new_class.php';
		</script>";
		exit;
	}
		
	}
				
		
	
	
	
}

?>
<?php

include("config/dbconnection.php");

include("config/dbconfig.php");
$config_class = new Dbcon;

$config_class->is_session();
/*
if(!$_SESSION['edu_type']=="1" || !$_SESSION['edu_type']=="2" || !$_SESSION['edu_type']=="3")
{
	echo"<script>
	window.location.href='index.php';
		</script>";
		//exit;
}
else
{
	$mgmtid=$_SESSION['management'];
	
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
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
<!--<script type="text/javascript" src="/css/assets/js/plugins/visualization/echarts/echarts.js"></script>-->                        
<div class="page-header">
    <div class="row">
       <?php  require_once("includes/main_header1.php");  ?>
		</div>
</div>
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
	<!----- edit reports starts---->
<?php

	if(isset($_GET['edit'])){
	
$id_modal1=base64_decode($_GET['edit']);
	echo"<script>
	$(document).ready(function(){
	$('#myModal2').modal('show');
    });
	</script>";
	?>
			  <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width:60%;">
    
	<!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">update library books</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
		
        <div class="modal-body" style="height:350px;overflow-x:hidden;">
		<br/>
		
	
		<?php
		$update_tab="admin_inst_library";
		$conds="where sno='".$id_modal1."'";
		
		$vrow=$config_class->getsinglerecord($update_tab,$conds);
		//echo $update_tab."".$conds;
		?>
		<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               Academic Information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>
	<div class="col-sm-12" style="margin-top:10px;">	
 <div class="col-sm-4" style=""> course: </div>	
	    <div class="col-sm-8"><select class="form-control" name="board1">
		<option value="" >--select course--</option>
	<?php 
	//echo $vrow['course'];
		if($vrow['course']==1)
		{
			$sdata="selected";
			//echo($sdata);
		}
		else if($vrow['course']==2)
		{
			$sdata1="selected";
		}
		else if($vrow['course']==3)
		{
			$sdata2="selected";
		}
		else if($vrow['course']==4)
		{
			$sdata3="selected";
		}
		else if($vrow['course']==5)
		{
			$sdata4="selected";
		}
		else if($vrow['course']==6)
		{
			$sdata5="selected";
		}
?>

     <option  value="1" <?php echo($sdata); ?>>  pega</option>
	   <option  value="2" <?php echo($sdata1); ?>> perl</option>
	   <option  value="3" <?php echo($sdata2); ?>>dba</option>
	   <option  value="4" <?php echo($sdata3); ?>>php</option>
	   <option  value="5" <?php echo($sdata4); ?>>java</option>
	   <option  value="6" <?php echo($sdata5); ?>>mysql</option>
		</select>

	</div>	
</div>	


	<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style=""> course type: </div>	
	    <div class="col-sm-8"><select class="form-control" name="class1">
		<option>--Select Course Type---</option>
	<?php 
		
		if($vrow['course_type']==1)
		{
			$sdata6="selected";
		}
		else if($vrow['course_type']==2)
		{
			$sdata7="selected";
		}
		else if($vrow['course_type']==3)
		{
			$sdata8="selected";
		}
	

?>
	
		<option value="1" <?php echo($sdata6); ?>> Fast Track</option>
		<option value="2" <?php echo($sdata7); ?>> Regular </option>
		<option value="3" <?php echo($sdata8); ?>  >Long Term </option>
		
	
</select>
		
		</div>
		</div>
		
	
	  
		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style=""> Cover Photo: </div>
	    <div class="col-sm-8"><input type="file" class="form-control" value=" " name="img1" ></div> 
			<?php if($vrow['cover_image']!="")
			{
			?>
			<?php echo "<img width=50px height=50px src='institute_Uploadsbooks/".$vrow['cover_image']."' />"; ?>
		<?php 	}?>
		

		<input type="hidden" name="hide_id" value="<?php echo($id_modal1); ?>" />
	<input type="hidden" name="up" value="<?php echo($vrow['course']); ?>" />
	

		
		</div>
		
	     <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style="">Material : </div>
		
	  <div class="col-sm-8"><input type="file" class="form-control" value=" " id="img" name="img2"></div> 
		<?php /* echo "<img width=50px height=50px src='institute_Uploadsbooks/".$vrow['material_image']."' />"; */?>
		
		</div>
		   <input type="hidden" name="need1" value="<?php echo $vrow['cover_image'];  ?>">
            <input type="hidden" name="need2" value="<?php echo $vrow['material_image'] ;  ?>">
    
		<?php 
		if($vrow['filetype']!="")
			{
		if($vrow['filetype']=="pdf")
		{?>  <a href="institute_Uploadsbooks/<?php echo $vrow['material_image'] ?>" target="_blank">view file</a>
		
		<?php 		}
	 else if($vrow['filetype']=="video")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
   <source src="<?php echo("institute_Uploadsbooks/".$vrow['material_image']); ?>" type="<?php echo($vrow['material_type']); ?>"  >

</video>
	
			<?php } }?>
	    </div>
		
                    </div>
                </div>
              
                </div>
              
            </div>
        </div>
	
    </div>

			
	
	   
		</div>
	 
	<div class="modal-footer" style="padding:10px;">
	 <input type="submit" name="update" value="update" class="btn btn-success" />
	 <!--<input type="button" class="edu_btn" id="btnAdd" name="add"  value="Add question" style="font-size:20px;font-weight:normal;background-color:green;width:150px;height:35px;border-radius:2px;">--->
    <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
    </div>


	
    </div>
    </div> 
	</div>
	
    </form>
<?php }
	
?>
<!-- view reports ends--->
<!--------------------------Table Data--------------------->
<div style="border:1px solid #ccc;height:300px">
<div class="col-sm-12" id="side_label_user" style="padding-top:8px;padding-bottom:10px;border-bottom:1px solid #ccc">

	<div class="col-sm-6"  id="edu_type_label" style="text-shadow:0px 0px 10px white;font-size:18px;text-align:left;"> Search Books
	</div>
		<div class="col-sm-6" id="edu_type_label" style="border:0px solid red;text-align:right;">
	<span style="padding-left:10px;"><a href="admin_inst_library.php" id="sub_labels" style="text-shadow:0px 0px 10px white;font-size:18px;text-align:right;"> Add Books </a></span>

	</div>
	</div>
	
	<div class="col-sm-12" id="data_user1"  style="padding:0px;margin:0px;" >
	<form method="post">
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		<div class="col-sm-12" style="border:0px solid grey;">
		<div class="col-sm-3" style="border:0px solid grey;">   </div>
		<div class="col-md-6">
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
      <select class="form-control" name="board" onchange="getstates(this.value)" title="Country" required>
	  <option   value=""> -- Select Course -- </option>
	   <?php                                                                  
        
	    $tab_name="admin_inst_course";
	    $whrs="where ManagementCode='".$_SESSION['management']."'";
	    $ords="ORDER By course_name ASC";
	
	    $ns=$config_class->select_query($tab_name,$ords);
	   
        while($re=mysql_fetch_array($ns))
        {
            ?>
            <option value="<?php echo($re['id']); ?>"><?php echo($re['course_name']);?>    </option>
                                                                            
           <?php
        }
        ?>	  
	   </select>
	</div>
	</div>	
	<!--<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="class"   required>
	  <option  value="">  -- Select Course Type-- </option>
	    	    <option value="1"> Fast Track </option>
		  <option  value="2">Regular</option>
		   <option  value="3">Long Term</option>
		    
	  </select>   
</div>
	</div>-->
	<div class="col-sm-3" style="border:0px solid grey;">   </div>
	</div>
	<div class="col-sm-12" style="border:0px solid grey;">
		<div class="col-sm-2" style="border:0px solid grey;">   </div>

	

	
	 <center><div class="col-sm-12" style="text-align:center;margin-bottom:50px;margin-top:20px;">
        
       <input type="submit" class="btn btn-success"  name="search" value="search">
        
        </div></center>
	</div>

	</div>
	</div>
	</form>	
</div>
</div>
	
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px;">View Reports
	
</div>
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >

	<?php
	
	error_reporting(0);
	if(isset($_POST['search']))
	{		
		$scl_board= $_POST["board"];
		$scl_class=$_POST["class"];
	

		$qry="";
if($scl_board!="")
{
	
	$qry=$qry."course ='".$scl_board."' and ";	
}



//echo $qry;

if ($qry != "" && ($scl_board != ""   ))
{
    $vgy = strlen($qry)-6;
	$as=$vgy;
	for($i=0;$i<=$vgy;$i++)
	{
	    $thy=$thy.$qry[$i];
	}

}
		//if(isset($_SESSION['student']) || isset($_SESSION['parent']))
		//{
     //$whrs_sea="where ".$thy." and mgmt_code='".$_SESSION['management']."' ";	
		//}
		//else{
			$whrs_sea="where ".$thy." order by sno desc ";
			
		//}
//}

	
 }
 else
 {
	 $whrs_sea=" order by sno desc ";
 }
?>

	<div class="table-responsive" style="padding-bottom:30px;">
			<form action="admin_inst_libraryreports.php" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths" style="font-size:13px;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th style="font-weight:bold;">SNO</th>
		<th style="font-weight:bold;">Course</th>
    
        <th style="font-weight:bold;">Material/Vedios</th>
       
        <th style="font-weight:bold;">Action</th>
      
      </tr>
	  <?php
		 
		$tab_name="admin_inst_library";
		$sele=$config_class->select_query($tab_name,$whrs_sea);
		$inc=0;
		
		while($row=mysql_fetch_array($sele))
			
		{
			$inc++;
			?>  
             <tr style="">	
                 <td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['sno']) ?>"/></td>
                  <td><?php echo $inc; ?></td>
               <td><?php 
		
		$crs=$row['course'];
		$qry=mysql_query("select * from admin_inst_course where id='".$crs."'");
		if($row1=mysql_fetch_array($qry))
		{
			
			echo $row1['course_name'];
		}
		
 ?></td>
				  

  <td><?php 
        if($row['filetype']=="pdf")
		{
			echo "<a href='institute_Uploadsbooks/".$row['material_image']."' target='_blank'><img width=100px height=100px src='institute_Uploadsbooks/".$row['cover_image']."' /></a>";
		}
		else if($row['filetype']=="video")
		{
            $kin21=$row['material_image'];
            
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
                <source src="institute_Uploadsbooks/<?php echo $kin21;  ?>" type="video/mp4">
                
  

</video>
			
			<?php
		}
							
										
	                              // echo "<img width=75px height=70px src='tut-testmonials-profilepics/".($single['profile_pic']) ."'/>";
	  
								 
	  
	
		//echo "<img width=50px height=50px src='uploads/".$row['material_image']."' />";
		
		
		?>	</td>
		          
			 <td>
		      <!--  <a href="admin_inst_libraryreports.php?edit=<?php echo (base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want edit this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-edit"></i></a>
		     --> <a href="admin_inst_libraryreports.php?remove=<?php echo (base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash"></i></a>
		     </td>
		    </tr>
		
		<?php }
		?>
            
       <tr> 
									<td colspan="5">
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
        </td></tr>
 </table>
 </form>
			</div>
	</div>
</div>
 </div>
<!-- body content end -->
<div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <?php   require_once("includes/footer.php"); ?>
						
						
						
                 </div>         
                </div>
            </div>
        </div>
            


</body>
</html>
<!-----------update record--------------------->
<?php
if(isset($_POST['update']))
{
	
$id=$_POST['hide_id'];

	$need1=$_POST['need1'];
    $need2=$_POST['need2'];
	date_default_timezone_set("Asia/Kolkata");

$board18=$_POST['board1'];
	$class=$_POST['class1'];

	   
	$coverphoto18=$_POST['img1'];
    
   
	$name9=$_FILES["img1"]["name"];
    $name10=$_FILES["img1"]["type"];
    $data1=addslashes(file_get_contents($_FILES["img1"]["tmp_name"]));
	$target_dir ="institute_Uploadsbooks/";
	$target_file = $target_dir . basename($_FILES["img1"]["name"]);
	move_uploaded_file($_FILES["img1"]["tmp_name"],$target_file);

    
   
    
	$mate8=$_POST['img2'];
    
$file = rand(1000,100000)."-".$_FILES['img2']['name'];
    $file_loc = $_FILES['img2']['tmp_name'];
	$file_size = $_FILES['img2']['size'];
	$file_type = $_FILES['img2']['type'];
	$folder="institute_Uploadsbooks/"; 
	move_uploaded_file($file_loc,$folder.$file);
       if(strstr($file_type, "video/")){
      $filetype1 = "video";
       }else{
      $filetype1 = "pdf";
          }
   




	//$sno11=$_GET['edit'];
	$table1="admin_inst_library";
	
/*	$columns1="course='".$board18."',course_type='".$class."',cover_image='".$dyna11."',material_image='".$dyna22."'";
	$column_values1="where sno='".$id."'" ;
	// echo $columns1."".$column_values1 ;
	$update=$config_class->updaterecord($table1,$columns1,$column_values1);
	
	if($dyna11!=""){
	$columns1="course='".$board18."',course_type='".$class."',cover_image='".$dyna11."',material_image='".$dyna22."',filetype='".$filetype."',material_type='".$mime."'";
	$column_values1="where sno='".$id."'" ;
	}
	else if($dyna22!=""){
	$columns1="course='".$board18."',course_type='".$class."',cover_image='".$dyna11."',material_image='".$dyna22."',filetype='".$filetype."',material_type='".$mime."'";
	$column_values1="where sno='".$id."'" ;
	}
else{
	
     $columns1="course='".$board18."',course_type='".$class."'";
	$column_values1="where sno='".$id."'" ;
	
}*/
	 if($name9!="" )
	{
       
		
    $updatedatabcd= mysql_query("UPDATE admin_inst_library SET course = '$board18', course_type = '$class',cover_image='$name9',material_image='$need2' WHERE sno = $id");
    }
    else if($file!="") {
     //echo "i needd2".$mate8;
        $updatedatabcd= mysql_query("UPDATE admin_inst_library SET course = '$board18', course_type = '$class',cover_image='$need1',material_image='$file',filetype='$filetype1' WHERE sno = $id");
  
  }  
 
    else{
        $updatedatabcd= mysql_query("UPDATE admin_inst_library SET course = '$board18', course_type = '$class',cover_image='$need1',material_image='$need2' WHERE sno = $id");
        
    }
	
	
	
	
	//$updatedata=$config_class->updaterecord($table1,$columns1,$column_values1);
	
	if($updatedatabcd)
			{
				echo"<script>
				alert('Successfully updated.!');
				window.location.href='admin_inst_libraryreports.php';
				</script>";
				exit;
			}
			else
			{
				echo"<script>
				alert('unable to process your request. Please try again later.!');
				window.location.href='admin_inst_libraryreports.php';
				</script>";
				exit;
			}
		
}
	if(isset($_GET['remove']))
{
	
	$datas=base64_decode($_GET['remove']);
	
	$table="admin_inst_library";
	$wher="where sno='".$datas."'";
	
	$delsdata=$config_class->deleterecord($table,$wher);	
	
	if($delsdata)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		window.location.href='admin_inst_libraryreports.php?delsucc=".$sucd."';
		</script>";
		exit;

		
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='admin_inst_libraryreports.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}
	
if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="admin_inst_library";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where sno='".$item."'";
	
		$dels=$config_class->deleterecord($table,$wher);
		
	}
	
	
	if($dels)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		window.location.href='admin_inst_libraryreports.php?delsucc=".$sucd."';
		</script>";
		exit;

		
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='admin_inst_libraryreports.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}
	?>
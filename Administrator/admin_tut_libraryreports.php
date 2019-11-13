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
<script>
     function class_dependency(y1){

       
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
			
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              //alert("hai f");
                	var  somex1=xmlhttp.responseText; 
                // alert(somex1);
        document.getElementById("class").innerHTML=somex1;
           
               
            }}
        
     xmlhttp.open("GET", "ad_class_dependency.php?fac_name="+ y1, true);
        xmlhttp.send();
         }
    
    
    
    </script>
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
    <div class="modal-dialog" style="width:70%">
    
	<!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">View Tuition Library Reports</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
		
        <div class="modal-body" style="height:auto;">
		<br/>
		
	
		<?php
		$update_tab="admin_tut_library";
		$conds="where sno='".$id_modal1."'";
		
		$vrow=$config_class->getsinglerecord($update_tab,$conds);
		?>
		<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               Tuition Library information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>
	<div class="col-sm-12" style="margin-top:10px;">
	<input type="hidden" name="hide_id" value="<?php echo($id_modal1); ?>" />
 <input type="hidden" name="need1" value="<?php echo $vrow['cover_image'];  ?>">
            <input type="hidden" name="need2" value="<?php echo $vrow['material_image'] ;  ?>">	
		
<div class="col-sm-4" style=""> Class: </div>	
	    <div class="col-sm-8"><select class="form-control" name="board1">
		<option value="" >--Select Class--</option>
	<?php 
	$ghhi=$vrow['class'];
	//echo $ghhi;
	$query_s=mysql_query("select * from add_class   ORDER By class ASC");
	    while($rg=mysql_fetch_array($query_s))
	    {
					
	    if($ghhi==$rg['id'])
	    {
        ?>
		<option value='<?php echo($rg['id']); ?>' selected>						
		<?php					
		echo($rg['class']);					
		?>
		</option>					
		<?php
	    }
		else
		{					
		?>
		<option value='<?php echo($rg['id']); ?>'>						
		<?php					
		echo($rg['class']);					
		?>
		</option>						
		<?php
		}
					
	    }
		?>
		</select>

	</div>	
</div>	


	<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style=""> Subjects: </div>	
	    <div class="col-sm-8"><select class="form-control" name="class1">
		<option>--Select Subjects---</option>
	<?php 
		
		$ghhis=$vrow['subj'];
			$query_s=mysql_query("select * from add_subjects where  class='".$ghhi."' ORDER By subjects ASC");
				
			
				
			while($rg=mysql_fetch_array($query_s))
			{
					
				if($ghhis==$rg['id'])
				{
                ?>
				<option value='<?php echo($rg['id']); ?>' selected>						
				<?php					
				echo($rg['subjects']);
						
				?>
				</option>
						
				<?php
				}
				else
				{
						
				?>
				<option value='<?php echo($rg['id']); ?>'>						
				<?php											
				echo($rg['subj']);						
				?>
				</option>
						
				<?php
				}
					
			}
?>
	
</select>
		</div>
		</div>
		
	
	  
		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style=""> Cover Photo: </div>
	    <div class="col-sm-8"><input type="file" class="form-control" value=" " name="photo" ></div> 
			<?php echo "<img width=50px height=50px src='tutions_Uploadsbooks/".$vrow['cover_image']."' />"; ?>
	
		

		
		</div>
		
	     <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style="">Material Photo: </div>
		
	    <div class="col-sm-8"><input type="file" class="form-control" value="" name="photo1"> </div> 
		
		
			<?php 
		if($vrow['filetype']!="")
			{
		if($vrow['filetype']=="pdf")
		{?>  <a href="tutions_Uploadsbooks/<?php echo $vrow['material_image'] ?>" target="_blank">view file</a>
		
		<?php 		}
	 else if($vrow['filetype']=="video")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
   <source src="<?php echo("tutions_Uploadsbooks/".$vrow['material_image']); ?>" type="<?php echo($vrow['material_type']); ?>"  >

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

			
	
	   
		</div>
	 
	<div class="modal-footer" style="padding:10px;">
	 <input type="submit" name="update" value="update" class="btn btn-primary" />
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

	<div class="col-sm-12"  id="edu_type_label" style="text-shadow:0px 0px 10px white;font-size:18px;text-align:center"> Educational Institution Details
<span style="padding-left:350px;"><a href="admin_tut_library.php" id="sub_labels" style="background-color:grey; color:#FF9933;text-shadow:0px 0px 0px;-webkit-text-shadow:0px 0px 0px;-moz-text-shadow:0px 0px 0px;"> Add New Materials </a></span>
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
      <select class="form-control" name="board"  title="Country" onchange="class_dependency(this.value)" required>
	  <option value="">-- Select Class --</option>
	
        <?php                                                                  
        
	    $tab_name="add_class";
	    $whrs="";
	    $ords="ORDER By class ASC";
	
	    $ns=$config_class->select_query($tab_name,$whrs,$ords);

        while($re=mysql_fetch_array($ns))
           {
            ?>
            <option value="<?php echo($re['id']); ?>"><?php echo($re['class']);?>    </option>
                                                                            
           <?php
            }
        ?>
			
	   </select>
	</div>
	</div>	
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="class"  id="class" >
	  <option value="">-- Select Subject --</option>	
	  </select>   
</div>
	</div>
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
	
	$qry=$qry."class ='".$scl_board."' and ";	
}
if($scl_class!="")
{
	$qry=$qry."subj='".$scl_class."' and ";	
}


//echo $qry;

if ($qry != "" && ($scl_board != "" || $scl_class != ""  ))
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

	<div class="table-responsive">
			<form action="admin_tut_libraryreports.php" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths" style="font-size:13px;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th style="font-weight:bold;">SNO</th>
		<th style="font-weight:bold;">Class</th>
        <th style="font-weight:bold;">Subjects</th>
        <th style="font-weight:bold;">Material</th>
       
        <th style="font-weight:bold;">Action</th>
      
      </tr>
	  <?php
		 
		$tab_name="admin_tut_library";
		$sele=$config_class->select_query($tab_name,$whrs_sea);
		$inc=0;
		
		while($row=mysql_fetch_array($sele))
			
		{
			$inc++;
			?>  
             <tr style="">	
                 <td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['sno']) ?>"/></td>
                  <td><?php echo($inc); ?></td>
			  <td> 
		
	

	
        <?php                                                                  
      $def=$row['class'];
		  	  
		    $qury_gip=mysql_query("select * from add_class where id='".$def."' ");
			if($aloc=mysql_fetch_array($qury_gip))
			{
			echo $aloc['class'];
               
			}

       
      
		
		
 ?></td>
				  <td><?php 
	
		
	$aa=$row['subj'];
		  $qury_gip=mysql_query("select * from add_subjects where class='".$def."' and id='".$aa."' ");
			if($aloc=mysql_fetch_array($qury_gip))
			{
			echo $aloc['subjects'];
               
			}
		
 ?></td>

  <td><?php 
		if($row['filetype']=="pdf")
		{
			echo "<a href='tutions_Uploadsbooks/".$row['material_image']."' target='_blank'><img width=100px height=100px src='tutions_Uploadsbooks/".$row['cover_image']."' /></a>";
		}
		else if($row['filetype']=="video")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
   <source src="<?php echo("tutions_Uploadsbooks/".$row['material_image']); ?>" type="<?php echo($row['material_type']); ?>"  >

</video>
			
			<?php
		}
		//echo "<img width=50px height=50px src='uploads/".$row['material_image']."' />";
		
		
		?>	</td>
		          
			 <td>
		        <a href="admin_tut_libraryreports.php?edit=<?php echo(base64_encode($row['sno'])); ?>" ><i class="glyphicon glyphicon-edit"></i></a>
		        <a href="admin_tut_libraryreports.php?remove=<?php echo(base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash" ></i></a>
		     </td>
		    </tr>
		
		<?php }
		?>
		  <tr>
        <td colspan='6'> 
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
        </td>
		</tr>
            
       
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
            


</body></html>
<!-----------update record--------------------->
<?php
if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="admin_tut_library";
	$wher="where sno='".$datas."'";
	
	$delsdata=$config_class->deleterecord($table,$wher);
				
	if($delsdata)
	{
            echo"<script>
				alert('Successfully Deleted.!');
				window.location.href='admin_tut_libraryreports.php';
				</script>";
				exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='admin_tut_libraryreports.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}
if(isset($_POST['update']))
{
	//$mainid=base64_decode($_GET['edit']);


$board18=$_POST['board1'];
	$class=$_POST['class1'];
		$mainid=$_POST['hide_id'];
	

	$need1=$_POST['need1'];
    $need2=$_POST['need2'];
	$coverphoto18=$_POST['photo'];
	
	
	$name9=$_FILES["photo"]["name"];
    $name10=$_FILES["photo"]["type"];
    $data1=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
	$target_dir ="tutions_Uploadsbooks/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
	$materialphoto118=$_POST['photo1'];
	
	$file = rand(1000,100000)."-".$_FILES['photo1']['name'];
    $file_loc = $_FILES['photo1']['tmp_name'];
	$file_size = $_FILES['photo1']['size'];
	$file_type = $_FILES['photo1']['type'];
	$folder="tutions_Uploadsbooks/"; 
	move_uploaded_file($file_loc,$folder.$file);
       if(strstr($file_type, "video/")){
      $filetype1 = "video";
       }else{
      $filetype1 = "pdf";
          }
   
	//$sno11=$_GET['edit'];
	//$table18="playscl_library";
	
	//$columns18="boardtype='".$board18."',Class='".$class18."',cover_image='".$coverphoto18."',material_image='".$semister18."',coverphoto='".$coverphoto18."',material='".$materialphoto118."',yearadd='".$yearadd3."' ";
	//$column_values18="where sno='".$mainid."'" ;
    if($name9!="" )
	{
       
		
    $updatedatabcd= mysql_query("UPDATE admin_tut_library SET class = '$board18', subj = '$class',cover_image='$name9',material_image='$need2' WHERE sno = $mainid");
    }
    else if($file!="") {
      
        $updatedatabcd= mysql_query("UPDATE admin_tut_library SET class = '$board18', subj = '$class',cover_image='$need1',material_image='$file',filetype='$filetype1' WHERE sno = $mainid");
    }  
    
    else{
        $updatedatabcd= mysql_query("UPDATE admin_tut_library SET class = '$board18', subj = '$class',cover_image='$need1',material_image='$need2' WHERE sno = $mainid");
        
    }
    
	
	
	if($updatedatabcd)
			{
				echo"<script>
				alert('Successfully updated.!');
				window.location.href='admin_tut_libraryreports.php';
				</script>";
                exit;

			}
			else
			{
				echo"<script>
				alert('unable to process your request. Please try again later.!');
			window.location.href='admin_tut_libraryreports.php';
				</script>";
				exit;
			}
		
}
	
		




if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="admin_tut_library";
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
		alert('Successfully Deleted.!');
		window.location.href='admin_tut_libraryreports.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='admin_tut_libraryreports.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}

?>
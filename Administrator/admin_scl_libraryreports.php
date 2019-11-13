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
				
							
		<script>
		function getclass(clsname) {	

		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
				var  somex1=xmlhttp.responseText; 

//alert(somex1);

document.getElementById("ac_class").innerHTML=somex1;
																
            }
        }
        xmlhttp.open("GET","admin_class_dep.php?clsids="+clsname, true);
        xmlhttp.send();

				
	}
		
		
		</script>
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
	<!----- edit reports starts---->
<?php

	if(isset($_GET['edit'])){
	
$id_modal1=($_GET['edit']);
	echo"<script>
	$(document).ready(function(){
	$('#myModal2').modal('show');
    });
	</script>";
	?>
			  <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width:60%;">
    
	<!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">View Question Paper Reports</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
		
        <div class="modal-body" style="height:350px;overflow-x:hidden;">
		<br/>
		
	
		<?php
		$update_tab="admin_scl_library";
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
                               Academic Information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>
	<div class="col-sm-12" style="margin-top:10px;">	
 <div class="col-sm-4" style=""> Board Type: </div>	
	    <div class="col-sm-8"><select class="form-control" name="board1">
		<option value="" >--select Board Type--</option>
	<?php 
		if($vrow['boardtype']==1)
		{
			$sdata="selected";
		}
		else if($vrow['boardtype']==2)
		{
			$sdata1="selected";
		}
?>
<option value="1" <?php echo($sdata); ?> >State </option>
<option value="2" <?php echo($sdata1); ?> >CBSE </option>

		</select>

	</div>	
</div>	


	<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style=""> Class: </div>	
	    <div class="col-sm-8"><select class="form-control" name="class1">
		<option>--Select Class---</option>
	<?php 
		
		if($vrow['Class']==1)
		{
			$sdata2="selected";
		}
		else if($vrow['Class']==2)
		{
			$sdata3="selected";
		}
		else if($vrow['Class']==3)
		{
			$sdata4="selected";
		}
		else if($vrow['Class']==4)
		{
			$sdata5="selected";
		}
		else if($vrow['Class']==5)
		{
			$sdata6="selected";
		}
		else if($vrow['Class']==6)
		{
			$sdata7="selected";
		}
		else if($vrow['Class']==7)
		{
			$sdata8="selected";
		}
		else if($vrow['Class']==8)
		{
			$sdata9="selected";
		}
		else if($vrow['Class']==9)
		{
			$sdata10="selected";
		}
		else if($vrow['Class']==10)
		{
			$sdata11="selected";
		}

?>
	
		<option value="1" <?php echo($sdata2); ?>> 1st</option>
		<option value="2" <?php echo($sdata3); ?>> 2nd </option>
		<option value="3" <?php echo($sdata4); ?>  >3rd </option>
		<option value="4" <?php echo($sdata5); ?>> 4th </option>
		<option value="5" <?php echo($sdata6); ?>> 5th </option>
		<option value="6" <?php echo($sdata7); ?>> 6th </option>
		<option value="7" <?php echo($sdata8); ?>> 7th </option>
		<option value="8" <?php echo($sdata9); ?>> 8th </option>
		<option value="9" <?php echo($sdata10); ?>> 9th </option>
		<option value="10" <?php echo($sdata11); ?>> 10th </option>
		
	
</select>
		
		</div>
		</div>
		
	
	  
		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style=""> Cover Photo: </div>
	    <div class="col-sm-8"><input type="file" class="form-control" value=" " name="photo" ></div> 
			<?php echo "<img width=50px height=50px src='uploads/".$vrow['cover_image']."' />"; ?>
	
		

		
		</div>
		
	     <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style="">Material Photo: </div>
		
	    <div class="col-sm-8"><input type="file" class="form-control" value="" name="photo1"> </div> 
		<?php echo "<img width=50px height=50px src='uploads/".$vrow['material_image']."' />"; ?>
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
<div class="col-sm-3" id="edu_type_label_user" style="font-size:14px;color:blue;"> </div>
	<div class="col-sm-9"  style="border:0px solid red;text-align:right;">
	<span style="padding-left:10px;"><a href="admin_scl_library.php" id="edu_type_label_user" style="text-shadow:0px 0px 0px;-webkit-text-shadow:0px 0px 0px;-moz-text-shadow:0px 0px 0px;"> Add Books </a></span>

	&nbsp;
	</div>

<div style="border:1px solid #ccc;height:300px">
<div class="col-sm-12" id="side_label_user" style="padding-top:8px;padding-bottom:10px;border-bottom:1px solid #ccc">

	<div class="col-sm-12"  id="edu_type_label" style="text-shadow:0px 0px 10px white;font-size:18px;text-align:left;"> Educational Institution Details

	
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
      <select class="form-control" name="board" onclick="getclass(this.value)" title="Country" required>
	  <option   value=""> -- Select Board Type -- </option>
	   <?php                                                                  
        
	   $tab_name="admin_tbl_board";
	   $ords="ORDER By BoardName ASC";
	   
	   $ns=$config_class->select_query($tab_name,$ords);
	
        while($re=mysql_fetch_array($ns))
        {
            ?>
            <option value="<?php echo($re['sno']); ?>"><?php echo($re['BoardName']);?>    </option>                                                                           
           <?php
        }
        ?>
	   </select>
	</div>
	</div>	
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="class"  id="ac_class" required>
	  <option  value="">  -- Select class-- </option>
	    
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
	
	$qry=$qry."boardtype ='".$scl_board."' and ";	
}
if($scl_class!="")
{
	$qry=$qry."Class='".$scl_class."' and ";	
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
			<form action="admin_scl_libraryreports.php" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths" style="font-size:13px;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th style="font-weight:bold;">SNO</th>
		<th style="font-weight:bold;">Board Type</th>
        <th style="font-weight:bold;">Class</th>
        <th style="font-weight:bold;">Material</th>
       
        <th style="font-weight:bold;">Action</th>
      
      </tr>
	  <?php
		 
		$tab_name="admin_scl_library";
		$sele=$config_class->select_query($tab_name,$whrs_sea);
		$inc=0;
		
		while($row=mysql_fetch_array($sele))
			
		{
			
			
			$inc++;
			?>  
             <tr style="">	
                 <td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['sno']) ?>"/></td>
                  <td><?php echo($inc); ?></td>
               <td><?php 
		
	$ghhsa=$row['boardtype'];
				$query_s=mysql_query("select * from admin_tbl_board where sno='".$ghhsa."' ");
				while($rg=mysql_fetch_array($query_s))
				{
		
		echo($rg['BoardName']);
				}
 ?></td>
				 <?php 
		
	$query_s=mysql_query("select * from admin_class where sno='".$row['Class']."' ");
				while($row1=mysql_fetch_array($query_s))
				{
		
		$cls=$row1['class'];
		
				}
			$cls1="";
	
	if($cls==1)
	{
	    $cls1=$cls." <sup>st</sup>";
	}
	else if($cls==2)
	{
	    $cls1=$cls." <sup>nd</sup>";
	}
	else if($cls==3)
	{
	    $cls1=$cls." <sup>rd</sup>";
	}
	else if($cls<=10)
	{
	    $cls1=$cls." <sup>th</sup>";
	}
	else
	{
	    $cls1=$cls;
	}
	
				
		
		
 ?> <td><?php echo($cls1);   ?></td>


		          <td><?php 
		if($row['filetype']=="pdf")
		{
			
			echo "<a href='School_Uploadsbooks/".$row['material_image']."' target='_blank'><img width=100px height=100px src='School_Uploadsbooks/".$row['cover_image']."' /></a>";
		}
		else if($row['filetype']=="video")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
   <source src="<?php echo("School_Uploadsbooks/".$row['material_image']); ?>" type="<?php echo($row['material_type']); ?>"  >

</video>
			
			<?php
		}
		
		
		//echo "<img width=50px height=50px src='Uploads/".$row['material']."' />";?>	</td>
		          
			 <td>
		        <a href="admin_scl_libraryreports.php?remove=<?php echo (base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash"></i></a>
		     </td>
		    </tr>
		
		<?php }
		?>
          <tr>
<td colspan="6">  
<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />   
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
if(isset($_POST['update']))
{
	$mainid=$_GET['edit'];
	date_default_timezone_set("Asia/Kolkata");

$board18=$_POST['board1'];
	$class=$_POST['class1'];
	

	
	$coverphoto18=$_POST['photo'];
	$materialphoto118=$_POST['photo1'];
	
	//$sno11=$_GET['edit'];
	$table18="admin_clg_library";
	
	$columns18="boardtype='".$board18."',Class='".$class18."',cover_image='".$coverphoto18."',material_image='".$semister18."',coverphoto='".$coverphoto18."',material='".$materialphoto118."'";
	$column_values18="where sno='".$mainid."'" ;
	$updatedatabcd=$config_class->updaterecord($table18,$columns18,$column_values18);
	if($updatedatabcd)
			{
				echo"<script>
				alert('Successfully updated.!');
				window.location.href='admin_clg_libraryreports.php';
				</script>";
				exit;
			}
			else
			{
				echo"<script>
				alert('unable to process your request. Please try again later.!');
				window.location.href='admin_clg_libraryreports.php';
				</script>";
				exit;
			}
		
}
	
		if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="admin_scl_library";
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
		alert('successfully Deleted');
		window.location.href='admin_scl_libraryreports.php';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
				alert('Unable to process');
		window.location.href='admin_scl_libraryreports.php';
		</script>";
		exit;
	}
}
 if(isset($_GET['remove']))
 {
	
	//echo"sss";
	
	
	 
	//echo "<script>alert('hiii');</script>";
	$datas=base64_decode($_GET['remove']);
	$table="admin_scl_library";
	$wher="where sno='".$datas."' ";
	echo $wher;
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	
			echo"<script>
		alert('Successfully Deleted.!');
		window.location.href='admin_scl_libraryreports.php';
		</script>";
		exit;
	}
	else
	{
			echo"<script>
		alert('unable to process your request. Please try again later.!');
		 window.location.href='admin_scl_libraryreports.php';
		</script>";
		exit;
	} 
 }

	?>
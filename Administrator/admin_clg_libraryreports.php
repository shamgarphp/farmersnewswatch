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
	function getcorse(coursetpe) {	

		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
				var  somex1=xmlhttp.responseText; 



document.getElementById("crse_year").innerHTML=somex1;
	//alert(somex1);															
            }
        }
        xmlhttp.open("GET", "admin_branch_dep.php?crseids="+coursetpe, true);
        xmlhttp.send();

				
	}
	
function getyear(studnam) {	

var yearl=document.getElementById("crse_year").value;

var coursel=document.getElementById("crse_crtype").value;


    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
		var  somex1=xmlhttp.responseText; 

        document.getElementById("yr_sem").innerHTML=somex1;
														
            }
        }
        xmlhttp.open("GET","admin_branch_dep.php?yearids="+studnam+"&year="+yearl+"&crs="+coursel, true);
        xmlhttp.send();
}
	
function getsem(semname) {	

		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
				var  somex1=xmlhttp.responseText; 

//alert(somex1);

document.getElementById("sec_sem").innerHTML=somex1;
																
            }
        }
        xmlhttp.open("GET", "admin_branch_dep.php?semids="+semname, true);
        xmlhttp.send();

				
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
<?php
{
	if(isset($_GET['edit'])){
	
$id_modal1=($_GET['edit']);
	echo"<script>
	$(document).ready(function(){
	$('#myModal2').modal('show');
    });
	</script>";
	?>
	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width:60%;">
    
	<!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
        <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">View Question Paper Reports</span>
		<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
		<form action="" method="post">
        <div class="modal-body" style="height:350px;overflow-y:auto;">
		<br/>
		<?php
		$update_tab="admin_clg_library";
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
 <div class="col-sm-4" style=""> Course: </div>	
	    <div class="col-sm-8"><select class="form-control" name="course2">
		<option>--select course--</option>
	<?php 
		if($vrow['course']==1)
		{
			$sdata="selected";
		}
		else if($vrow['course']==2)
		{
			$sdata1="selected";
		}
		elseif($vrow['course']==3)
		{
			$sdata2="selected";
		}
		
		
?>
<option value="1" <?php echo($sdata); ?> >B.Tech </option>
<option value="2" <?php echo($sdata1); ?> >M.Tech </option>
<option value="3" <?php echo($sdata2); ?> >MBA</option>

		</select>

	</div>	
</div>	


	<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style=""> Branch: </div>	
	    <div class="col-sm-8"><select class="form-control" name="branch2">
		<option>--Select Branch---</option>
	<?php 
		
		if($vrow['branch']==1)
		{
			$sdata3="selected";
		}
		else if($vrow['branch']==2)
		{
			$sdata4="selected";
		}
		else if($vrow['branch']==3)
		{
			$sdata5="selected";
		}
		else if($vrow['branch']==4)
		{
			$sdata6="selected";
		}
		else if($vrow['branch']==5)
		{
			$sdata7="selected";
		}
		

?>
	
		<option value="1" <?php echo($sdata3); ?> >CSE </option>
		<option value="2" <?php echo($sdata4); ?> >ECE</option>
		<option value="3" <?php echo($sdata5); ?> >EEE </option>
		<option value="4" <?php echo($sdata6); ?>> MECH </option>
		<option value="5" <?php echo($sdata7); ?>> IT </option>
		
	
</select>
		
		</div>
		</div>
		
	<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style=""> Year: </div>	
	    <div class="col-sm-8"><select class="form-control" name="year2">
		<option>--Select year---</option>
	<?php 
		
		if($vrow['yearr']==1)
		{
			$sdata8="selected";
		}
		else if($vrow['yearr']==2)
		{
			$sdata9="selected";
		}
		else if($vrow['yearr']==3)
		{
			$sdata10="selected";
		}
		else if($vrow['yearr']==4)
		{
			$sdata11="selected";
		}
		
		

?>
	
		<option value="1" <?php echo($sdata8); ?> >1st year </option>
		<option value="2" <?php echo($sdata9); ?> >2nd year</option>
		<option value="3" <?php echo($sdata10); ?> >3rd year </option>
		<option value="4" <?php echo($sdata11); ?>> 4th year </option>
		
		
	
</select>
		
		</div>
		</div>
		<div class="col-sm-12" style="margin-top:10px;">
	    <div class="col-sm-4" style="">Semister: </div>	
	    <div class="col-sm-8"><select class="form-control" name="semister2">
		<option>--Select semister---</option>
	<?php 
		
		if($vrow['semister']==1)
		{
			$sdata12="selected";
		}
		else if($vrow['semister']==2)
		{
			$sdata13="selected";
		}
		
		
		

?>
	
		<option value="1" <?php echo($sdata12); ?> >1st  </option>
		<option value="2" <?php echo($sdata13); ?> >2nd </option>
		
		
		
	
</select>
		
		</div>
		</div>
		
	  
		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style=""> Cover Photo: </div>
	    <div class="col-sm-8"><input type="file" class="form-control" value=" " name="coverphoto2"  ></div>
 
		<?php echo "<img width=50px height=50px src='Uploads/".$vrow['coverphoto']."' />"; ?>
		<input type="hidden" id="image_path" name="image_path" value="<?php echo $vrow['coverphoto'];?>">
		
	
		</div> 

		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style="">Material Photo: </div>
		
	    <div class="col-sm-8"><input type="file" class="form-control" value=" "  name="materialphoto2" ></div> 

		<?php echo "<img width=50px height=50px src='Uploads/".$vrow['material']."' />"; ?>
		<input type="hidden" id="image_path1" name="image_path1" value="<?php echo $vrow['material'];?>">

		</div>
		
		</div>
		
	   
	
		
	    </div>
                    </div>
                </div>
              
                </div>
              
            </div>
        </div>
  

			
		<div id="CustomDiv"></div>
	<input type="hidden" name="incre" value="<?php echo($i); ?> " />
	   
		</div>
	 
	<div class="modal-footer" style="padding:10px;">
	 <input type="submit" name="update" value="update" class="btn btn-primary" />
	 <!--<input type="button" class="edu_btn" id="btnAdd" name="add"  value="Add question" style="font-size:20px;font-weight:normal;background-color:green;width:150px;height:35px;border-radius:2px;">--->
    <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
    </div>

    </form>
	
    </div>
    </div> 
	</div>

<?php }}
	?>
	  <div class="col-sm-3" id="edu_type_label_user" style="font-size:14px;color:blue;"> </div>
	<div class="col-sm-9"  style="border:0px solid red;text-align:right;">
	<span style="padding-left:10px;"><a href="admin_clg_library.php" id="edu_type_label_user" style="text-shadow:0px 0px 0px;-webkit-text-shadow:0px 0px 0px;-moz-text-shadow:0px 0px 0px;"> Add Books </a></span>

	&nbsp;
	</div>
	 <div style="border:1px solid #ccc;height:400px">
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
      <select class="form-control" name="course1" id="crse_crtype" onchange="getcorse(this.value)" title="Country" >
	  <option   value=""> -- Select Course -- </option>
	   <?php  $query_s1=mysql_query("select * from  admin_course  ");
    while($rg=mysql_fetch_array($query_s1))
				{
        
        //   echo($rg['course_name']);  
       
    ?>

	   <option value="<?php echo($rg['sno']);  ?>"> <?php echo($rg['adm_course']); ?></option>
	   <?php } ?>
		    
	</select>
	</div>
	</div>	
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="branch1" id="crse_year" onchange="getyear(this.value)" >
	  <option  value="">  -- Select branch-- </option>

		 
	  </select>   
</div>
	</div>
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="year1" id="yr_sem" onchange="getsem(this.value)" >
	  <option  value="">  -- Select year-- </option>
	   
			 
	  </select>   
</div>
	</div>
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">
<select class="form-control" name="semister1" id="sec_sem" >
	  <option  value="">  -- Select semister-- </option>
	    
		   
	  </select>   
</div>
	</div>
		<div class="col-sm-12" style="border:0px solid grey;">
		<div class="col-sm-2" style="border:0px solid grey;">   </div>

	

	
	 <center><div class="col-sm-12" style="text-align:center;margin-bottom:50px;margin-top:20px;">
        
       <input type="submit" class="btn btn-success"  name="search" value="search">
        
        </div></center>
	</div>

	</div>
	<div class="col-md-12">

	
	
	
		<div class="col-sm-3" style="border:0px solid grey;">   </div>


	</div>
	
	</div>
	
	</form>	
</div>
</div>
<!--------------------------Table Data--------------------->
	
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px;">  Library  View Reports
	
</div>
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >

	<?php
	
	error_reporting(0);
	if(isset($_POST['search']))
	{		
		$clg_course= $_POST["course1"];
		$clg_branch=$_POST["branch1"];
		$clg_year=$_POST["year1"];
		$clg_semister=$_POST["semister1"];
	

		$qry="";
if($clg_course!="")
{
	
	$qry=$qry."course ='".$clg_course."' and ";	
}
if($clg_branch!="")
{
	$qry=$qry."branch='".$clg_branch."' and ";	
}
if($clg_year!="")
{
	$qry=$qry."yearr='".$clg_year."' and ";	
}
if($clg_semister!="")
{
	$qry=$qry."semister='".$clg_semister."' and ";	
}


//echo $qry;

if ($qry != "" && ($clg_course != "" || $clg_branch != "" || $clg_year != "" || $clg_semister != ""   ))
{
    $vgy = strlen($qry)-6;
	$as=$vgy;
	for($i=0;$i<=$vgy;$i++)
	{
	    $thy=$thy.$qry[$i];
	}

}
//echo $thy;
		//if(isset($_SESSION['student']) || isset($_SESSION['parent']))
		//{
     //$whrs_sea="where ".$thy." and mgmt_code='".$_SESSION['management']."' ";	
		//}
		//else{
			$whrs_sea="where ".$thy." ";
			 //echo $whrs_sea;
			 
		//}
//}

	
 }
 else
 {
	 $whrs_sea="order by sno desc ";
 }
?>

			
			<div class="table-responsive">
			<form action="" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths" style="font-size:13px;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th style="font-weight:bold;">SNO</th>
		<th style="font-weight:bold;">Course</th>
        <th style="font-weight:bold;">Branch</th>
		<th style="font-weight:bold;">Year</th>
		<th style="font-weight:bold;">Semister</th>

		<th style="font-weight:bold;">Material</th>
       
        <th style="font-weight:bold;">Action</th>
      
      </tr>
	  <?php
		 
		$tab_name="admin_clg_library";
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
		
	$ghhsa123=$row['course'];
	     
   $query_s1=mysql_query("select * from  admin_course where  sno='".$ghhsa123."' ");
    while($rg=mysql_fetch_array($query_s1))
				{
        
          echo($rg['adm_course']);  
       
    }
	?>
	</td>
				  <td><?php 
		
		 $ghhsa12377=$row['branch'];
		   // $single['branch_name'];
     
   $query_s1=mysql_query("select * from  admin_branch where  sno='".$ghhsa12377."' ");
    while($rg=mysql_fetch_array($query_s1))
				{
        
        //   echo($rg['course_name']);  
      echo($rg['admin_branch_name']);
    }
		
 ?></td>
 	  <td><?php 
		
		     $fk44=$row['yearr'];
		
    $query_s4=mysql_query("select * from admin_year where sno='".$fk44."'  ");
    
				while($rg=mysql_fetch_array($query_s4))
				{
					
				 echo($rg['admin_year']);	
                  
                    
				}
		
 ?></td>
  <td><?php 
		
		$fk44=$row['semister'];
		
		
	
		
    $query_s4=mysql_query("select * from admin_semister where sno='".$fk44."'  ");
    
				while($rg=mysql_fetch_array($query_s4))
				{
					
				 echo($rg['admin_semister_name']);	
                  
                    
				}
		
		
		
 ?></td>

 
		</td> <td><?php 
		
		if($row['filetype']=="pdf")
		{
			echo "<a href='Uploadsbooks/".$row['material']."' target='_blank'><img width=100px height=100px src='Uploadsbooks/".$row['coverphoto']."' /></a>";
		}
		else if($row['filetype']=="video")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
   <source src="<?php echo("Uploadsbooks/".$row['material']); ?>" type="<?php echo($row['material_type']); ?>"  >

</video>
			
			<?php
		}
		
		
		//echo "<img width=50px height=50px src='Uploads/".$row['material']."' />";?>	</td>
		          
			 <td>
		        <a href="admin_clg_libraryreports.php?remove=<?php echo (base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash"></i></a>
		     </td>
		    </tr>
		
		<?php }
		if($inc=0){
			?>
			<tr>
			<td colspan="7" style="text-align:center;color:red;">No Results</td>
			</tr>
			<?php
		}
		?>
      <tr>
<td colspan="8">  <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />   
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





<?php
if(isset($_POST['update']))
{
	$mainid=$_GET['edit'];
	date_default_timezone_set("Asia/Kolkata");

    $course18=$_POST['course2'];
	$branch18=$_POST['branch2'];
	$year18=$_POST['year2'];
	$semister18=$_POST['semister2'];
	// $coverphoto18=$_POST['coverphoto2'];
	// $materialphoto118=$_POST['materialphoto2'];

	
	
if($FILES['coverphoto2']['tmp_name']!='')
	
{

$allowedExts = array("gif", "jpeg", "jpg", "png","pdf");
$temp = explode(".", $_FILES["coverphoto2"]["name"]);
$extension = end($temp);
echo($_FILES["coverphoto2"]["type"]);
if ((($_FILES["coverphoto2"]["type"] == "image/gif")
|| ($_FILES["coverphoto2"]["type"] == "image/jpeg")
|| ($_FILES["coverphoto2"]["type"] == "image/jpg")
|| ($_FILES["coverphoto2"]["type"] == "image/pjpeg")
|| ($_FILES["coverphoto2"]["type"] == "image/x-png")
|| ($_FILES["coverphoto2"]["type"] == "image/png")

|| ($_FILES["coverphoto2"]["type"] == "img/pdf"))
&& ($_FILES["coverphoto2"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["coverphoto2"]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["coverphoto2"]["error"] . "<br>";
  } 
  else 
  {

      $dyna=$_FILES["coverphoto2"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("Uploads/" . $_FILES["coverphoto2"]["name"]))
		{
        $incre="1";
      $rn= $_FILES["coverphoto2"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("Uploads/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("Uploads/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["coverphoto2"]["tmp_name"],
      "Uploads/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["coverphoto2"]["tmp_name"],
      "Uploads/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["coverphoto2"]["tmp_name"],
      "Uploads/" . $_FILES["coverphoto2"]["name"]);

    }
  }
} 
else 
{
  $dyna="";
}
}
else
{
		$image14=$_POST['image_path'];
		
		}

if($FILES['materialphoto2']['tmp_name']!='')

{
$allowedExts = array("gif", "jpeg", "jpg", "png","pdf");
$temp = explode(".", $_FILES["materialphoto2"]["name"]);
$extension = end($temp);
echo($_FILES["materialphoto2"]["type"]);
if ((($_FILES["materialphoto2"]["type"] == "image/gif")
|| ($_FILES["materialphoto2"]["type"] == "image/jpeg")
|| ($_FILES["materialphoto2"]["type"] == "image/jpg")
|| ($_FILES["materialphoto2"]["type"] == "image/pjpeg")
|| ($_FILES["materialphoto2"]["type"] == "image/x-png")
|| ($_FILES["materialphoto2"]["type"] == "image/png")

|| ($_FILES["materialphoto2"]["type"] == "application/pdf"))
&& ($_FILES["materialphoto2"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["materialphoto2"]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["materialphoto2"]["error"] . "<br>";
  } else {

      $dyna1=$_FILES["materialphoto2"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("Uploads/" . $_FILES["materialphoto2"]["name"])) 
	{
        $incre="1";
      $rn= $_FILES["materialphoto2"]["name"];
      $dyna1=$incre.$rn;
      //echo $rrn;

      if(file_exists("Uploads/" . $dyna1))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna1=$i.$dyna1;
              if(file_exists("Uploads/" . $dyna1))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["materialphoto2"]["tmp_name"],
      "Uploads/" . $dyna1);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["materialphoto2"]["tmp_name"],
      "Uploads/" . $dyna1);
              }
    }
	else {
      move_uploaded_file($_FILES["materialphoto2"]["tmp_name"],
      "Uploads/" . $_FILES["materialphoto2"]["name"]);

    }
  }
} 
else 
{
  $dyna1="";
  

} 
}

else
{

	$image15=$_POST['image_path1'];
	
	}
	
	//$sno11=$_GET['edit'];
	$table18="admin_clg_library";
	
	$columns18="course='".$course18."',branch='".$branch18."',yearr='".$year18."',
	semister='".$semister18."',coverphoto='".$image14."',material='".$image15."'";
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
	$table="admin_clg_library";
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
		window.location.href='admin_clg_libraryreports.php';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
				alert('Unable to process');
		window.location.href='admin_clg_libraryreports.php';
		</script>";
		exit;
	}
}
 if(isset($_GET['remove']))
 {
	
	//echo"sss";
	
	
	 
	//echo "<script>alert('hiii');</script>";
	$datas=base64_decode($_GET['remove']);
	$table="admin_clg_library";
	$wher="where sno='".$datas."' ";
	
		$delsdata=$config_class->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	
			echo"<script>
		alert('Successfully Deleted.!');
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
	?>

	



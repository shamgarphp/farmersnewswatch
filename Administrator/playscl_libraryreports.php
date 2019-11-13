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
   <script>
     
    function year785(y1){
     
        
        
var stu_cs=document.getElementById("usr_board").value;
       
     //   alert('haiii');
    //   alert(stu_cs);
        
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
           
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    
                	var  somex2=xmlhttp.responseText;
	
                
                
        document.getElementById("cls").innerHTML=somex2;
          //  alert(somex2); 
             
            }}
        
     xmlhttp.open("GET", "admin_ply_depends.php?brd="+ y1, true);
        xmlhttp.send();
         }
    
    </script>
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
        
		</div>
</div>
	<!----- edit reports starts---->
<?php

	if(isset($_GET['edit'])){
	

        $id_modal1=base64_decode($_GET['edit']);
	echo"<script>
	$(document).ready(function(){
   // alert($id_modal1);
	$('#myModal2').modal('show');
    });
	</script>";
	?>
			  <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" >
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
		$update_tab="playscl_library";
		$conds="where sno='".$id_modal1."'";
		
		$vrow=$config_class->getsinglerecord($update_tab,$conds);
		?>
		<div class="container">
<input type="hidden" name="up123" value="<?php echo $id_modal1;  ?>">
            <input type="hidden" name="need1" value="<?php echo $vrow['cover_image'];  ?>">
            <input type="hidden" name="need2" value="<?php echo $vrow['material_image'] ;  ?>">
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
<option value="2" <?php echo($sdata1); ?> >Central </option>

		</select>

	</div>	
</div>	
                         <div class="col-sm-12" style="margin-top:10px;">   
                            <div class="col-sm-4">Year:</div>
  <div class="col-sm-8" style="border:0px solid grey;">   
            <div class="form-group">
      <select class="form-control" name="yearadd1"  title="Country" required>
           <?php
	    $ghhika=$vrow['yearadd'];
       
        
	    $query_s=mysql_query("select * from  playscl_library where yearadd='".$ghhika."' ");
	    while($rg=mysql_fetch_array($query_s))
	    {					
	    if($ghhika==$rg['yearadd'])
	    {
            while($ghhika){
              ?>
          	   <option  value="<?php echo $ghhika;  ?> " selected> <?php echo $ghhika; ?></option>
          <?php
              break;
                
                
          }
            for($i=2001;$i<=2020;$i++){
              ?>
          	   <option  value="<?php echo $i;  ?>"> <?php echo $i; ?></option>
          <?php
              
          }
            
            ?>
        
          <?php
	    }
		
            
            
	    }	   
        ?>  
          
     
	</select>
	</div>
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
		

?>
	
		<option value="1" <?php echo($sdata2); ?>> Nuvo</option>
		<option value="2" <?php echo($sdata3); ?>> Playgroup </option>
		<option value="3" <?php echo($sdata4); ?>  >Nursery </option>
		<option value="4" <?php echo($sdata5); ?>> KingGarden </option>
		
		
	
</select>
		
		</div>
		</div>
		
	
	  
		  <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style=""> Cover Photo: </div>
	    <div class="col-sm-8"><input type="file" class="form-control" value=" " name="raj132"  >
              
              
              </div> 
			<?php echo "<img width=50px height=50px src='PlaySchool_Uploadsbooks/".$vrow['cover_image']."' />"; ?>
	
              
		

		
		</div>
		
	     <div class="col-sm-12" style="margin-top:10px;">		
	    <div class="col-sm-4" style="">Material Photo: </div>
		
	    <div class="col-sm-8">
            <input type="file" class="form-control" value="" name="photo1" > </div> 
             
		<?php 
             if($vrow['filetype']=="pdf")
		{
			echo "<a href='PlaySchool_Uploadsbooks/".$vrow['material_image']."' target='_blank'><img width=100px height=100px src='PlaySchool_Uploadsbooks/".$vrow['cover_image']."' /></a>";
		}
		else if($vrow['filetype']=="video")
		{
            $kin212=$vrow['material_image'];
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
                
   <source src="PlaySchool_Uploadsbooks/<?php echo $kin212;  ?>" type="video/mp4">

                
</video>
			
			<?php
		}
                        ?>
             
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

	<div class="col-sm-6"  id="edu_type_label" style="text-shadow:0px 0px 10px white;font-size:18px;"> PlaySchool Details

	
	</div>
    
   <div class="col-sm-4"></div>
    <div class="col-sm-2"  id="edu_type_label" style="text-shadow:0px 0px 10px white;font-size:18px;"> 
       
        
	<span class="btn btn-primary waves-effect" type="" style="padding:0px;width:150px;" name="submit" ><a href="admin-library-playschool.php" style="text-shadow:0px 0px;font-size:12px;color:white;border-radius:8px;font-weight:normal;text-decoration:none;">playschool books/videos add </a></span> 
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
    
	 <select class="form-control" name="board" onchange="year785(this.value)" title="Country" required id="usr_board">
           <option  value="">  -- Select Board-- </option>
	 <?php                                                                  
       $tab_name="ply_admin_board";
        $whrs="";
        $ns=$config_class->select_query($tab_name,$whrs);
          

     
        while($re=mysql_fetch_array($ns))
        {
			?>
			        <option value="<?php echo($re['sno']); ?>"><?php echo($re['boardtype']);?>    </option>

        <?php 
             	
		}
       
        ?>
	</select>
	</div>
	</div>	
             
            
	<div class="col-sm-12" style="border:0px solid grey;">
	<div class="form-group">

	  <select class="form-control" name="class"  id="cls"  required >
	  <option  value="">  -- Select class-- </option>
	   
        	
	  </select>   
</div>
	</div>
	<div class="col-sm-3" style="border:0px solid grey;">   </div>
	</div>
	<div class="col-sm-12" style="border:0px solid grey;">
		

	

	
	 <center><div class="col-sm-12" style="text-align:center;margin-bottom:100px;margin-top:20px;">
        
       <input type="submit" class="btn btn-success"  name="search" value="search">
        
        </div></center>
        
	</div>
<br><br>
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

	<div class="table-responsive" style="padding-bottom:30px;">
			<form action="playscl_libraryreports.php" method="post">
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
		 
		$tab_name="playscl_library";
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
		$kin=$row['boardtype'];
	$aa1=mysql_query("select * from ply_admin_board where 	sno= '".$kin."' ");
        
          while($re=mysql_fetch_array($aa1))
        {
			echo $re['boardtype'];
             	
		}
		
 ?></td>
				  <td><?php 
		
		
            $kin1=$row['Class'];
            
	$aa1=mysql_query("select * from ply_admin_class_ply where 	sno= '".$kin1."' ");
        
          while($re=mysql_fetch_array($aa1))
        {
			echo $re['Class'];
             	
		}
		
		
 ?></td>

  <td><?php 
		if($row['filetype']=="pdf")
		{
			echo "<a href='PlaySchool_Uploadsbooks/".$row['material_image']."' target='_blank'><img width=100px height=100px src='PlaySchool_Uploadsbooks/".$row['cover_image']."' /></a>";
		}
		else if($row['filetype']=="video")
		{
            $kin21=$row['material_image'];
            
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			
			<video width="100" height="100"  controls>
                <source src="PlaySchool_Uploadsbooks/<?php echo $kin21;  ?>" type="video/mp4">
                
  

</video>
			
			<?php
		}
		//echo "<img width=50px height=50px src='uploads/".$row['material_image']."' />";
		
		
		?>	</td>
		          
			 <td>
                 <!--
		        <a href="playscl_libraryreports.php?edit=<?php echo(base64_encode($row['sno'])); ?>" ><i class="glyphicon glyphicon-edit"></i></a>
                 -->
               
		        <a href="playscl_libraryreports.php?remove=<?php echo(base64_encode($row['sno'])); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash"></i></a>
		     </td>
		    </tr>
		
		<?php }
                 ?>
            <tr>
                 <td colspan="6"> 
        <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" data-type="confirm" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
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
if(isset($_POST['update']))
{
	$mainid=$_POST['up123'];
   
	date_default_timezone_set("Asia/Kolkata");

$board18=$_POST['board1'];
	$class12=$_POST['class1'];
   
	$yearadd3=$_POST['yearadd1'];

	$need1=$_POST['need1'];
    $need2=$_POST['need2'];
  // echo "i am singam".$need1." ".$need2;
    
	$coverphoto18=$_POST['raj132'];
    
   
	$name9=$_FILES["raj132"]["name"];
    $name10=$_FILES["raj132"]["type"];
    $data1=addslashes(file_get_contents($_FILES["raj132"]["tmp_name"]));
	$target_dir ="PlaySchool_Uploadsbooks/";
	$target_file = $target_dir . basename($_FILES["raj132"]["name"]);
	move_uploaded_file($_FILES["raj132"]["tmp_name"],$target_file);

    
   
    
	$mate8=$_POST['photo1'];
    
$file = rand(1000,100000)."-".$_FILES['photo1']['name'];
    $file_loc = $_FILES['photo1']['tmp_name'];
	$file_size = $_FILES['photo1']['size'];
	$file_type = $_FILES['photo1']['type'];
	$folder="PlaySchool_Uploadsbooks/"; 
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
       
		
    $updatedatabcd= mysql_query("UPDATE playscl_library SET boardtype = '$board18', Class = '$class12',cover_image='$name9',material_image='$need2',yearadd='$yearadd3' WHERE sno = $mainid");
    }
    else if($file!="") {
      echo "i needd2".$mate8;
        $updatedatabcd= mysql_query("UPDATE playscl_library SET boardtype = '$board18', Class = '$class12',cover_image='$need1',material_image='$file',yearadd='$yearadd3',filetype='$filetype1' WHERE sno = $mainid");
    }  
    
    else{
        $updatedatabcd= mysql_query("UPDATE playscl_library SET boardtype = '$board18', Class = '$class12',cover_image='$need1',material_image='$need2',yearadd='$yearadd3' WHERE sno = $mainid");
        
    }
    
    //echo "UPDATE playscl_library SET boardtype = '$board18', Class = '$class12',cover_image='$coverphoto18',material_image='$materialphoto118',yearadd='$yearadd3' WHERE sno = $mainid";
	//$updatedatabcd=$config_class->updaterecord($table18,$columns18,$column_values18);
	if($updatedatabcd)
			{
				echo"<script>
				alert('Successfully updated.!');
					window.location.href='playscl_libraryreports.php';
				</script>";
                exit;

			}
			else
			{
				echo"<script>
				alert('unable to process your request. Please try again later.!');
				window.location.href='playscl_libraryreports.php';
				</script>";
				exit;
			}
		
}
	
	

	?>

    
<?php
if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
   
    $sql12 = "DELETE FROM playscl_library WHERE sno = $datas" ;
          //  mysql_select_db('test_db');
            $retval = mysql_query($sql12);
    
	//$table="playscl_library";
	//$wher="where sno='".$datas."' ";
	
	//	$delsdata=$config_class->deleterecord($table,$wher);
	
	if($retval)
	{
		$sucd=base64_encode("delsucc");
		echo"<script>
         alert('successfully Deleted');
		window.location.href='playscl_libraryreports.php';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
        alert(' Tray Againnn!');
		window.location.href='playscl_libraryreports.php';
		</script>";
		exit;
	}
	
}

if(isset($_POST['remove_data']))
{
    echo "<script>
    //alert('singam');
    
    </script>";
	$datas=$_POST['case'];
	$table="playscl_library";
	$rv=0;
	foreach($datas as $item)
	{
		
	$sql1222 = "DELETE FROM playscl_library WHERE sno = $item" ;
        
		 $retval = mysql_query($sql1222);
		if($retval)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		$sucd=base64_encode("delsucc");
		echo"<script>
        alert('deleted Successfully');
		window.location.href='playscl_libraryreports.php';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
         alert('deleted fail Try Again');
		window.location.href='playscl_libraryreports.php';
		</script>";
		exit;
	}
}

    ?>
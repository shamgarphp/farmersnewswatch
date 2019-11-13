<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator </title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

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
a:hover, a:focus{
    text-decoration: none;
    outline: none;
}


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
License Terms
</style>
<SCRIPT language="javascript">
			
$(function()
{
	// add multiple select / deselect functionality
	$("#selectall").click(function () 
	{
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function()
	{

		if($(".case").length == $(".case:checked").length) 
		{
			$("#selectall").attr("checked", "checked");
		} 
		else
		{
			$("#selectall").removeAttr("checked");
		}

	});
});

</script>
	
</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">
	<?php require_once("includes/mainheader.php"); ?>	
	</div>
    <div class="navbar navbar-default header-highlight">
            						
			<?php  require_once("includes/main_header.php");  ?>
								
        </div>
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

	
	
	
	
	<!-------- ------------>
	
 	<div class="content" style="padding:0px;">
   <?php
if(isset($_GET['view']))
{
	$id_modal=base64_decode($_GET['view']);
	
	echo"
	<script>
	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal').modal('show');
    });
	
	</script>
	";

?>

<div class="modal fade" id="myModal" role="dialog" style=" ">
    <div class="modal-dialog" style="width:60%" style="overflow-x:hidden;overflow-y:hidden;">  
      <!-- Modal content-->
	<div class="modal-content" style="">
	
    <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">         
	<span class="modal-title" style="font-weight:bold;font-size:18px;color:#f8f8f8;">View Details</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style=" ">
 
	
	<?php		
	$update_tab="news_general_settings";
	$conds="where id='".$id_modal."' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);		
	
	$ss=strip_tags($single['content']);
			//$message=substr($ss,0,30);
	
	?>
	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" >
        <div class="modal-body" style="">
 
    <div class="row" style="border-radius:5px;border:1px solid lightgrey;padding:10px;">
       

		  <div class="col-sm-12" style="margin-top:10px;font-weight:bold;font-size:24px;">		
	   
		<?php echo($single['sitetitle']); ?>
		

	
		</div> 
	  <div class="col-sm-12" style="margin-top:10px;border:0px solid green;">		
	    <div class="col-sm-1" style="border:0px solid black;"></div>
		<div class="col-sm-10" style="border:0px solid red;">Banner Image:
		
			<!--
			<video width="50px" height="50px"></video>-->
			<?php	echo "<a href='News_Uploads/settingnews/".$single['banner']."' target='_blank'><img style='width:100%;height:200px;' src='News_Uploads/settingnews/".$single['banner']."' /></a>";
	
		 ?>
		</div>
		    <div class="col-sm-1" style="border:0px solid blue;"> </div>

		</div> 
		<div class="col-sm-12" style="margin-top:10px;"><b>Banner content:</b>		


		<?php echo($single['banner_content']); ?>
	

			  
			  
			  </div>
			  <div class="col-sm-12" style="margin-top:10px;"><b>Footer content:</b>		


		<?php echo($single['footer_content']); ?>
	

			  
			  
			  </div>
	
		
	   
	
		
	   
                   
               
              
              
            </div>
   
	   
		</div>
    <div class="modal-footer" style="padding:10px;">		
    <center>
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
?>   <?php
if(isset($_GET['edit']))
{
	$id_modal=base64_decode($_GET['edit']);
	
	echo"
	<script>
	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal11').modal('show');
    });
	
	</script>
	";

?>

<div class="modal fade" id="myModal11" role="dialog" style="">
    <div class="modal-dialog" style="width:60%" style="overflow-x:hidden;overflow-y:hidden;">  
      <!-- Modal content-->
	<div class="modal-content" style="">
	
    <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">         
	<span class="modal-title" style="font-weight:bold;font-size:18px;color:#f8f8f8;">Update  Details</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style=" ">
 
	
	<?php		
	$update_tab="news_general_settings";
	$conds="where id='".$id_modal."' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);		
	
	$ss=strip_tags($single['content']);
			//$message=substr($ss,0,30);
	
	?>
	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" >
        <div class="modal-body" style="">
 
    <div class="row" style="">
       
<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Title<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_title" value="<?php echo($single['sitetitle']); ?>" placeholder="Please Enter Title" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>
	
		
		<div class="form-group">
    <label for="usr" id="field_label">Upload Banner</label>
    <input type="file" accept="image/*" class="form-control" name="i_upload" placeholder="Upload Banner Image" title="Please Upload Banner"/>	
			<input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />  

	<br/>
	
	 <?php echo "<img width=50px height=50px src='News_Uploads/settingnews/".$single['banner']."' />"; ?>
	</div>	
   <div class="form-group">
      <label for="usr" id="field_label">Bannner Text<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_text" value="<?php echo($single['banner_content']); ?>" placeholder="Please Enter Bannner Text"  pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>	
	   <div class="form-group">
      <label for="usr" id="field_label">Footer Content<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_footer" placeholder="Please Enter Footer Content" value="<?php echo($single['footer_content']); ?>" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>
		
		
	  <div class="form-group">

      <input type="submit" class="btn btn-success"  name="update" value="Update" style="width:100px;">
   <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
   </div>	
			
			
			
			
			
			
			
			
			</div>
			<div class="col-sm-3"></div>
	
	
	</div>
            </div>
   
	   
		</div>
  
	
	</form>
	</div>
    </div>
</div>
  

	
	</div>

<?php
} 
?> 	  




		 
	
    <div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:0px;border:0px solid grey;">	

	<div class="col-sm-9" id="edu_type_label" style="padding:0px;font-size:16px;margin-top:30px;">View Settings Reports</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="settings.php" style="color:white;">Add news </a></span>
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;">

	<div class="table-responsive">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
	<table class="table table-hover" style="border:1px solid lightgrey;">
 
    <tr id="ths" style="background-color:#606060;font-size:14px;">
	<th><input type="checkbox" id="selectall"/></th>
    <th style="color:white;">S.NO</th>
    <th style="color:white;">Banner Image</th>
	<th style="color:white;">Banner Text</th>
	<th style="color:white;">Footer Content</th>
    <th style="color:white;">Action</th>
    </tr>

	<?php
		 
		$tab_name="news_general_settings";
           $where="order by id  desc";
		
		$sele=$getsignle->select_query($tab_name,$where);		
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
			?>  
             <tr style="text-align:center;">	
                 <td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/></td>
                  <td><?php echo($inc); ?></td>
                    <td> <?php echo "<img width=50px height=50px src='News_Uploads/settingnews/".$row['banner']."' />"; ?></td>
                    <td><?php echo($row['banner_content']); ?></td>
					<td><?php echo($row['footer_content']); ?></td>
                    
        
                   
                    
                   
                 <td>
		<a href="news_settings.php?edit=<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon-edit"></i></a>
					<a href="news_settings.php?view_edu&view==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon-eye-open"></i></a>

			<a href="news_settings.php?remove=<?php echo(base64_encode($row['id'])); ?>&file=<?php echo(base64_encode($row['banner'])); ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
		</tr>
		
            <?php
            
        }
	if($inc=="0")
		{  	?>
	<tr>
		<td colspan="6" style="text-align:center;color:red;">No Results</td>
		</tr>

		<?php } ?>
	
  <tr>
  
  <td colspan="6">
  
	<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />  
  
  </td>
  </tr>
		
	 </table>
	 
    </form>
	  
		
			
	</div>
	</div>
	
	
	
</div>


    </div>
	</div>
            </div>
        </div>
    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        					
	<?php   require_once("includes/footer.php"); ?>
											
						
                    </div>         
                </div>
            </div>
			
</body>
</html>
<?php
if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="news_general_settings";
	$rv=0;
	foreach($datas as $item)
	{
		$ss=mysql_query("select * from news_general_settings where id='".$item."' ");
		if($row=mysql_fetch_array($ss)){
			$sr=$row['banner'];
		}
		$wher="where id='".$item."' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			unlink("News_Uploads/settingnews/$sr");
			
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
      alert('successfully Deleted');
		window.location.href='news_settings.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_settings.php';
		</script>";
		exit;
	}

}

if(isset($_GET['remove']))
{
	$datas1=base64_decode($_GET['remove']);
		$datas2=base64_decode($_GET['file']);

	$table="news_general_settings";
	$wher="where id='".$datas1."'";

	$delsdata=$getsignle->deleterecord($table,$wher);
				
	if($delsdata)
	{
   
   unlink("News_Uploads/settingnews/$datas2");


	echo"<script>
      alert('successfully Deleted');
		window.location.href='news_settings.php';
		</script>";
		exit;
		
	}
	else
	{
		echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_settings.php';
		</script>";
		exit;
	}
}
/*-------------------------------------------------Update code-------------------------------------------*/
?>
<?php
if(isset($_POST['update']))
{
	
	
	$i_title=$_POST['i_title'];
	$i_upload=$_POST['i_upload'];
	$i_bantx=$_POST['i_text'];
	$i_foottext=$_POST['i_footer'];
$id=$_POST['hide_id'];
	//$u_ntcdescription=$_POST['description1'];
	
	
	if($_FILES['i_upload']['name']!="")
{

	
$allowedExts = array("pdf", "doc", "docx", "xls", "xlsx","gif", "jpeg", "jpg", "png", "mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["i_upload"]["name"]);
$extension = end($temp);
if ((($_FILES["i_upload"]["type"] == "application/pdf")
|| ($_FILES["i_upload"]["type"] == "application/vnd.ms-word")
|| ($_FILES["i_upload"]["type"] == "application/msword")
|| ($_FILES["i_upload"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["i_upload"]["type"] == "application/msexcel")
|| ($_FILES["i_upload"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
||($_FILES["i_upload"]["type"] =="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["i_upload"]["type"] == "application/csv")
|| ($_FILES["i_upload"]["type"] == "image/gif")
|| ($_FILES["i_upload"]["type"] == "image/jpeg")
|| ($_FILES["i_upload"]["type"] == "image/jpg")
|| ($_FILES["i_upload"]["type"] == "image/pjpeg")
|| ($_FILES["i_upload"]["type"] == "image/x-png")
|| ($_FILES["i_upload"]["type"] == "image/png")
||  ($_FILES["i_upload"]["type"] == "video/mp4")
|| ($_FILES["i_upload"]["type"] == "video/mp3")
|| ($_FILES["i_upload"]["type"] == "video/AVI")
|| ($_FILES["i_upload"]["type"] == "video/FLV")
|| ($_FILES["i_upload"]["type"] == "video/wmv")
|| ($_FILES["i_upload"]["type"] == "video/MOV")
|| ($_FILES["i_upload"]["type"] == "video/ASF")
|| ($_FILES["i_upload"]["type"] == "video/mpg")
|| ($_FILES["i_upload"]["type"] == "video/rm"))
&& ($_FILES["i_upload"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["i_upload"]["error"] > 0) {
    echo "Return Code: " . $_FILES["i_upload"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["i_upload"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("News_Uploads/settingnews/" . $_FILES["i_upload"]["name"])) {
        $incre="1";
      $rn= $_FILES["i_upload"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("News_Uploads/settingnews/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("News_Uploads/settingnews/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/settingnews/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/settingnews/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/settingnews/" . $_FILES["i_upload"]["name"]);

    }
  }
}
 
else 
{
  $dyna="No Image";
}
	 
	}



$table="news_general_settings";

if($dyna!=""){
	//sitetitle,banner,banner_content,footer_content
	$columns="sitetitle='".$i_title."',banner='".$dyna."',banner_content='".$i_bantx."',footer_content='".$i_foottext."'";
	$column_values="where id='".$id."' ";
	}
else{
	
	$columns="sitetitle='".$i_title."',banner_content='".$i_bantx."',footer_content='".$i_foottext."'";
	$column_values="where id='".$id."' ";
	
}
$updatedata=$getsignle->updaterecord($table,$columns,$column_values);
	

	 if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
		window.location.href='news_settings.php';
				</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
		window.location.href='news_settings.php';
   		</script>";
		exit;
	} 
	
}
?>
	




	
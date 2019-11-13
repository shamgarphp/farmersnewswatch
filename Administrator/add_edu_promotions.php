 
<?php

include("config/dbconnection.php");

include("config/dbconfig.php");

$config_class = new Dbcon;

 
if(isset($_REQUEST['submit']))
{
	
	
	
	
if($_FILES['img']['name']!="")
{

	
$allowedExts = array("gif", "jpeg", "jpg", "png","mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["img"]["name"]);
$extension = end($temp);
echo($_FILES["img"]["type"]);
if ((($_FILES["img"]["type"] == "image/gif")
|| ($_FILES["img"]["type"] == "image/jpeg")
|| ($_FILES["img"]["type"] == "image/jpg")
|| ($_FILES["img"]["type"] == "image/pjpeg")
|| ($_FILES["img"]["type"] == "image/x-png")
|| ($_FILES["img"]["type"] == "image/png")
|| ($_FILES["img"]["type"] == "img/mp4")
|| ($_FILES["img"]["type"] == "img/mp3")
|| ($_FILES["img"]["type"] == "img/AVI")
|| ($_FILES["img"]["type"] == "img/FLV")
|| ($_FILES["img"]["type"] == "img/wmv")
|| ($_FILES["img"]["type"] == "img/MOV")
|| ($_FILES["img"]["type"] == "img/ASF")
|| ($_FILES["img"]["type"] == "img/mpg")
|| ($_FILES["img"]["type"] == "img/rm"))
&& ($_FILES["img"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["img"]["error"] > 0) {
    echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["img"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("Admin_Promotions/" . $_FILES["img"]["name"])) {
        $incre="1";
      $rn= $_FILES["img"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("Admin_Promotions/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("Admin_Promotions/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $_FILES["img"]["name"]);

    }
  }
} 
else 
{
  $dyna="No Image";
}
	 



	/*
	$val1=$_POST['tport'];
	$val2=$_POST['optradio'];
	
	$val3=$_POST['protype'];
	$name=$_FILES['img']['name'];
	$img_type=$_FILES['img']['type'];
	$data=addslashes(file_get_contents($_FILES['img']['tmp_name']));
	
	$name1=$_FILES['video']['name1'];
	$video_type=$_FILES['video']['type'];
	$data1=addslashes(file_get_contents($_FILES['video']['tmp_name']));
	*/
	 //echo $name1."<br>". $video_type."<br>".$data1;
	$val6=$_POST['des'];
	$val7=$_POST['ur'];

date_default_timezone_set("Asia/Kolkata");

$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('Y-m');
$year=date('Y');
$status="1";
$asd=date('Y-m-d H:i:s');
//$promotion_code=strtotime($asd);
$admi_id=$_SESSION['admin_id'];
	
	
		
	$table="add_promotions";

	
	$columns="title,promotion_type,text,image_name,img_type,img_data,video_name,video_type,description,url,date,time,day,month,year,status,admin_id";
	$sevar=$_SESSION['admin_id'];
	$column_values="'','','','".$dyna."','','','','',
	'".$val6."','".$val7."','".$date."','".$time."','".$day."','".$month."','".$year."','".$status."','".$sevar."'";
	$result=$config_class->insertrecord($table,$columns,$column_values);
	

	
	
/*	
 $target_dir = "Uploads/images/";
 
$target_file = $target_dir . basename($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);



 $target_dir_videos = "Uploads/videos/";
 
$target_file_video = $target_dir_videos . basename($_FILES["video"]["name"]);
move_uploaded_file($_FILES["video"]["tmp_name"],$target_file_video);
*/


//move_uploaded_file($target_dir,"images/".$name);
	if($result)
	{
		
		$suc=base64_encode("succ");
		echo"<script>
		window.location.href='add_edu_promotions.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='add_edu_promotions.php?notsucc=".$fail."';
		</script>";
		exit;
	}
	 
	
}
else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='add_edu_promotions.php?notsucc=".$fail."';
		</script>";
		exit;
	}
	//echo $result;
	
	//echo(mysql_error()."asdf");
	 
 

}
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Promotions</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script type="text/javascript">





                   <!--------Text report--------->
  
	 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#std_radio").is(":checked")) {
                $("#radio_student").show(800);
            } 
			else {
                $("#radio_student").hide(800);
            }
        });
    });
	
		 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#std_radio").is(":checked")) {
                $("#std_report").show(800);
            }
			else {
                $("#std_report").hide();
            }
        });
    });
	
		<!--------Image report--------->
 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#facul_radio").is(":checked")) {
                $("#radio_faculty").show(800);
            } 
			else {
                $("#radio_faculty").hide(800);
            }
        });
    });

	 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#facul_radio").is(":checked")) {
                $("#facul_report").show(800);
            } 
			else {
                $("#facul_report").hide();
            }
        });
    });
	
	
	
                  <!--------Video report--------->
	 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#mgmt_radio").is(":checked")) {
                $("#radio_management").show(800);
            } 
			else {
                $("#radio_management").hide(800);
            }
        });
    });

	 $(function () {
        $("input[name='optradio']").click(function () {
            if ($("#mgmt_radio").is(":checked")) {
                $("#mgmt_report").show(800);
            } 
			else {
                $("#mgmt_report").hide();
            }
        });
    });
</script>

<!-----------Script 2---------->

<script type="text/javascript">
$(document).ready(function(){
   $('#std_radio').on('change', function() {
     if ( this.value == 'text')
     {
       $("#radio_management").show(800)
      }
     else
     {
       $("radio_management").hide(800);
     }
   });
});


$(document).ready(function(){
   $('#facul_radio').on('change', function() {
     if ( this.value == 'image')
     {
       $("#radio_faculty").show(800)
      }
     else
     {
       $("#radio_faculty").hide(800);
     }
   });
});

$(document).ready(function(){
   $('#mgmt_radio').on('change', function() {
     if ( this.value == 'image')
     {
       $("#radio_faculty").show(800)
      }
     else
     {
       $("#radio_faculty").hide(800);
     }
   });
});

</script>






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






<div class="page-header">
    <div class="row">
       
	   
	   
	   
	   <?php  require_once("includes/main_header1.php");  ?>
		
		
		
    </div>
</div>

<!-- header -->



                 <!--------------- body designing  -------------->
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
 

<!-------insert data---------------->



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
    <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;">Update Promotion</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body">
	<br/>
	
	<?php

	$update_tab="add_promotions";
	$conds="where SNO='".$id_modal."' and admin_id='".$_SESSION['admin_id']."' ";
	$single=$config_class->getsinglerecord($update_tab,$conds);
		
	?>
	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	
		
	<div class="form-group">
    <label for="usr" id="field_label">Set Priority:</label>
    <select type="date" class="form-control" name="priority" >	
	
	<?php
	if($single['priority']==0)
	{
			?>
				<option value="0" selected>Normal</option>
	<option value="1">Top</option>
	
			<?php
	}
	else
	{
						?>
				<option value="0">Normal</option>
	<option value="1" selected>Top</option>
	
			<?php
	}
	
	?>

	</select>
	
    </div>
	
	
	<div class="form-group">
    <label for="usr" id="field_label">URL:</label>
    <input type="text" class="form-control" name="link" value="<?php echo($single['url']); ?>" placeholder="Date" title="Date"/>	
	<input type="hidden" name="up" value="<?php echo($single['image_name']); ?>" />	
	<input type="hidden" name="hide_id" value="<?php echo($id_modal); ?>" />
    </div>
	
    <div class="form-group">
    <label for="usr" id="field_label">Description</label>   
    <textarea class="form-control" name="desc" placeholder="Description"  title="please Enter Description"><?php echo($single['description']); ?></textarea>
	</div>
	
	<div class="form-group">
    <label for="usr" id="field_label">Upload Image</label>
    <input type="file" accept="image/*" class="form-control" name="img" placeholder="Upload Image" title="Please Upload Image"/>	
	<br/>
	
	<?php
		echo "<img width=100px height=100px src='Admin_Promotions/".$single['image_name']."' />";
	?>	
	</div>	
	
    <div class="modal-footer" style="padding:10px;">
    <center><input type="submit" class="edu_btn" name="submit_upd" value="Update" style="width:100px;height:33px;border-radius:3px;color:white;">
	&emsp;  <button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;">Cancel</button>
    </center>
    </div>
	</form>
		 
    </div>
      
    </div>
	</div>
</div>

<?php
}
?>
  


<div class="content"  style="padding:0px;">
<div class="col-sm-12" id="divider_label" style="padding:0px;border:0px solid grey;">
<div id="add_edu_ty">
	
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px 0px 0px;"><h3>Add Promotions</h3>
	<!--<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;"><a href="javascript:void()" onclick="report()"  style="color:#0099FF;font-weight:bold;">View Reports</a></span>-->
	</div>
	</div>
  
  <div class="col-sm-12" style="border:1px solid lightgray;padding-top:20px;">
  <?php
			
			if(isset($_GET['succ']))
			{
				if(base64_decode($_GET['succ'])=="succ")
				{
				?>
			<div class="alert alert-success" id="alert_label_succ">Successfully Inserted. !</div>
				
			<?php
				}
				}
			if(isset($_GET['notsucc']))
			{	if(base64_decode($_GET['notsucc'])=="wrong")
				{
				
				?>
			<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
			<?php
				}
				}
				/*if(isset($_GET['uni']))
				{
					$nm=base64_decode($_GET['uni']);
					
				
				?>
				<div class="alert alert-warning" id="alert_label_fail">Event name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</div>
			<?php
				
				}
			*/
			?>
			
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">


	

	
	<!-------------Radio Image-->
	<div class="col-sm-12" id="radio_faculty" >
	<div class="col-sm-12" style="padding:0px;">
	   <div class="col-sm-1" ></div>
	     <div class="col-sm-7" >
	       <div class="form-group">
              <label for="usr" id="field_label">Upload Promoted Image :</label>
              <input type="file" class="form-control" id="txt_guest" name="img" title="Please Select Image"  >
          </div>
	     </div>
	    
	   <div class="col-sm-4" ></div>
	</div>
	</div>
	
	
	
	
	<div class="col-sm-12" >
	<div class="col-sm-1" ></div>

	<div class="col-sm-7" >
	
		<div class="form-group">
              
           <label for="usr" id="field_label">Description:</label>
              <textarea rows="4" cols="50" class="form-control" id="txt_organizer" name="des" title="Please enter Description Name"  required></textarea>
			  
     </div>
	 </div>
	 
	<div class="col-sm-4" >  </div>
	</div>
	
	
	
	
	<div class="col-sm-12">
	   <div class="col-sm-1" ></div>
	     <div class="col-sm-7" >
	       <div class="form-group">
              <label for="usr" id="field_label">Url Link:</label>
              <input type="text" class="form-control" id="txt_guest" name="ur" title="Please enter Guest Name"  required>
          </div>
	     </div>
	    
	   <div class="col-sm-4" ></div>
	</div>
	
	
	
	
	
	 <div class="col-sm-12"  style="margin-top:-10px;padding:10px;">
	   <div class="form-group">
       <center> <input type="submit" class="btn btn-primary"  name="submit" value="Submit" ></center>
	  </div>
   </div>
  </form>

</div> 
	<?php
			
			if(isset($_GET['delsucc']))
			{
				if(base64_decode($_GET['delsucc'])=="delsucc")
				{
				?>
			<div class="col-sm-12" style="border:0px solid black;padding:0px;margin-top:20px;">
			<div class="alert alert-success" id="alert_label_succ" >Successfully Deleted. !</div>
				</div>	
			<?php
				}
				}
			if(isset($_GET['delnotsucc']))
			{	if(base64_decode($_GET['delnotsucc'])=="delwrong")
				{
				
				?>
			<div class="col-sm-12" style="border:0px solid black;padding:0px;margin-top:20px;">
			<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
			</div>
			<?php
				}
				}
	
			
			?>
<div class="col-sm-12" id="edu_type_label"  style="margin-top:20px;"><b>View Report</b><br/>
	<!--<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;"><a href="javascript:void()" onclick="report()"  style="color:#0099FF;font-weight:bold;">View Reports</a></span>-->
	</div>
	 
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >
	
			<form action="add_edu_promotions.php" method="post">
				<div class="table-responsive">
			 <table class="table table-hover" style="border:1px solid lightgray;">
 
      <tr id="ths" style="background-color:lightgray;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
		<th style="text-align:center;font-weight:bold;">S No</th>
        <th style="text-align:center;font-weight:bold;">Image</th>
		  <th style="text-align:center;font-weight:bold;">Description</th>
		  <th style="text-align:center;font-weight:bold;">Url Link</th> 
			   <th style="text-align:center;font-weight:bold;"><b>Priority</b></th>
			   <th style="text-align:center;font-weight:bold;"><b>Actions</b></th>
			   
       </tr>
    	<?php
		  error_reporting(0);
		$tab_name="add_promotions";
		$whrs=" where admin_id='bslate_admin'";
		$ords=" order by date desc, time desc";
		
		
		$sele=$config_class->select_query($tab_name,$whrs,$ords);
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
			?>
			 <tr id="rg">
        <td>
		<input type="checkbox" class="case" name="case[]" value="<?php echo($row['SNO']) ?>"/>
		</td>
		 <td>
		
         <?php  echo($inc); ?>
		
		</td>
      
		<td>
		<?php
		if($row['image_name']!="")
		{
		
		?>
		<a href="Admin_Promotions/<?php echo($row['image_name']); ?>" target="_blank"> <img src="Admin_Promotions/<?php echo($row['image_name']); ?>" style="height:50px;width:100px;"/></a></td>
	    <?php
		}
		?>
		<td><?php echo(substr($row['description'],0,50)); ?></td>
		
		<td><?php echo($row['url']); ?></td>

		<td align="center">


		<?php
		
		if($row['priority']=="1")
		{
			?>
			
			<span style="color:green;font-weight:bold;">Top</span>
			<?php
			
		}
		else
		{
			?>
			<span style="color:orangered;font-weight:bold;">Normal</span>
			<?php
			
		}
		
		?>
		</td>
		
		<td>
		<a href="add_edu_promotions.php?edit=<?php echo(base64_encode($row['SNO'])) ?>" onclick="javascript:if(confirm('Do you want edit')==true){return true}else{ return false;}" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> 
		<a href="add_edu_promotions.php?remove=<?php echo(base64_encode($row['SNO'])) ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove">
		<span class="glyphicon glyphicon-trash"></span></a>
		</td>
      </tr>
			
			<?php
		}
		if($inc=="0")
		{
		?>
		<tr>
		<td colspan="11" style="text-align:center;color:red;">No Results</td>
		</tr>
		<?php
		}
		?>
  <tr>
  
  <td colspan="11">
  <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
   </td>
  </tr>
  </table>
  </div>
 </form>
 </div>
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
            


</body></html>

<?php

if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$rv=0;
	foreach($datas as $item)
	{
	
		$dels=mysql_query("delete from add_promotions where SNO='".$item."' ");
		if($dels)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
	$sucd=base64_encode("delsucc");
		echo"<script>
		window.location.href='add_edu_promotions.php?delsucc=".$sucd."';
		</script>";
		exit;
	}
	else
	{
		$failde=base64_encode("delwrong");
		echo"<script>
		window.location.href='add_edu_promotions.php?delnotsucc=".$failde."';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	
	$delsdata=mysql_query("delete from add_promotions where SNO='".$datas."' ");
	
	if($delsdata)
	{

		echo"<script>
		alert('Successfully removed.!');
		window.location.href='add_edu_promotions.php';
		</script>";
		exit;	
	}
	else
	{
				echo"<script>
		alert('Unable to process your request. Please try again.!');
		window.location.href='add_edu_promotions.php';
		</script>";
		exit;
	}
}


if(isset($_POST['submit_upd']))
{
	$id=$_POST['hide_id'];
	$img=$_POST['up'];
	if($_FILES['img']['name']!="")
{

	
$allowedExts = array("gif", "jpeg", "jpg", "png","mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["img"]["name"]);
$extension = end($temp);
echo($_FILES["img"]["type"]);
if ((($_FILES["img"]["type"] == "image/gif")
|| ($_FILES["img"]["type"] == "image/jpeg")
|| ($_FILES["img"]["type"] == "image/jpg")
|| ($_FILES["img"]["type"] == "image/pjpeg")
|| ($_FILES["img"]["type"] == "image/x-png")
|| ($_FILES["img"]["type"] == "image/png")
|| ($_FILES["img"]["type"] == "img/mp4")
|| ($_FILES["img"]["type"] == "img/mp3")
|| ($_FILES["img"]["type"] == "img/AVI")
|| ($_FILES["img"]["type"] == "img/FLV")
|| ($_FILES["img"]["type"] == "img/wmv")
|| ($_FILES["img"]["type"] == "img/MOV")
|| ($_FILES["img"]["type"] == "img/ASF")
|| ($_FILES["img"]["type"] == "img/mpg")
|| ($_FILES["img"]["type"] == "img/rm"))
&& ($_FILES["img"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["img"]["error"] > 0) {
    echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["img"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("Admin_Promotions/" . $_FILES["img"]["name"])) {
        $incre="1";
      $rn= $_FILES["img"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("Admin_Promotions/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("Admin_Promotions/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["img"]["tmp_name"],
      "Admin_Promotions/" . $_FILES["img"]["name"]);

    }
  }
} 
else 
{
  $dyna="";
}



date_default_timezone_set("Asia/Kolkata");

$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('Y-m');
$year=date('Y');
$status="1";
$asd=date('Y-m-d H:i:s');


if($_POST['priority']=='0')
{
$updatedata=mysql_query("update add_promotions set image_name='".$dyna."',url='".$_POST['link']."', priority='".$_POST['priority']."',description='".$_POST['desc']."' where SNO='".$id."'");
	
}
else if($_POST['priority']=='1')
{
$updatedata=mysql_query("update add_promotions set image_name='".$dyna."',date='".$date."',time='".$time."',url='".$_POST['link']."', priority='".$_POST['priority']."',description='".$_POST['desc']."' where SNO='".$id."'");
	
}	 
unlink("Admin_Promotions/".$img);
}
else
{
	
if($_POST['priority']=='0')
{
$updatedata=mysql_query("update add_promotions set url='".$_POST['link']."', priority='".$_POST['priority']."',description='".$_POST['desc']."' where SNO='".$id."'");
	
}
else if($_POST['priority']=='1')
{
$updatedata=mysql_query("update add_promotions set date='".$date."',time='".$time."',url='".$_POST['link']."', priority='".$_POST['priority']."',description='".$_POST['desc']."' where SNO='".$id."'");
	
}	
}



	if($updatedata)
	{
	
		echo"<script>
		alert('Successfully updated.!');
		window.location.href='add_edu_promotions.php';
		</script>";
		exit;
	}
	else
	{

		echo"<script>
		alert('unable to process your request. Please try again later.!');
       window.location.href='add_edu_promotions.php';
		</script>";
		exit;
	}
		
			
	}


?>
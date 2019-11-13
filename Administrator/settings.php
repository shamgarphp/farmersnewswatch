<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>


<?php
if(isset($_REQUEST['submit']))
{
	
date_default_timezone_set("Asia/Kolkata");

$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('m');
$year=date('Y');

$asd=date('Y-m-d H:i:s');	
$post_code=strtotime($asd);

	$getsignle = new Dbcon;
	
	
	$i_title=$_POST['i_title'];
	$i_upload=$_POST['i_upload'];
	$i_bantx=$_POST['i_text'];
	$i_foottext=$_POST['i_footer'];
		
		
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

	$columns="created_date,created_time,created_day,created_month,created_year,sitetitle,banner,banner_content,footer_content";
	$column_values="'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','".$dyna."','".$i_bantx."','".$i_foottext."'";
	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo"<script>
alert('successfully inserted');
		window.location.href='settings.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process');
		window.location.href='settings.php';
		</script>";
		exit;	
}	
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
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

<!-- header -->

<!-- body content  -->


<div class="content" style="padding:0px;padding-bottom:100px">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-9" id="edu_type_label"> Add Settings</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="news_settings.php" style="color:white;">View Setting reports </a></span>
	</div>
			<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Title<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_title" placeholder="Please Enter Title" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>
	
		
		<div class="form-group">
    <label for="usr" id="field_label">Upload Banner</label>
    <input type="file" accept="image/*" class="form-control" name="i_upload" placeholder="Upload Banner Image" title="Please Upload Banner"/>	
	<br/>
	
	
	</div>	
   <div class="form-group">
      <label for="usr" id="field_label">Bannner Text<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_text" placeholder="Please Enter Bannner Text" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>	
	   <div class="form-group">
      <label for="usr" id="field_label">Footer Content<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_footer" placeholder="Please Enter Footer Content" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" >
	  	 
      </div>
		
		
	  <div class="form-group">

      <input type="submit" class="btn btn-success"  name="submit" value="Submit">
    </div>	
			
			
			
			
			
			
			
			</form>
			</div>
			<div class="col-sm-3"></div>
	
	
	</div>
	
	<br><br><br>
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
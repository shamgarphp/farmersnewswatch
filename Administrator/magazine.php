<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");

$site_url = "http://localhost/farmers_news_watch";


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


	  $state=$_POST['state'];
	  $district=$_POST['district'];
	  $mandal=$_POST['mandal'];
	  $village=$_POST['village'];

	$i_upload=$_POST['i_upload'];
  // $i_upload_i=$_POST['i_upload_i'];
  // echo $i_upload_i;exit;
	$i_edita=$_POST['i_editt'];
	
	$i_edit=str_replace("'","'",$i_edita);
	//$i_text=$_POST['i_text'];
		
		
	if($_FILES['i_upload']['name']!="")
{

 //  
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
&& in_array($extension, $allowedExts))
 {
  // echo 'hi';exit;
  if ($_FILES["i_upload"]["error"] > 0) {
    echo "Return Code: " . $_FILES["i_upload"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["i_upload"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("News_Uploads/Worldnews/" . $_FILES["i_upload"]["name"])) {
        $incre="1";
      $rn= $_FILES["i_upload"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("News_Uploads/Worldnews/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("News_Uploads/Worldnews/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "News_Uploads/Worldnews/" . $_FILES["i_upload"]["name"]);

    }
  }
}
 
else 
{
  // echo "hello";exit;
  $dyna="No Image";
}
   
  }
	
	
	
	
	
	
		
	if($_FILES['i_upload_i']['name']!="")
{

	
$allowedExts = array("pdf", "doc", "docx", "xls", "xlsx","gif", "jpeg", "jpg", "png", "mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["i_upload_i"]["name"]);
$extension = end($temp);
if ((($_FILES["i_upload_i"]["type"] == "application/pdf")
|| ($_FILES["i_upload_i"]["type"] == "application/vnd.ms-word")
|| ($_FILES["i_upload_i"]["type"] == "application/msword")
|| ($_FILES["i_upload_i"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["i_upload_i"]["type"] == "application/msexcel")
|| ($_FILES["i_upload_i"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
||  ($_FILES["i_upload_i"]["type"] =="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["i_upload_i"]["type"] == "application/csv")
|| ($_FILES["i_upload_i"]["type"] == "image/gif")
|| ($_FILES["i_upload_i"]["type"] == "image/jpeg")
|| ($_FILES["i_upload_i"]["type"] == "image/jpg")
|| ($_FILES["i_upload_i"]["type"] == "image/pjpeg")
|| ($_FILES["i_upload_i"]["type"] == "image/x-png")
|| ($_FILES["i_upload_i"]["type"] == "image/png")
||  ($_FILES["i_upload_i"]["type"] == "video/mp4")
|| ($_FILES["i_upload_i"]["type"] == "video/mp3")
|| ($_FILES["i_upload_i"]["type"] == "video/AVI")
|| ($_FILES["i_upload_i"]["type"] == "video/FLV")
|| ($_FILES["i_upload_i"]["type"] == "video/wmv")
|| ($_FILES["i_upload_i"]["type"] == "video/MOV")
|| ($_FILES["i_upload_i"]["type"] == "video/ASF")
|| ($_FILES["i_upload_i"]["type"] == "video/mpg")
|| ($_FILES["i_upload_i"]["type"] == "video/rm"))
&& ($_FILES["i_upload_i"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["i_upload_i"]["error"] > 0) {
    echo "Return Code: " . $_FILES["i_upload_i"]["error"] . "<br>";
  } else {

      $dyna1=$_FILES["i_upload_i"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("News_Uploads/Worldnews/" . $_FILES["i_upload_i"]["name"])) {
        $incre="1";
      $rn= $_FILES["i_upload_i"]["name"];
      $dyna1=$incre.$rn;
      //echo $rrn;

      if(file_exists("News_Uploads/Worldnews/" . $dyna1))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna1=$i.$dyna1;
              if(file_exists("News_Uploads/Worldnews/" . $dyna1))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["i_upload_i"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna1);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["i_upload_i"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna1);
              }
    } else {
      move_uploaded_file($_FILES["i_upload_i"]["tmp_name"],
      "News_Uploads/Worldnews/" . $_FILES["i_upload_i"]["name"]);

    }
  }
}
 
else 
{
  $dyna1="No Image";
}
	 
	}

	$mime = $_FILES["i_upload".$i]['type'];
if(strstr($mime, "video/")){
$filetype = "2";
}else{
$filetype = "1";
}

	
	$table="news_world_news";
	$columns="category,created_date,created_time,created_day,created_month,created_year,news_title,state,district,mandal,village,content,file_type,file_content,admin_status,posted_userid,file_content_pdf,status,posted_by";
	
		if($_SESSION['head']=="Admin")
	{
	    $st=1;
	}
	else
	{
	    $st=0;
	}
	
	
	
	$column_values="'".$_POST['category']."','".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','".$state."','".$district."','".$mandal."','".$village."','".$i_edit."','".$filetype."','".$dyna."','1','".$post_code."','".$dyna1."','".$st."','".$_SESSION['head']."'";

	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
	// print_r($column_values);exit;
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo"<script>
alert('successfully inserted');
		window.location.href='magazine.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process');
		window.location.href='magazine.php';
		</script>";
		exit;	
}	
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>FarmerWatcher - Administrator</title> 
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <!-- Favicon--> 
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


  <script type="text/javascript">
   
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  
	function validate(){
// data1=document.getElementById("dd").innerHTML;
//alert(data1);
//var res = data1.replace('style="bottom: auto; top: 0px;"', 'style="bottom: auto; top: 0px;display:none;"');

//document.getElementById("summernote").value=data1;
var content2=document.getElementById("summernote").value;

if(content2=="") {
return false;

}

}
  </script>
  <style>
.note-editor.note-frame .note-editing-area .note-editable {
    padding: 10px;
    overflow: auto;
    color: #000;
    word-wrap: break-word;
    background-color: #fff;
    height: 300px;
}
</style>
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






 

<!-- header -->

<!-- body content  -->


<div class="" style="padding:0px;">
    
	<div class="col-sm-12" id=""></div>

	<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-9" id="edu_type_label"> Add Magazines</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="magazine_reports.php" style="color:white;">View reports </a></span>
	</div>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="fields_edu">
			
	
	
      <div class="form-group">
      <label for="usr" id="field_label">Choose Category<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="category"  required>
		<option value="Magazines">Magazines</option>

	   </select>		
	  
      </div>
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Title Of the content<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_title" placeholder="Please Enter Title"  title="Please Enter Title" required>
	  	 
      </div>


 
  
  <div class="form-group">
    <label for="usr" id="field_label">Upload PDF Cover Image</label>
    <input type="file"  class="form-control" name="i_upload" accept="file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"/>  
  <br/>
  </div>
	
		
		<div class="form-group">
    <label for="usr" id="field_label">Upload PDF</label>
    <input type="file"  class="form-control" name="i_upload_i" accept="file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"/>	
	<br/>

   </div>  
	
	

       <?php 
      	$state_array = array();
      	$sql_services = mysql_query("SELECT * FROM `state` ");
		    while ($services = mysql_fetch_assoc($sql_services)) {
            $state_array[] = $services;
        }
      ?>	
	
	<div class="form-group">
        <label for="state" id="field_label">Select State <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="state" name="state" onchange="getDistrict(this.value);">
          <option value=""> --Choose State-- </option> 
            <?php foreach ($state_array as $key => $value) { ?>
                <option  value="<?php echo $value['state_id']; ?>"><?php echo $value['state_name']; ?></option>
            <?php } ?>
        </select>
      </div>


      <div class="form-group districtdiv" id="districtdiv">
        <label for="district" id="field_label">Select District <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="district" name="district">
          <option value=""> --Choose District-- </option>
        </select>

      </div>

      <div class="form-group mandaldiv" id="mandaldiv">
        <label for="mandal" id="field_label">Select Mandal <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="mandal" name="mandal">
          <option value=""> --Choose Mandal-- </option>
        </select>
      </div>

      <div class="form-group villagediv" id="villagediv">
        <label for="village" id="field_label">Select Village <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="village" name="village">
          <option value=""> --Choose Village-- </option>
        </select>
      </div>
		
	
			
			
			
			
			
			
			

  <textarea id="summernote" name="i_editt"  style="height:1320px; max-width:1320px;" >
  
	<div style="width:100%;" id="datac">

</div>
	
</textarea>
	
  <!--<textarea id="summernote" name="editordata"></textarea>-->
 
    <center><input type ="submit"  value ="Submit" name="submit" class="btn btn-success"></center><br>
</form>
			</div>
			<div class="col-sm-1"></div>
	
	
	</div>

</div><br><br>

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
<script>
$("#editor").summernote({
   'height':1200,

});
</script>


<script>


    function getDistrict(stateId) {
      
        stateId = stateId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax.php",
            data: {
                "parameter": stateId,
                "method": "district_ajax",
            },
            cache: false,
            success: function (data) {
                $('#districtdiv').html(data);
            }
        });
    }
    function getMandal(districtId) {

        districtId = districtId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax.php",
            data: {
                "parameter": districtId,
                "method": "mandal_ajax",
            },
            cache: false,
            success: function (data) {
                $('#mandaldiv').html(data);
            }
        });
    }
    function getVillage(mandalId) {
        mandalId = mandalId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax.php",
            data: {
                "parameter": mandalId,
                "method": "village_ajax",
            },
            cache: false,
            success: function (data) {
                $('#villagediv').html(data);
            }
        });
    }

   $(document).ready(function(){

    });

</script>
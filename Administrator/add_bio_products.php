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
	
	
	$i_edita=$_POST['i_editt'];

	$i_edit=str_replace("'","",$i_edita);
	//$i_text=$_POST['i_text'];
		
		
		mkdir("../images/Avail_Imgs/avail_bio_products/".$_POST['pid']);
		
		
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
    if (file_exists("../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $_FILES["i_upload"]["name"])) {
        $incre="1";
      $rn= $_FILES["i_upload"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["i_upload"]["tmp_name"],
       "../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["i_upload"]["tmp_name"],
      "../images/Avail_Imgs/avail_bio_products/".$_POST['pid']."/" . $_FILES["i_upload"]["name"]);

    }
  }
}
 
else 
{
  $dyna="No Image";
}
	 
	}

	$mime = $_FILES["i_upload".$i]['type'];
if(strstr($mime, "video/")){
$filetype = "2";
}else{
$filetype = "1";
}

	
	$table="abio_produccts_listed_items";
	$columns="vPrice,iBioProductId,vProductName,vImage,vAvailabulity,vDescription";
	$column_values="'".$_POST['price']."','".$_POST['pid']."','".$_POST['pname']."','".$dyna."','".$_POST['avail']."','".$i_edit."' ";
	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo"<script>
alert('successfully inserted');
		window.location.href='add_bio_products.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process');
		window.location.href='add_bio_products.php';
		</script>";
		exit;	
}	
	
	
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Green Rich India - Administrator</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <!-- Favicon-->
 <link rel="shortcut icon" type="image/png" href="B.png">
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


    <body class="pace-done" >
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
	<div class="col-sm-9" id="edu_type_label"> Add Bio Product</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="bio_product_reports.php" style="color:white;">View reports </a></span>
	</div>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="fields_edu">
			
	
	
     
	
	
		
		
      <div class="form-group">
      <label for="usr" id="field_label">Product Category<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="pid"  required>
	  <option value=""> -- Choose -- </option>
	  <?php
	  $qry=mysql_query("select * from available_bio_products where vStatus='Active' ");
	  
	  while($row=mysql_fetch_array($qry))
	  {
		  ?>
		  <option value="<?php echo($row['iAvailaBioProduct_Id']); ?>"><?php echo($row['vBioProductName']); ?></option>
		  <?php
	  }
	  ?>
   
	  
	  
	  </select>
	  	 
      </div>
	  
	  
	  
	  	
      <div class="form-group">
      <label for="usr" id="field_label">Product Name<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="pname" placeholder="Please Enter Product Name"  required>
	  	 
      </div>
	  	
      <div class="form-group">
      <label for="usr" id="field_label">Price<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="price" placeholder="Please Enter Product Price"  required>
	  	 
      </div>
	  	
    	<div class="form-group">
    <label for="usr" id="field_label">Upload Image/Video</label>
    <input type="file"  class="form-control" name="i_upload" "file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"/>	
	<br/>
	
	
	</div>	
	  
	  
		
      <div class="form-group">
      <label for="usr" id="field_label">Availability<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="avail"  required>
	  <option value=""> -- Choose -- </option>
	  <option value="Yes">Yes</option>
	  <option value="No">No</option>
	  
	  </select>
      </div>
	

	
		
		
	
			
	

  <textarea id="summernote" name="i_editt"  style="height:1320px; max-width:1320px;" >		
			
			
			
	
	
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
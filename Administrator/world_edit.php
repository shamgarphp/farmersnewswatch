<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");

// $site_url = "http://localhost/farmers_news_watch";
$site_url = "http://farmersnewswatch.com";


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
	$city_id=$_POST['city_id'];





	$old_image=$_POST['old_image'];
	$i_edita=$_POST['i_editt'];
  // print_r($i_edita);exit;
  $id_modal=$_POST['id_modal'];
  $category=$_POST['category'];

    $state=$_POST['state'];
  $district=$_POST['district'];
  $mandal=$_POST['mandal'];
  $village=$_POST['village'];
	
	// $i_edit=str_replace("'","",$i_edita);
	//$i_text=$_POST['i_text'];
		
		
	if($_FILES['new_image']['name']!="")
{

	
$allowedExts = array("pdf", "doc", "docx", "xls", "xlsx","gif", "jpeg", "jpg", "png", "mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["new_image"]["name"]);
$extension = end($temp);
if ((($_FILES["new_image"]["type"] == "application/pdf")
|| ($_FILES["new_image"]["type"] == "application/vnd.ms-word")
|| ($_FILES["new_image"]["type"] == "application/msword")
|| ($_FILES["new_image"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["new_image"]["type"] == "application/msexcel")
|| ($_FILES["new_image"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
||($_FILES["new_image"]["type"] =="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["new_image"]["type"] == "application/csv")
|| ($_FILES["new_image"]["type"] == "image/gif")
|| ($_FILES["new_image"]["type"] == "image/jpeg")
|| ($_FILES["new_image"]["type"] == "image/jpg")
|| ($_FILES["new_image"]["type"] == "image/pjpeg")
|| ($_FILES["new_image"]["type"] == "image/x-png")
|| ($_FILES["new_image"]["type"] == "image/png")
||  ($_FILES["new_image"]["type"] == "video/mp4")
|| ($_FILES["new_image"]["type"] == "video/mp3")
|| ($_FILES["new_image"]["type"] == "video/AVI")
|| ($_FILES["new_image"]["type"] == "video/FLV")
|| ($_FILES["new_image"]["type"] == "video/wmv")
|| ($_FILES["new_image"]["type"] == "video/MOV")
|| ($_FILES["new_image"]["type"] == "video/ASF")
|| ($_FILES["new_image"]["type"] == "video/mpg")
|| ($_FILES["new_image"]["type"] == "video/rm"))
&& ($_FILES["new_image"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["new_image"]["error"] > 0) {
    echo "Return Code: " . $_FILES["new_image"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["new_image"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("News_Uploads/Worldnews/" . $_FILES["new_image"]["name"])) {
        $incre="1";
      $rn= $_FILES["new_image"]["name"];
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
                       move_uploaded_file($_FILES["new_image"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["new_image"]["tmp_name"],
      "News_Uploads/Worldnews/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["new_image"]["tmp_name"],
      "News_Uploads/Worldnews/" . $_FILES["new_image"]["name"]);

    }
  }
}
else 
{
  // $dyna=$old_image;
  // print_r($dyna);exit;
}
	 
	}else{
    $dyna=$old_image;
  }

	$mime = $_FILES["new_image".$i]['type'];
if(strstr($mime, "video/")){
$filetype = "2";
}else{
$filetype = "1";
}

	
	// $table="news_world_news";
	// $columns="category,created_date,created_time,created_day,created_month,created_year,news_title,cityid,content,file_type,file_content,admin_status,posted_userid,status,posted_by";
	if($_SESSION['head']=="Admin")
	{
	    $st=1;
	}
	else
	{
	    $st=0;
	}

  
	
	
	// $column_values="'".$_POST['category']."','".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','".$city_id."','".$i_edit."','".$filetype."','".$dyna."','1','".$post_code."','".$st."','".$_SESSION['head']."'";
	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
    // $conds="where id='".$id_modal."' ";
    // print_r($conds);exit;
	// $ins=$getsignle->updaterecord($table,$columns,$column_values,$conds);

//     $sql = "INSERT INTO news_world_news (category,created_date,created_time,created_day,created_month,created_year,news_title,state,district,mandal,village,content,file_type,file_content,admin_status,posted_userid,status,posted_by)
// VALUES ('".$_POST['category']."','".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','" .$state. "','".$district. "','".$mandal. "','".$village. "','".$i_edit."','".$filetype."','".$dyna."','1','".$post_code."','".$st."','".$_SESSION['head']."')";

  $sql = "UPDATE news_world_news set category='".$_POST['category']."', created_date='".$date."', created_time='".$time."', created_day='".$day."', created_month='".$month."', created_year='".$year."', news_title='".$i_title."', state='" .$state. "', district='".$district. "', mandal='".$mandal. "', village='".$village. "', content='".$i_edita."', file_type= '".$filetype."', file_content='".$dyna."',admin_status='1',posted_userid='".$post_code."', status = '".$st."', posted_by = '".$_SESSION['head']."' where id='".$id_modal."' ";

  // echo $sql; exit;

   $res = mysql_query($sql);



if($res)
{
echo"<script>
alert('Records successfully updated');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process  ');
		window.location.href='world.php';
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

<?php 
  if(isset($_GET['edit']))
  {
    $id_modal = base64_decode($_GET['edit']);
    // echo $id_modal;exit;
 
?>

<!-- header -->

<!-- body content  -->


<div class="" style="padding:0px;">
    
	<div class="col-sm-12" id=""></div>

	<div class="content" style="padding:0px;">    <div class="modal-body" style=" ">
  <?php   
  $update_tab="news_world_news";
  $conds="where id='".$id_modal."' ";
  $single=$getsignle->getsinglerecord($update_tab,$conds);    
  
  $ss=strip_tags($single['content']);
      $message=substr($ss,0,30);
  
  ?>
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-9" id="edu_type_label"> Select Category</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="news_worldreports.php" style="color:white;">View Content reports </a></span>
	</div>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="fields_edu">
			
	
	
      <div class="form-group">
      <label for="usr" id="field_label">Choose Category<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="category"  required>
		<!-- <option value=""> -- Choose -- </option> -->
    <!-- <option value="<?php $single['category'];?> "><?php echo $single['category']; ?></option> -->

		<option value="Industry_News" <?php if($single['category'] == "Industry_News"){echo "selected";} ?> >News</option>
		<option value="farmers_club" <?php if($single['category'] == "farmers_club"){echo "selected";} ?>>Farmer's Club</option>
		<option value="Success_Stories" <?php if($single['category'] == "Success_Stories"){echo "selected";} ?>>Success Storie's</option>
		<option value="Co-operative's" <?php if($single['category'] == "operative"){echo "selected";} ?>>Co-operative's</option>
		<option value="ngo" <?php if($single['category'] == "ngo"){echo "selected";} ?>>NGO's</option>
		<option value="fpo" <?php if($single['category'] == "fpo"){echo "selected";} ?>>FPO's</option>
		<option value="Nurseries" <?php if($single['category'] == "Nurseries"){echo "selected";} ?>>Nurserie's</option>
		<option value="Featured" <?php if($single['category'] == "Featured"){echo "selected";} ?>>Featured</option>
		<option value="Events" <?php if($single['category'] == "Events"){echo "selected";} ?>>Events</option>
		<option value="Blogs" <?php if($single['category'] == "Blogs"){echo "selected";} ?>>Agri Dealer's</option>
		<option value="Magazines" <?php if($single['category'] == "Magazines"){echo "selected";} ?>>Magazine's</option>
		<option value="Interviews" <?php if($single['category'] == "Interviews"){echo "selected";} ?>>Interview's</option>
		<option value="Forum" <?php if($single['category'] == "Forum"){echo "selected";} ?>>Forum</option>
	   </select>		
	  
      </div>
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Title Of the content<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="i_title" placeholder="Please Enter Title"  value="<?php echo $single['news_title']; ?> " title="Please Enter Title" required>
      </div>



      <!-- <div class="form-group">
      	<label for="usr" id="field_label">Select State <span style="color:red;"></span></label>
      	<select class="form-control" id="usr" name="city_id">
      		<option value=""> --Choose State-- </option>
			 <option value="Industry_News">Andhrapradesh</option> 
			 <option value="Product_Launch">Telangana</option> 
			<?php
			//Do the query
			$query = "SELECT * FROM city order by name asc";
			$result = mysql_query($query);
			//iterate over all the rows

			while($row = mysql_fetch_assoc($result)){ ?>  
                 <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option> 
			     <?php } ?>
             ?>
      	</select>
      </div> -->



      <!-- <div class="form-group">
      	<label for="state" id="field_label">Select State <span style="color:red;"></span></label>
      	<select class="form-control selectClass" id="state" name="state" onchange="getDistrict(this.value);">
      		<option value=""> --Choose State-- </option> 
            <?php foreach ($state_array as $key => $value) { ?>
                <option  value="<?php echo $value['state_id']; ?>"><?php echo $value['state_name']; ?></option>
            <?php } ?>
      	</select>
      </div>

      <div class="form-group districtd" id="districtd">
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
      </div> -->
<!-- 

      <?php
          $country_array = array();
          $sql_services = mysql_query("SELECT * FROM `country` ");
          ?>
          <?php
          while ($services = mysql_fetch_assoc($sql_services)) {
              $country_array[] = $services;
          }
          ?> -->


<!--       <div class="form-group districtd" id="districtd">
        <label for="district" id="field_label">Select District <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="district" name="district">
          <option value=""> --Choose District-- </option>
        </select>
      </div> -->
      
<!--           <div class="form-group districtdiv">
              <label for="country" id="field_label">Select Country <span style="color:red;"></span></label>
              <select class="form-control selectClass" name="country" id="country" onchange="getState(this.value);">
                  <option selected="" value="">Select Country</option>
                  <?php foreach ($country_array as $key => $value) { ?>
                      <option  value="<?php echo $value['coun_id']; ?>"><?php echo $value['coun_name']; ?></option>
                  <?php } ?>
              </select>
          </div> -->


       <?php 
        $state_array = array();
        $sql_services = mysql_query("SELECT * FROM `state` ");
        while ($services = mysql_fetch_assoc($sql_services)) {
            $state_array[] = $services;
        }
      ?> 

      <div class="form-group">
          <?php 
           $city= "SELECT news_world_news.state, state.state_name FROM news_world_news INNER JOIN state ON news_world_news.state = state.state_id where news_world_news.id = '".$id_modal."' ";
           // echo $city ;exit;
           $state_val= mysql_query($city);
           $row=mysql_fetch_array($state_val);
           // print_r($row);exit;
          ?>
        <label for="state" id="field_label">Select State <span style="color:red;"></span></label>

          <select class="form-control selectClass" id="state" name="state" onchange="getDistrict(this.value);">

          <!-- <option value="<?php echo $row['state']; ?>"><?php echo $value['state_name']; ?> </option>  -->
       
          <option value=""> --Choose State-- </option> 
            <?php foreach ($state_array as $key => $value) { ?>
                <option  value="<?php echo $value['state_id']; ?>" <?php if($row['state'] == $value['state_id'] ){ echo "selected";} ?> ><?php echo $value['state_name']; ?></option>
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




      <!-- <div class="form-group">
      	<label for="usr" id="field_label">Select Mandal <span style="color:red;"></span></label>
      	<select class="form-control" id="usr" name="city_id">
      		<option value=""> --Choose Mandal-- </option>
			<option value="Industry_News">Mandal 1</option> 
			<option value="Product_Launch">Mandal 2</option>
			<?php

			 
			//Do the query
			$query = "SELECT * FROM city order by name asc";
			$result = mysql_query($query);
			//iterate over all the rows
			while($row = mysql_fetch_assoc($result)){ ?>  
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
			     <?php } ?>
             ?>
      	</select>
      </div>

      <div class="form-group">
      	<label for="usr" id="field_label">Select Village <span style="color:red;"></span></label>
      	<select class="form-control" id="usr" name="city_id">
      		<option value=""> --Choose Village-- </option>
			<option value="Industry_News">Village 1</option> 
			<option value="Product_Launch">Village 2</option>
			<?php
			//Do the query
			$query = "SELECT * FROM city order by name asc";
			$result = mysql_query($query);
			//iterate over all the rows
			while($row = mysql_fetch_assoc($result)){ ?>  
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
			     <?php } ?>
             ?>
      	</select>
      </div> -->


        <div class="form-group">
    <label for="usr" id="field_label" style="float: left;">Uploaded Image</label>
    <div class='col-md-6'>

    <?php
    if( !empty($single['file_content'])){ 
    if($single['file_type']=="1")
    {
      
      echo "<a href='News_Uploads/Worldnews/".$single['file_content']."' target='_blank'><img style='width:50%;height:50%;' src='News_Uploads/Worldnews/".$single['file_content']."' /></a><br>";
    }
    else if($single['file_type']=="2")
    {
      ?>
      <!--
      <video width="50px" height="50px"></video>-->
       <video style="width:100%;height:250px;"  controls>
          <source src="<?php echo("News_Uploads/Worldnews/".$single['file_content']); ?>" >
      </video> 
      
      <?php
    }
    }?>
    </div>

        <input type="hidden"  class="form-control" name="old_image" accept="file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video" value="<?php echo $single['file_content']; ?>" />

    <input type="file"  class="form-control" name="new_image" accept="file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"  /> 

    <!-- <input type="file"  class="form-control" name="i_upload" accept="file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video" required="required" />  -->
  <br/>
  
  
  </div> 

  <textarea name="i_editt"  id="summernote" style="height:1320px; max-width:1320px;" > 
      <div style="width:100%;" id="datac" >
        <!-- <input type="" name="i_editt" value="<?php if(isset($single['content']) && !empty($single['content'])){ echo $single['content']; } ?>"></input> -->
        <?php echo $ss; ?>
      </div>
  </textarea>

    <div class="" name="modal_id" >
      <input id="modal_id" type="hidden" name="id_modal" value="<?php echo $id_modal; ?>">
    </div>

    <center><input type ="submit"  value ="Submit" name="submit" class="btn btn-success"></center><br>
</form>
			</div>
	
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


<?php } ?>
            


</body>
</html>
<script>
$("#editor").summernote({
   'height':1200,

});
</script>
<script>




    // function getState(countryId) {
    //     countryId = countryId.split(',')[0];
    //     $.ajax({
    //         type: "POST",
    //         dataType: 'html',
    //         url: "<?php echo $site_url ?>/Administrator/location_search_ajax_edit.php",
    //         data: {
    //             "parameter": countryId,
    //             "method": "state_ajax",
    //         },
    //         cache: false,
    //         success: function (data) {
    //             $('#statediv').html(data);
    //         }
    //     });
    // }


    function getDistrict(stateId) {

      var id_modal = $('#modal_id').val();
        stateId = stateId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url; ?>/Administrator/location_search_ajax_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": stateId,
                "method": "district_ajax",
            },
            cache: false,
            success: function (data) {
                $('#districtdiv').html(data);
                 // if( disval != '' ){
                  var districtId= $('#district').val();
                  getMandal(districtId);
                // }
            }
        });
    }


    function getMandal(districtId) {
      var id_modal = $('#modal_id').val();
        districtId = districtId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": districtId,
                "method": "mandal_ajax",
            },
            cache: false,
            success: function (data) {
                $('#mandaldiv').html(data);
                var mandalId = $('#mandal').val();
                getVillage(mandalId);
            }
        });
    }


    function getVillage(mandalId) {
      var id_modal = $('#modal_id').val();
        mandalId = mandalId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": mandalId,
                "method": "village_ajax",
            },
            cache: false,
            success: function (data) {
                $('#villagediv').html(data);
                // var village = $('#village').val();
            }
        });
    }


  $(document).ready(function(){

  if($('#state').val() != ''){
    var stateId = $('#state').val();
     getDistrict(stateId);
  }



  // if($('#district').val() != ''){
  //   var districtId = $('#district').val();
  //    getMandal(districtId);
  // }


  // if($('#mandal').val() != ''){
  //   var mandalId = $('#mandal').val();
  //    getVillage(mandalId);
  // }


});
</script>
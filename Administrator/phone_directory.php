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
// date_default_timezone_set("Asia/Kolkata");
// $date=date('Y-m-d');
// $time=date('H:i:s');
// $day=date('d');
// $month=date('m');
// $year=date('Y');

// $asd=date('Y-m-d H:i:s');	
// $post_code=strtotime($asd);
	$getsignle = new Dbcon;
	// $i_title=$_POST['i_title'];
	$name=$_POST['con_name'];
	$number=$_POST['number'];
	// $city_id=$_POST['city_id'];
	$category=$_POST['category'];

	$state=$_POST['state'];
	  $district=$_POST['district'];
	  $mandal=$_POST['mandal'];
	  $village=$_POST['village'];
	
	


	if($_SESSION['head']=="Admin")
	{
	    $st=1;
	}
	else
	{
	    $st=0;
	}




	$ins="INSERT INTO phone_direct (category,con_name,phone_number,state,district,mandal,village,admin_status,posted_by,status)
VALUES ('".$category."','".$name."','".$number."','".$state."','".$district."','".$mandal."','".$village."','".$st."','".$_SESSION['head']."','1')";
// print_r($ins);exit;

$sele=mysql_query($ins);

	if($sele)
	{
	echo"<script>
	alert('successfully inserted');
			window.location.href='phone_directory.php';
			</script>";
			exit;
	}
	else
	{
	echo"<script>
	alert('Unable to process');
			window.location.href='phone_directory.php';
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
					<div class="col-sm-9" id="edu_type_label"> Add Phone Directory</div>
					<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
					<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
					<a href="phone_directoryreports.php" style="color:white;">View Phone Directory </a></span>
					</div>
						<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

					<div class="col-sm-12" id="b_content">


							<div class="col-sm-1"></div>
							<div class="col-sm-10" id="fields_edu">
							


					  <div class="form-group">
					  <label for="usr" id="field_label">Choose Category<span style="color:red;"></span></label>
					  <select class="form-control" id="usr" name="category"  required>
						<option value=""> -- Choose -- </option>
						<?php
						//Do the query
						$query = "SELECT * FROM phone_category";
						$result = mysql_query($query);
						//iterate over all the rows
						while($row = mysql_fetch_assoc($result)){ ?>  
				            <option value="<?php echo $row['id']; ?>"> <?php echo $row['phone_cate']; ?> </option>
						     <?php } ?>
				         ?>
						<!--	<option value="agri_horti_officers">Agri / Horti officers</option>
						<option value="police_officers">Police officers</option>
						<option value="revenue_officers">Revenue officers</option>
						<option value="press_journalists">Press /Journalists</option>
						<option value="political_leaders">Political leaders</option> -->
					   </select>		
					  
					  </div>


							
					  <div class="form-group">
					  <label for="usr" id="field_label">Name<span style="color:red;"></span></label>
					  <input type="text" class="form-control" id="usr" name="con_name" placeholder="Please Enter Name"  title="Please Enter Name" required>
					  	 
					  </div>

					  <div class="form-group">
					  <label for="usr" id="field_label">Mobile Number<span style="color:red;"></span></label>
					  <input type="number" pattern="[0-9]" class="form-control" id="usr" name="number" placeholder="Please Enter Mobile Number"  title="Please Enter Mobile Number" required>
					  	 
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

						
					<!-- 	<div class="form-group">
					<label for="usr" id="field_label">Upload Image</label>
					<input type="file"  class="form-control" name="i_upload" "file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"/>	
					<br/>	
					</div> -->
					<!--   	<textarea id="summernote" name="i_editt"  style="height:1320px; max-width:1320px;" >
					<div style="width:100%;" id="datac">
					</div>
					</textarea> -->

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
            	// alert(data);
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
</script>
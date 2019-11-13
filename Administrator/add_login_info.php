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
	
	
	$i_title1=$_POST['first'];
 
	 	$i_title2=$_POST['last'];
	$i_title3=$_POST['email'];
	$i_title4=$_POST['mobile'];
	$i_title5=$_POST['state'];
	$i_title6=$_POST['city'];
	$i_title7=$_POST['village'];
	$i_title8=$_POST['pass'];
	$i_title9=$_POST['login_type'];
	$i_title10=$_POST['area'];


	$table="create_login";
	$columns="firstName,lastName,email,mobile,state,city,town,password,login_type,area_name";
	$column_values="'".$i_title1."','".$i_title2."','".$i_title3."','".$i_title4."','".$i_title5."','".$i_title6."','".$i_title7."','".$i_title8."','".$i_title9."','".$i_title10."'";
	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo"<script>
alert('successfully Created');
		window.location.href='add_login_info.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process. Please try again.!');
		window.location.href='add_login_info.php';
		</script>";
		exit;	
}	
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmers Watcher - Create Logins</title> 
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
	<div class="col-sm-9" id="edu_type_label"> Add User</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="user_logins.php" style="color:white;">View Login Reports </a></span>
	</div>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="fields_edu">
			
	
	
     
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">First Name<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="first" placeholder="Please Enter First Name" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div>
	

				
      <div class="form-group">
      <label for="usr" id="field_label">Last Name<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="last" placeholder="Please Enter Last Name" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div>
            <div class="form-group">
      <label for="usr" id="field_label">Mobile<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="mobile" placeholder="Please Enter Mobile"  title="Please Enter Title" required>
	  	 
      </div>
		
		
	      <div class="form-group">
      <label for="usr" id="field_label">Email<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="email" placeholder="Please Enter  Email"  title="Please Enter Title" required>
	  	 
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

      
      
      <!-- <div class="form-group">
      <label for="usr" id="field_label">State<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="state" placeholder="Please Enter State" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div>
      
      
            <div class="form-group">
      <label for="usr" id="field_label">District<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="city" placeholder="Please Enter City" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div>

            <div class="form-group">
      <label for="usr" id="field_label">Mandal<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="village" placeholder="Please Enter Town/Village" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div>
      
            <div class="form-group">
      <label for="usr" id="field_label">Village<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="village" placeholder="Please Enter Town/Village" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Title" required>
	  	 
      </div> -->
      
      
      
       <div class="form-group">
      <label for="usr" id="field_label">Login Type<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="login_type"  title="Login Type" required>
          
          <option value="">-- Choose Login Type --</option>
          <option value="1">State Head</option>
          <option value="2">District Head</option>
          <option value="3">Mandal Head</option>
          <option value="4">Village Head</option>
          
          </select>
	  	 
      </div>
      
         <div class="form-group">
      <label for="usr" id="field_label">Head of Area Name<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="area" placeholder="Head of Area Name"   title="Head of Area Name" required>
	  	 
      </div>
      
      
            <div class="form-group">
      <label for="usr" id="field_label">Password<span style="color:red;"></span></label>
      <input type="password" class="form-control" id="usr" name="pass" placeholder="Please Enter Password" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Password" required>
	  	 
      </div>
			
			
			
			
			
	
	
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
    function getState(countryId) {
        countryId = countryId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax.php",
            data: {
                "parameter": countryId,
                "method": "state_ajax",
            },
            cache: false,
            success: function (data) {
                $('#statediv').html(data);
            }
        });
    }
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
</script>
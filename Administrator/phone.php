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
	
	
	$con_name=$_POST['con_name'];
	$number=$_POST['number'];
	$city_id=$_POST['city_id'];
	$category=$_POST['category'];
	// $i_upload=$_POST['i_upload'];
	// $i_edita=$_POST['i_editt'];
	
	// $i_edit=str_replace("'","",$i_edita);
	//$i_text=$_POST['i_text'];
		
		
	


	
	// $table="phone_dir";
	// $columns="created_date,created_time,created_day,created_month,created_year,con_name";
	// $columns="created_date,created_time,created_day,created_day,created_year,con_name,number,city_id,admin_status,posted_userid,category,status,posted_by";

	if($_SESSION['head']=="Admin")
	{
	    $st=1;
	}
	else
	{
	    $st=0;
	}
	
	
	// $column_values="'".$date."','".$time."','".$day."','".$month."','".$year."','".$con_name."','".$number."','".$city_id."','1','".$post_code."','".$category."','".$st."','".$_SESSION['head']."'";

	$sql = "INSERT INTO phone_dir (created_date, created_time, created_day,	created_month, created_year, con_name,number, city_id, admin_status, posted_userid, category, status, posted_by) VALUES ('".$date."', '".$time."', '".$day."', '".$month."', '".$year."', '".$con_name."','".$number."', '".$city_id."', '1', '".$post_code."', '".$category."', '".$st."','".$_SESSION['head']."')";
	$ins = mysql_query($sql);
	// print_r($sql);

	// exit;

	// $column_values="'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."'";
	//echo "'".$date."','".$time."','".$day."','".$month."','".$year."','".$i_title."','NULL','".$filetype1."','".$i_edit."','NULL','".$post_code."'";
	// $ins=$getsignle->insertrecord($table,$columns,$column_values);

	// print_r($ins);
	// exit;

if($ins)
{
echo"<script>
alert('successfully inserted');
		window.location.href='phone.php';
		</script>";
		exit;
}
else
{
echo"<script>
alert('Unable to process  ');
		window.location.href='phone.php';
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
	<div class="col-sm-9" id="edu_type_label"> Add Menu Content</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="phone_reports.php" style="color:white;">View Contact reports</a></span>
	</div>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">	

	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="fields_edu">
			
	
	
      <div class="form-group">
      <label for="usr" id="field_label">Choose Category<span style="color:red;"></span></label>
      <select class="form-control" id="usr" name="category"  required>
		<option value=""> -- Choose -- </option>

		<option value="Industry_News">News</option>
		<!-- <option value="Industry_News">News  Industry News</option> -->
		<!-- <option value="Product_Launch">News  Product Launch</option> -->
		<!-- <option value="Commudity_Update">News  Commudity Update</option> -->
		<!-- <option value="Farm">News  Farm Mechanization</option> -->
		<!-- <option value="Agri_World">News  Agriculture World</option> -->



		<option value="Health_and_Life_Style">Farmer's Club</option>
		<option value="Success_Stories">Success Storie's</option>
		<option value="Agripedia">Co-operative's</option>
		<option value="ngo">NGO's</option>
		<option value="fpo">FPO's</option>
		<option value="Nurseries">Nurserie's</option>
		<option value="Featured">Featured</option>
		<option value="Events">Events</option>
		<option value="Blogs">Agri Dealer's</option>
		<!-- <option value="Directory">Phone Directory</option> -->
		<option value="Magazines">Magazine's</option>
		<option value="Interviews">Interview's</option>
		<!--
		<option value="Media_Photo_Gallery">Media -- Photo Gallery</option>
		<option value="Media_Video">Media -- Video</option>-->
		<option value="Forum">Forum</option>
		
		
			
	   </select>		
	  
      </div>
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Name<span style="color:red;"></span></label>
      <input type="text" class="form-control" id="usr" name="con_name" placeholder="Please Enter Name"  title="Please Enter Title" required>
	  	 
      </div>

	  <div class="form-group">
	  <label for="usr" id="field_label">Mobile Number<span style="color:red;"></span></label>
	  <input type="number" pattern="[0-9]" class="form-control" id="usr" name="number" placeholder="Please Enter Mobile Number"  title="Please Enter Mobile Number" required>
	  	 
	  </div>



      <div class="form-group">
      	<label for="usr" id="field_label">Select City <span style="color:red;"></span></label>
      	<select class="form-control" id="usr" name="city_id">
      		<option value=""> --Choose City-- </option>
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
	
		
<!-- 	<div class="form-group">
    <label for="usr" id="field_label">Upload Image</label>
    <input type="file"  class="form-control" name="i_upload" "file_extension|audio *|video *|image *|media_type" placeholder="Upload Image/Video" title="Please Upload Image/Video"/>	
	<br/>
	
	
	</div>	 -->
	
		
		
	
			
			
			
			
			
			
			
<!-- 
  <textarea id="summernote" name="i_editt"  style="height:1320px; max-width:1320px;" >
  
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
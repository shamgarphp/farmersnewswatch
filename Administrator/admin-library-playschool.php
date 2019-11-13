<?php
include("config/dbconnection.php");

include("config/dbconfig.php");
$config_class = new Dbcon;

$config_class->is_session();



if(isset($_POST['submit']))
{
	$board=$_POST['board'];
	$class=$_POST['class'];
    $yearadd=$_POST['yearadd'];
	$coverphoto=$_POST['imageUpload'];
	$material=$_POST['materialUpload'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["imageUpload"]["name"]);
$extension = end($temp);
    
//echo($_FILES["imageUpload"]["type"]);
    
if ((($_FILES["imageUpload"]["type"] == "image/gif")
|| ($_FILES["imageUpload"]["type"] == "image/jpeg")
|| ($_FILES["imageUpload"]["type"] == "image/jpg")
|| ($_FILES["imageUpload"]["type"] == "image/pjpeg")
|| ($_FILES["imageUpload"]["type"] == "image/x-png")
|| ($_FILES["imageUpload"]["type"] == "image/png"))
&& ($_FILES["imageUpload"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["imageUpload"]["error"] > 0) {
    echo "Return Code: " . $_FILES["imageUpload"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["imageUpload"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("PlaySchool_Uploadsbooks/" . $_FILES["imageUpload"]["name"])) {
        $incre="1";
      $rn= $_FILES["imageUpload"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("PlaySchool_Uploadsbooks/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("PlaySchool_Uploadsbooks/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["imageUpload"]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["imageUpload"]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["imageUpload"]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $_FILES["imageUpload"]["name"]);

    }
  }
} 

else 
{
  $dyna="";
}





$rf=0;


for($i=0;$i<=$_POST['ince'];$i++)
{
	




$allowedExts = array("pdf","mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["materialUpload".$i]["name"]);
$extension = end($temp);
//echo($_FILES["materialUpload".$i]["type"]);
if ((($_FILES["materialUpload".$i]["type"] == "video/mp4")
|| ($_FILES["materialUpload".$i]["type"] == "video/mp3")
|| ($_FILES["materialUpload".$i]["type"] == "video/AVI")
|| ($_FILES["materialUpload".$i]["type"] == "video/FLV")
|| ($_FILES["materialUpload".$i]["type"] == "video/wmv")
|| ($_FILES["materialUpload".$i]["type"] == "video/MOV")
|| ($_FILES["materialUpload".$i]["type"] == "video/ASF")
|| ($_FILES["materialUpload".$i]["type"] == "video/mpg")
|| ($_FILES["materialUpload".$i]["type"] == "video/rm")
|| ($_FILES["materialUpload".$i]["type"] == "application/pdf"))
&& ($_FILES["materialUpload".$i]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["materialUpload".$i]["error"] > 0) {
    echo "Return Code: " . $_FILES["materialUpload".$i]["error"] . "<br>";
  } else {

      $dyna1=$_FILES["materialUpload".$i]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("PlaySchool_Uploadsbooks/" . $_FILES["materialUpload".$i]["name"])) {
        $incre="1";
      $rn= $_FILES["materialUpload".$i]["name"];
      $dyna1=$incre.$rn;
      //echo $rrn;

      if(file_exists("PlaySchool_Uploadsbooks/" . $dyna1))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna1=$i.$dyna1;
              if(file_exists("PlaySchool_Uploadsbooks/" . $dyna1))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["materialUpload".$i]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $dyna1);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["materialUpload".$i]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $dyna1);
              }
    } else {
      move_uploaded_file($_FILES["materialUpload".$i]["tmp_name"],
      "PlaySchool_Uploadsbooks/" . $_FILES["materialUpload".$i]["name"]);

    }
  }
} 


else 
{
  $dyna1="";
}


$mime = $_FILES["materialUpload".$i]['type'];
if(strstr($mime, "video/")){
$filetype = "video";
}else{
$filetype = "pdf";
}
	
	date_default_timezone_set("Asia/Kolkata");
	
	$date=date("Y-m-d");
	$time=date("h:i:s");
	$month=date('m');
	$year=date('y');
    
	$tab_name="playscl_library";
    
    
	$columns="created_date,created_time,Month,Year,boardtype,yearadd,Class,cover_image,material_image,filetype,material_type";
	$col_values="'".$date."','".$time."','".$month."','".$year."','".$board."','".$yearadd."','".$class."','".$dyna."','".$dyna1."','".$filetype."','".$mime."'";
	
	//$result=$config_class->insertrecord($tab_name,$columns,$col_values);
	    $result23=$config_class->insertrecord($tab_name,$columns,$col_values);
    
   
   
    
	if($result23)
	{
		$rf=1;
	}
}
if($rf==1)
{
	echo"<script>
	alert('Successfully Inserted');
	window.location.href='admin-library-playschool.php';
	</script>";
	exit;
	
}
else
{
	echo"<script>
	alert('Unable to process your request. Please try again.');
	window.location.href='admin-library-playschool.php';
	</script>";
	exit;
}

}	

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - PlaySchool Library</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />

<link rel="stylesheet" href="css/user.css" type="text/css">
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









<!-- header -->

<!-- body content  -->

<div class="content" style="padding-top:20px;">
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" name="f1" method="post" enctype="multipart/form-data">

<?php
/*
'Swami','Reddy','swami.sri024@gmail.com','9676807124','swami024','swami024'
--------------------------- getting lattitude and longitude -----------------------------------------------


$address = 'Pedana, Andhra Pradesh, India,    
Mangaon, Maharashtra, India'; 
$prepAddr = str_replace(' ','+',$address);

$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

$output= json_decode($geocode);

// echo "<pre>";
// print_r($output);

$lat = $output->results[0]->geometry->bounds->northeast->lat;
$long = $output->results[0]->geometry->bounds->northeast->lng;
// $lati=round($lat,6);
// $longi=round($long,6);

echo $address.'<br>Lat: '.$lat.'<br>Long: '.$long;
*/
/*
date_default_timezone_set("Asia/Kolkata");
echo(strtotime("now") . "<br>");
echo(date('d-m-Y') . "sdf<br>");
echo(date('Y-m-d H:i:s') . "sdf<br>");echo(date('now') . "sdfaaaaa<br>");


$asd=date('Y-m-d H:i:s');
echo(strtotime($asd));

$start = date("Y-m-d"); 
$expiry_date = date('2017-11-16');
echo($start."<br/>");
echo($expiry_date."<br/>");

$rf=$expiry_date-$start; 
echo(date('d' strtotime("31536000")));


$date1=date_create($start);
$date2=date_create($expiry_date);
$diff=date_diff($date1,$date2);
echo $diff->format("%a");

$start = date("Y-m-d"); 
$expiry_date = date('Y-m-d', strtotime('365 days')); 

*/
?>   
   <div class="col-sm-3" id="edu_type_label_user" style="font-size:18px;"> PlaySchool Library</div>
	<div class="col-sm-9" style="border:0px solid red;text-align:right;">
	<span style="padding-left:10px;"><a href="playscl_libraryreports.php" id="sub_labels" style="color:#FF9933;text-shadow:0px 0px 0px;-webkit-text-shadow:0px 0px 0px;-moz-text-shadow:0px 0px 0px;"> View Reports </a></span>
	
	&nbsp;
	</div>
	
<div class="col-sm-12" id="side_label_user" style="padding:8px;margin-top:15px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Add PlaySchool Books / Videos

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus1"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus1"></span>
	</a>
	</div>
	</div>
	<div class="col-sm-12" id="data_user1"  style="padding:0px;margin:0px;" >
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		<div class="col-sm-12" style="border:0px solid grey;">
            <div class="col-sm-1" ></div>
	<div class="col-sm-5" style="border:0px solid grey;">
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
           
	<div class="col-sm-5" style="border:0px solid grey;" >
	<div class="form-group" >
<select class="form-control" name="class"  id="cls"  required >
	  <option  value="">  -- Select class-- </option>
	   
        	
	  </select>   
</div>
	</div>
	  <div class="col-sm-1" ></div>
	</div>
	<div class="col-sm-12" style="border:0px solid grey;">
		 <div class="col-sm-1" ></div>
	<div class="col-sm-5" style="border:0px solid grey;">
<div class="form-group">
    <label for="exampleInputEmail1"><b>Cover Photo</b></label>
   
    <input type="file"  onchange="readURL2(this);" class="form-control" name="imageUpload" id="imageUpload">
   
  </div>
	</div>	
       
	<div class="col-sm-5" style="border:0px solid grey;">
<div class="form-group input-files">
    <label for="exampleInputEmail1"><b>Material PDF / Video</b></label>
   
    <input type="file"  onchange="readURL2(this);" class="form-control" name="materialUpload0" id="materialUpload">

  </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">  <div class="add-more-cont"><a id="add_more"><input type="button" class="edu_btn" id="btnAdd" name="add"  value="Add Material" style="font-size:11px;margin-top:25px;margin-left:-20px;font-weight:bold;background-color:#FF6666;width:100px;height:30px;border-radius:2px;"></div></div>
	
	 <center><div class="col-sm-12" style="text-align:center;margin-bottom:50px;margin-top:20px;">
        <input type="hidden" id="vl" name="ince" value="0" />
        
       <input type="submit" class="btn btn-success"  name="submit" value="Submit">
        
        </div></center>
	

	</div>
	</div>
	</form>	
</div>


<!-- body content end -->
<div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
 <?php   require_once("includes/footer.php"); ?>
</div>         
                </div>
            </div>
        </div>
            </body></html>
<script>
$(document).ready(function(){
    var max_fields_limit   = 100;
	var id = 0;
    var x = 1;
	$("#add_more").click(function(e){
        e.preventDefault();
		var showId = ++id;
		document.getElementById('vl').value=showId;
	 if(x < max_fields_limit)
		{
             x++;
			$('.input-files').append('<div> <input type="file"   class="form-control" name="materialUpload'+showId+'"  style="margin-top:30px;"><a href="" class="remove_field" ><img src="delete3.jpg" style="margin-top:-55px;margin-left:390px;width:20px;height:30px;"></a></div>'  );
                                     
                                     
		}
         
	});
      $('.input-files').on("click",".remove_field", function(e){ //user click on remove text links
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
        
        
});
</script>
`

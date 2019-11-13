<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");

$getsignle = new Dbcon;
$getsignle->is_session();
/*
if(!$_SESSION['edu_type']=="1" || !$_SESSION['edu_type']=="2" || !$_SESSION['edu_type']=="3")
{
	echo"<script>
	window.location.href='index.php';
		</script>";
		//exit;
}
else
{
	$mgmtid=$_SESSION['management'];
}*/





if(isset($_POST['submit']))
{
	
	$valu=0;
	
date_default_timezone_set("Asia/Kolkata");

$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('Y-m');
$year=date('Y');

$asd=date('Y-m-d H:i:s');
$faculty_code=strtotime($asd);


$login_user=$_SESSION['admin_id'];
	
	/*-------------------------insert code------------------------------------*/
	

	$itext=$_POST['ptext'];
	$ides=$_POST['des'];
	$opradio=$_POST['optradio'];
		

	$account_columnsahei="datee,timee,dayy,monthh,yearr,mgmt_code,posting_type,posting_id,title,image,video,description,status,user_type,login_type,login_type_userid,admin_posting";
	$tableahei="mgmt_clg_posting";


if($_FILES['img']['name']!="")
{

	
$allowedExts = array("pdf", "doc", "docx", "xls", "xlsx","gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["img"]["name"]);
$extension = end($temp);
echo($_FILES["img"]["type"]);
if ((($_FILES["img"]["type"] == "application/pdf")
|| ($_FILES["img"]["type"] == "application/vnd.ms-word")
|| ($_FILES["img"]["type"] == "application/msword")
|| ($_FILES["img"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["img"]["type"] == "application/msexcel")
|| ($_FILES["img"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
||($_FILES["img"]["type"] =="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["img"]["type"] == "application/csv")
|| ($_FILES["img"]["type"] == "image/gif")
|| ($_FILES["img"]["type"] == "image/jpeg")
|| ($_FILES["img"]["type"] == "image/jpg")
|| ($_FILES["img"]["type"] == "image/pjpeg")
|| ($_FILES["img"]["type"] == "image/x-png")
|| ($_FILES["img"]["type"] == "image/png"))
&& ($_FILES["img"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["img"]["error"] > 0) {
    echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
  } else {

      $dyna=$_FILES["img"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("../Management/posting/image/" . $_FILES["img"]["name"])) {
        $incre="1";
      $rn= $_FILES["img"]["name"];
      $dyna=$incre.$rn;
      //echo $rrn;

      if(file_exists("../Management/posting/image/" . $dyna))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna=$i.$dyna;
              if(file_exists("../Management/posting/image/" . $dyna))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["img"]["tmp_name"],
      "../Management/posting/image/" . $dyna);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["img"]["tmp_name"],
      "../Management/posting/image/" . $dyna);
              }
    } else {
      move_uploaded_file($_FILES["img"]["tmp_name"],
      "../Management/posting/image/" . $_FILES["img"]["name"]);

    }
  }
} 
else 
{
  $dyna="No Image";
}
	 
	}
	
	
	
	//-------video code------------



if($_FILES['video']['name']!="")
	{

	
$allowedExts = array("mp4", "mp3", "AVI", "FLV", "wmv","MOV", "ASF", "mpg", "rm");
$temp = explode(".", $_FILES["video"]["name"]);
$extension = end($temp);
echo($_FILES["video"]["type"]);
if ((($_FILES["video"]["type"] == "video/mp4")
|| ($_FILES["video"]["type"] == "video/mp3")
|| ($_FILES["video"]["type"] == "video/AVI")
|| ($_FILES["video"]["type"] == "video/FLV")
|| ($_FILES["video"]["type"] == "video/wmv")
|| ($_FILES["video"]["type"] == "video/MOV")
|| ($_FILES["video"]["type"] == "video/ASF")
|| ($_FILES["video"]["type"] == "video/mpg")
|| ($_FILES["video"]["type"] == "video/rm"))
&& ($_FILES["video"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["video"]["error"] > 0) {
    echo "Return Code: " . $_FILES["video"]["error"] . "<br>";
  } else {

      $dyna1=$_FILES["video"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("../Management/posting/video/" . $_FILES["video"]["name"])) {
        $incre="1";
      $rn= $_FILES["video"]["name"];
      $dyna1=$incre.$rn;
      //echo $rrn;

      if(file_exists("../Management/posting/video/" . $dyna1))
          {

          for($i=2;$i<=2000000;$i++)
              {
                            $dyna1=$i.$dyna1;
              if(file_exists("../Management/posting/video/" . $dyna1))
                  {

                  }
                  else
                      {
                       move_uploaded_file($_FILES["video"]["tmp_name"],
      "../Management/posting/video/" . $dyna1);
                       break;
                      }


              }

          }
          else
              {
       move_uploaded_file($_FILES["video"]["tmp_name"],
      "../Management/posting/video/" . $dyna1);
              }
    } else {
      move_uploaded_file($_FILES["video"]["tmp_name"],
      "../Management/posting/video/" . $_FILES["video"]["name"]);

    }
  }
} 
else 
{
  $dyna1="No Video";
}

	}
	
	
	
	
	
	
	$colvalahpei="'".$date."','".$time."','".$day."','".$month."','".$year."','".$login_user."','".$opradio."','".$faculty_code."','".$itext."','".$dyna."','".$dyna1."','".$ides."','1','Admin','".$login_userid."','".$login_user."','1'";
	
	
	$getting=$getsignle->insertrecord($tableahei,$account_columnsahei,$colvalahpei);
	

	
// tutions	

$dbcct=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_tuitions");

 mysqli_query($dbcct,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbcct);


// play school



$dbccp=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_playschool");

mysqli_query($dbccp,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbccp);


// consultancy

$dbcc=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_consultancy");

	mysqli_query($dbcc,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbcc);



// // second option



// college school institute

/*

$dbcct=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_bteam_edu1");

 mysqli_query($dbcct,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbcct);
*/




// tutions	

$dbcct=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_tuitions1");

 mysqli_query($dbcct,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbcct);


// play school



$dbccp=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_playschool1");

mysqli_query($dbccp,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbccp);


// consultancy

$dbcc=mysqli_connect("localhost","bslatecoin_bteam_user","bteam_edu$243","bslatecoin_consultancy1");

	mysqli_query($dbcc,"insert into mgmt_clg_posting($account_columnsahei) values($colvalahpei) ");

mysqli_close($dbcc);



	if($getting)
	{
		$suc=base64_encode("succ");
		echo"<script>
		window.location.href='universal_postings.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='universal_postings.php?notsucc=".$fail."';
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">

tr:nth-child(even) 
{
    background-color: #F0F0F0;
}

tr:nth-child(odd) 
{
    background-color: white;
}
#rg:hover
{
    background-color: lightgrey;	
}

#ths th
{
	font-weight:bold;color:#606060 ;
}

</style>

<script>    
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
       $("#radio_student").show(800)
      }
     else
     {
       $("radio_management").hide(800);
     }
   });
});

/*
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
});*/

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
<div class="content" style="padding:0px;margin-bottom:100px;">
    <!--<img src="../Management/posting/image/obitelj.jpg" >-->
	<div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:0px;border:0px solid grey;">
	
	<div class="col-sm-12" id="edu_type_label"> Add Postings	
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;padding:1px;"></span>	
	</div>
	
	
	<div class="col-sm-12"style="border:1px solid lightgrey;padding:10px 0px;">	
	
	<div class="col-sm-12">	
	<div class="col-sm-3"></div>		 		
	<div class="col-sm-6">	
	
	
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
	{	
		if(base64_decode($_GET['notsucc'])=="wrong")
		{
				
	?>
	<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
	<?php
		}
	}
	if(isset($_GET['uni']))
	{
		$nm=base64_decode($_GET['uni']);
	?>
	<div class="alert alert-warning" id="alert_label_fail">Subject Name[ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</div>
	<?php
	}
	?>
	</div>
	</div>
	
	
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	
	<div class="col-sm-12" style="margin-top:20px;">
	<div class="col-sm-3" ></div>

	<div class="col-sm-6" >
	
		<div class="form-group">
             
     <label for="usr" id="field_label">Posting Type:</label> <br>
          
		&emsp;<input type="radio"  name="optradio" id="std_radio" value="text" style="margin-top:20px;" checked > Text 
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio"  name="optradio" id="facul_radio" value="image"  > Image
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio"  name="optradio" id="mgmt_radio" value="video"  > Video
			  
     </div>
	 </div>
	 
	<div class="col-sm-3">  </div>
	</div>
	
	<!-------------Radio Text----------->
	<div class="col-sm-12" id="radio_student">
	<div class="col-sm-12" style="padding:0px;">
	   <div class="col-sm-3" ></div>
	     <div class="col-sm-6" style="display:none;">
	       <div class="form-group">
              <label for="usr" id="field_label">Text:</label>
               <input type="text" class="form-control" id="textt" name="ptext" title="Please Enter Text"  >
			
          </div>
	     </div>
	    
	   <div class="col-sm-3" ></div>
	</div>
	</div>
	
	<!-------------Radio Image-->
	<div class="col-sm-12" id="radio_faculty" style="display:none;">
	<div class="col-sm-12" style="padding:0px;">
	   <div class="col-sm-3" ></div>
	     <div class="col-sm-6" >
	       <div class="form-group">
              <label for="usr" id="field_label">Image:</label>
              <input type="file" class="form-control" id="txt_guest" name="img" title="Please Select Image"  >
          </div>
	     </div>
	    
	   <div class="col-sm-3" ></div>
	</div>
	</div>
	
	
	<!-------------Radio Video------>
	<div class="col-sm-12" id="radio_management" style="display:none;">
	<div class="col-sm-12" style="padding:0px;">
	   <div class="col-sm-3" ></div>
	     <div class="col-sm-6" >
	       <div class="form-group">
              <label for="usr" id="field_label">Video:</label>
              <input type="file" class="form-control" id="txt_guest" name="video" title="Please Select Video" >
          </div>
	     </div>
	   
	   <div class="col-sm-3" ></div>
	</div>
	</div>
	
	<div class="col-sm-12" >
	<div class="col-sm-3" ></div>

	<div class="col-sm-6" >
	
		<div class="form-group">
              
           <label for="usr" id="field_label">Description:</label>
              <textarea rows="4" cols="50" class="form-control" id="txt_organizer" name="des" title="Please enter Description Name"></textarea>
			  
     </div>
	 </div>
	 
	<div class="col-sm-3" >  </div>
	</div>
	
	
	
	

	
	
	
	
	
	 <div class="col-sm-12"  style="margin-top:-10px;padding:10px;">
	   <div class="form-group">
       <center> <input type="submit" class="edu_btn" name="submit" value="Submit" style="background-color:green;"></center>
	  </div>
   </div>
  </form>	
	</div>	
			
				

	</div>
	
</div>	
	
	<!--------------------------Table Data--------------------->

	
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
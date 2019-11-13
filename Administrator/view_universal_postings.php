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


<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:0px;border:0px solid grey;">
	
	<div class="col-sm-12" id="edu_type_label"> View Universal Postings	
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;padding:1px;"></span>	
	</div>
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >
	
	<div class="table-responsive">
	<form action="view_universal_postings.php" method="post" enctype="multipart/form-data">
	<table class="table table-hover" style="border:1px solid lightgrey;"> 
    <tr id="ths" >
		<th style="text-align:center;"><input type="checkbox" id="selectall"/></th>
        <th style="text-align:center;">SNO</th>
        <th style="text-align:center;">Text</th>
        <th style="text-align:center;">Description</th>
        <th style="text-align:center;">Image</th>
		 <th style="text-align:center;">Video</th>
		<th style="text-align:center;">Action</th>      
    </tr>
	
	
<?php

	
	$tab_name_sea="mgmt_clg_posting";
	$whrs_sea="where admin_posting='1'";	
	$sele_sea=$getsignle->select_query($tab_name_sea,$whrs_sea);
	$inc=0;
	
	
	while($row=mysql_fetch_array($sele_sea))
	{	
		$inc++;
	
?>
		
	

	<tr id="rg" style="text-align:center;">
	
		<td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/></td>
		<td><?php echo($inc); ?></td>		
		<td ><?php 
		
		if($row['title']!="")
		{
			echo($row['title']);
		}
		else
		{
			echo "-";
		}
		?>
		</td>
		
		<td>
		<?php 
		
		if($row['description']!="")
		{
			echo($row['description']);
		}
		else
		{
			echo "-";
		}
		?>
		</td>
		
		
		<td>
		<?php 
		
		if($row['image']!="")
		{
			?>
			<img src="../Management/posting/image/<?php echo($row['image']); ?>"  style="width:50px;height:50px;"/>
			<?php
		}
		else
		{
			echo "-";
		}
		?>
		
		
		</td>
		<td>
			<?php 
		
		if($row['video']!="")
		{
			?>
			<video src="../Management/posting/video/<?php echo($row['video']); ?>" style="width:80px;height:100px;" controls></video>
		
			<?php
		}
		else
		{
			echo "-";
		}
		?>
		
		</td>
		
		<td style="">
		
		<a href="view_universal_postings.php?view_edu&remove=<?php echo(base64_encode($row['id'])) ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove">
		<span class="glyphicon glyphicon-trash"></span></a>
		</td>	
    </tr>
	<?php
	}
	if($inc=="0")
	{
	?>
	<tr>
		<td colspan="7" style="text-align:center;color:red;">No Results</td>
	</tr>
	<?php
	}
	?>		
	<tr>  
		<td colspan="7">  
		<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" /> 
		</td>  
	</tr>
	</table>
	</form>
						
	</div>
	</div>
			
				

	</div>

</div>	
	<br/><br/>	<br/><br/>	

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
	/*$tab_name_sea="mgmt_clg_posting";
	$whrs_sea="where mgmt_code='".$_SESSION['management']."'";	
	$sele_sea=$getting->select_query($tab_name_sea,$whrs_sea);*/

if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="mgmt_clg_posting";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where id='".$item."' and admin_posting='1'";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		//$sucd=base64_encode("delsucc");
		echo"<script>
		alert('Successfully removed.!');
		window.location.href='view_universal_postings.php';
		</script>";
		exit;
	}
	else
	{
		echo"<script>
		alert('Unable to process your request!');
		window.location.href='view_universal_postings.php';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	
	$datas=base64_decode($_GET['remove']);
	$table="mgmt_clg_posting";
	$wher="where id='".$datas."'  and admin_posting='1'";
	
	$delsdata=$getsignle->deleterecord($table,$wher);	
	
	if($delsdata)
	{
		echo"<script>
		alert('Successfully removed.!');
		window.location.href='view_universal_postings.php';
		</script>";
		exit;
	}
	else
	{
		echo"<script>
		alert('Unable to process your request!');
		window.location.href='view_universal_postings.php';
		</script>";
		exit;
	}
}

?>

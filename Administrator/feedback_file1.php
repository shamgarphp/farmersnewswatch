<?php


include("config/dbconnection.php");
include("config/dbconfig.php");

//require_once("config/dbconnection.php");

//require_once("config/dbconfig.php");

require_once("pagination_function.php");


$getsignle = new Dbcon;
$getsignle->is_session();


if(isset($_GET['search_remove']))
{
	
	unset($_SESSION['search_results']);
	echo "<script>
	
	window.location.href='feedback_file.php';	
	</script>";
    exit;
}

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
<title>Bslate Education - Administrator Feedback</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

tr:nth-child(even) {
    background-color: #F0F0F0;
}

tr:nth-child(odd) {
    background-color: white;
}
#rg:hover
{
    background-color: lightgrey;
	
}
#ths th
{
font-weight:bold;color:#606060 ;
text-align:center;
}

</style>

<!-- body content  -->



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
<SCRIPT language="javascript">
			
	$(function(){

	// add multiple select / deselect functionality
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){

		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});
});
</script>

<!-- body content  -->
<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px;"> Search Feedback Reports 
	</div>
	 <div class="col-sm-12" style="border:1px solid lightgrey;padding:10px 0px;">
   <!--  <div class="col-sm-12" style="font-weight:bold;font-size:18px;color:brown;"><center>Management Complete Details</center></div>-->
	 <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	  <div class="col-sm-12">
<div class="col-sm-3">
 <div class="form-group">
         <label for="usr" id="field_label">Name:</label>
<!--	<select class="form-control" id="usr" name="name" title="Please Select Edu Type">-->
       
	    <input type="text" class="form-control"  name="name"  placeholder="Enter Name" title="Please enter Name"  >
   
	  
	</div>  
</div>
	
	<div class="col-sm-3">	
      <div class="form-group">
        <label for="usr" id="field_label">From Date:</label>
     <input type="date" class="form-control" name="frmdate" placeholder="From Date" title="please Select Date"/>	
	</div> 	   
	</div>
	<div class="col-sm-3">	
   <div class="form-group">
        <label for="usr" id="field_label">To Date:</label>
     <input type="date" class="form-control" name="todate" placeholder="To Date" title="please Select Date"/>	
</div> 
</div>
 <div class="col-sm-3">
<div class="form-group">
              <label for="usr" id="field_label">From Month</label>
             <select class="form-control"  name="frmonth" title="Please select month" >
			  <option value="">Select Month</option>
			  <option value="1">January</option>
			  <option value="2">February</option>
			  <option value="3">March</option>
			  <option value="4">April</option>
			  <option value="5">May</option>
			  <option value="6">June</option>
			  <option value="7">July</option>
			  <option value="8">August</option>
			  <option value="9">September</option>
			  <option value="10">October</option>
			  <option value="11">November</option>
			  <option value="12">December</option>
			 </select> 
      </div>		
</div>
</div>
 <div class="col-sm-12" style="margin-top:-10px;">

	<div class="col-sm-3">
	<div class="form-group">
              <label for="usr" id="field_label">To Month</label>
             <select class="form-control" name="tomonth" title="Please select month" >
			  <option value="">Select Month</option>
			  <option value="1">January</option>
			  <option value="2">February</option>
			  <option value="3">March</option>
			  <option value="4">April</option>
			  <option value="5">May</option>
			  <option value="6">June</option>
			  <option value="7">July</option>
			  <option value="8">August</option>
			  <option value="9">September</option>
			  <option value="10">October</option>
			  <option value="11">November</option>
			  <option value="12">December</option>
			 </select> 
      </div>	
    </div>
	<div class="col-sm-3">	
     <div class="form-group">
              <label for="usr" id="field_label">From Year</label>
             <select class="form-control" name="fryear" title="Please select year" >
			  <option value="">Select Year</option>
			   <?php
			 for($i=2010;$i<=date(Y);$i++)
			 {
				 ?>
				 <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				 <?php
			 }
			 ?>		
			  </select>
       </div>
	</div>
	<div class="col-sm-3">	
      <div class="form-group">
              <label for="usr" id="field_label">To Year</label>
             <select class="form-control" name="toyear" title="Please select year" >
			  <option value="">Select Year</option>
			   <?php
			 for($i=2010;$i<=date(Y);$i++)
			 {
				 ?>
				 <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				 <?php
			 }
			 ?>		     
			  </select>
         </div>
	</div>
	<div class="col-sm-3" ></div>
</div>
<div class="col-sm-12" style="margin-top:10px;">
<div class="col-sm-5"></div>
<div class="col-sm-6">
<div class="form-group">    		  
<input type="submit" class="btn btn-success"  name="search" value="Search" style="width:100px;"> 
</div>
</div> 
</div>
</div>
</div>
	
	<!--------------------------Table Data--------------------->
	<?php
	$table_export_data="";
	$table_export_data_final="";
	
	$table_export_data.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	$table_export_data_final.="<div id='example_data'><table class='table table-hover' id='example' style='border:1px solid lightgrey;'>";
	
	$table_export_data.=" <table class='table table-hover' style='border:1px solid lightgrey;'>
 
      <tr id='ths' style='font-size:13px;border:1px solid lightgrey;'>
	  <th>
	  <input type='checkbox' id='selectall'/>
	  </th>
        <th style='font-weight:bold;'>SNO</th>
		<th style='font-weight:bold;'>Name</th>
        <th style='font-weight:bold;'>Email</th>
        <th style='font-weight:bold;'>Mobile</th>
		<th style='font-weight:bold;'>Postal Address</th>
        <th style='font-weight:bold;'>Action</th>
      
      </tr>";
	  $table_export_data_final.=" <table class='table table-hover' style='border:1px solid lightgrey;'>
 
      <tr id='ths' style='font-size:13px;border:1px solid lightgrey;'>
	  
        <th style='font-weight:bold;'>SNO</th>
		<th style='font-weight:bold;'>Name</th>
        <th style='font-weight:bold;'>Email</th>
        <th style='font-weight:bold;'>Mobile</th>
		<th style='font-weight:bold;'>Postal Address</th>
      
      </tr>";
	
	 // Paggig Code1
	    $num_rec_per_page=3;
	
	    if(isset($_GET["page"])) 
	    { 
        $page  = $_GET["page"]; 
	    } 
	    else 
	    { 
        $page=1; 
	    } 
    
	    $start_from = ($page-1) * $num_rec_per_page; 
			// End Paggig Code1	          
			
			
			 error_reporting(0);
 if(isset($_POST['search']))
	{
	   $name=$_POST["name"];
	$frm_date=$_POST["frmdate"];
	$to_date=$_POST["todate"];	
	$frm_mnth=$_POST["frmonth"];
	$to_mnth=$_POST["tomonth"];	
	$frm_yr=$_POST["fryear"];
	$to_yr=$_POST["toyear"];	



$qry_sub="";
if($name!="")
{
$qry_sub=$qry_sub."name='".$name."' and ";	

}

   /* if($name!="")
	{
	    $zz=mysql_query("select * from feedback where name='".$name."' and usertype='100'");
		if($rt=mysql_fetch_array($zz))
		{
			$nam=$rt['name'];
			$qry_sub=$qry_sub."name='".$nam."' and ";

		}
	}*/

//-----------------------date wise--------------------------------

if($frm_date!="" && $to_date!="")
{
$qry_sub=$qry_sub. " (date>= '".$frm_date."' and date<='".$to_date."') and ";	
}
else if($frm_date!="")
{
	$qry_sub=$qry_sub." (date='".$frm_date."') and ";
}
else if($to_date!="")
{
$qry_sub=$qry_sub." (date='".$to_date."') and ";
}

//-----------------------Serach Month wise--------------------------------
if($frm_mnth!="" && $to_mnth!="")
{
$qry_sub=$qry_sub." (month>='".$frm_mnth."' and month<='".$to_mnth."') and ";	
echo $qry_sub;
}
else if($frm_mnth!="")
{
	$qry_sub=$qry_sub." (month='".$frm_mnth."') and ";	
}
else if($to_mnth!="")
{
	$qry_sub=$qry_sub." (month='".$to_mnth."') and ";
}
//----------------------Year  wise--------------------------------
if($frm_yr!="" && $to_yr!="")
{
$qry_sub=$qry_sub." (year>='".$frm_yr."' and year<='".$to_yr."') and ";	
}
else if($frm_yr!="")
{
	$qry_sub=$qry_sub." (year='".$frm_yr."') and ";	
}
else if($to_yr!="")
{
$qry_sub=$qry_sub." (year='".$to_yr."') and ";
}
/*else
{
	$qry_sub=$qry_sub." (year='".date('Y')."') and ";
}*/

 if ($qry_sub != "" && ($name !="" ||  $frm_date!="" || $to_date!="" || $frm_mnth!="" || $to_mnth!="" || $frm_yr!="" || $to_yr!="" ))
            {
			
                $qryy_sub = strlen($qry_sub)-6;
				//echo $qryy_sub;
				$as=$qryy_sub;				
				for($wq=0;$wq<=$qryy_sub;$wq++)
				{
					$thyz=$thyz.$qry_sub[$wq];	
					
				}					
            }
 	 
/*$whrs="where ".$thyz." and usertype='100'";	
	
	}
	else
	{
		$whrs="where year='".date('Y')."' and usertype='100'";	
	}*/
	
  $_SESSION['search_results']=$thyz;

	      $whrs="where ".$thyz." and usertype='100'";
	}        
	else
	{		 
			 if(isset($_SESSION['search_results']))
					{
						$whrs="where ".$_SESSION['search_results']." and usertype='100'";
	
					}
					
					else
	                 {	
	$whrs="where year=".date('Y')." and usertype='100' ";
                     }
		
		}

$tab_name="feedback";
/*$ords="  LIMIT $start_from, $num_rec_per_page";*/
//echo $whrs_sea;
$ords="ORDER By sno desc LIMIT $start_from, $num_rec_per_page";
$sele_sea=$getsignle->select_query($tab_name,$whrs,$ords);


		$inc=0;
$table_export_data.="<span style='color:green;'>Results For :</span>";
	if($name!="")
		{
			
				$query_s=mysql_query("select * from feedback where name='".$name."' and usertype='100'");
				if($rg=mysql_fetch_array($query_s))
				{
				$table_export_data.=" ".$rg['name']." ";
				} 
		}
	/*if($name!="")
		{
	$table_export_data.=" --> ".$name." ";
		}*/
		if($frm_date!="")
		{
			$table_export_data.=" --> ".$frm_date." ";
		}
		if($to_date!="")
		{
		$table_export_data.=" --> ".$to_date." ";
		}
		if($frm_mnth!="")
		{
			$table_export_data.=" --> ".$frm_mnth." ";
		}
		if($to_mnth!="")
		{
		$table_export_data.=" -->".$to_mnth." ";
		}
		if($frm_yr!="")
		{
			$table_export_data.=" --> ".$frm_yr." ";
		}
		if($to_yr!="")
		{
			$table_export_data.=" --> ".$to_yr." ";
		}
			$table_export_data.="&emsp;[".(mysql_num_rows($sele_sea))."]";	
while($row=mysql_fetch_array($sele_sea))
		{
			
		
			$inc++;	
			
			
			$table_export_data.="<tr id='rg' style='text-align:center;'>
		  <td>";
		
 $table_export_data.="<input type='checkbox' class='case' name='case[]' value='".$row['sno']."' style='text-align:center;'/>";


	
		 $table_export_data.="</td>";
		$table_export_data.="<td>".$inc."</td>";
		$table_export_data_final.="<tr id='rg'>";
				$table_export_data_final.="<td>".$inc."</td>";

$table_export_data.="<td style='text-align:center;'>";
	
$table_export_data_final.="<td style='text-align:center;'>";		
						
			$ghh=$row['name'];
				$query_s=mysql_query("select * from feedback where name='".$ghh."' ");
				if($rg=mysql_fetch_array($query_s))
				{
					$table_export_data.=" ".$rg['name']." ";
					$table_export_data_final.=" ".$rg['name']." ";
					
				} 
							
		$table_export_data.="</td>";
		$table_export_data_final.="</td>";
	
$table_export_data.="<td style='text-align:center;'>".$row['emailid']."</td>
<td style='text-align:center;'>".$row['mobile']."</td>
<td style='text-align:center;'>".$row['postadd']."
</td>
<td style='text-align:center;'>
<a href='feedback_file.php?view_edu&view=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want Hostel Details')==true){return true}else{ return false;}' title='View'>
		<span class='glyphicon glyphicon-eye-open'></span></a>
<a href='feedback_file.php?view_edu&remove=".base64_encode($row['sno'])."' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' title='Remove'><span class='glyphicon glyphicon-trash'></span></a>
</td>
</tr>";




$table_export_data_final.="		 
<td>".$row['emailid']."</td>
<td>".$row['mobile']."</td>
<td>".$row['postadd']."</td>


</tr>";
			
		}
		
		 if($inc=="0")
		{
		
		$table_export_data.="<tr>
		<td colspan='7' style='text-align:center;color:red;'>No Results</td>
		</tr>";
		}
		$table_export_data.="<tr>
        <td colspan='7'> 
        <input type='submit' onclick='javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}' class='btn btn-danger' style='height:30px;padding-top:4px;' value='Remove' name='remove_data' />
        </td>
		</tr>";

		
        $table_export_data.="</table>
		</div>";
		
		 $table_export_data_final.="</table>
		</div>";
		
		$_SESSION['data']= $table_export_data_final;
	
	?>
	<!----------- Student View Reports ------------>	
	
	<div class="col-sm-12" style="margin:0px;padding:0px;height:60px;">
		
<div class="col-sm-3" id="edu_type_label" style="padding:10px 0px;margin-top:25px;">Feedback Reports

	<a href='feedback_file.php?search_remove' class="btn btn-info btn-lg" style="padding:0px;">
          <span class="glyphicon glyphicon-refresh" style="font-size:14px;padding:6px;text-align:center;top:-2px;">Refresh</span>
        </a>	

</div>
<div class="col-sm-5" id="edu_type_label" style="border:0px solid green;" >
	<!-------------------delete alert -------------->
	
	
		<div class="col-sm-12"style="border:0px solid red;">
	 
	<?php
	 
	 	if(isset($_GET['succ']))
		{
			if(base64_decode($_GET['succ'])=="succ")
			{
			?>
			
	        <div id="alert_label_succ" class="alert alert-success alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>

		    <!--<div class="alert alert-success" id="alert_label_succ">Successfully Inserted. !</div>-->				
		    <?php
		    }
		}
		if(isset($_GET['notsucc']))
		{	
		    if(base64_decode($_GET['notsucc'])=="wrong")
		    {				
			?>
			
			<div id="alert_label_fail" class="alert alert-danger alert-top" role="alert" style="margin:0px;">
            <span class="alert-msg"></span>
            </div>
			
			<!--<div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>-->
			<?php
			}
		}
		if(isset($_GET['uni']))
		{
			$nm=base64_decode($_GET['uni']);
					
		    ?>
			
			<div id="alert_label_fail_second" class="alert alert-warning alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg">Academic Details [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</span>
            </div>
			
			<!--<div class="alert alert-warning" style="display:none;" id="alert_label_fails">University name [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</div>-->
			<?php
				
		}
		
		
		
		
		if(isset($_GET['delsucc']))
		{
			if(base64_decode($_GET['delsucc'])=="delsucc")
			{
			?>
			
					
			<div id="alert_label_succdell" class="alert alert-success alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg"></span>
            </div>
				
			<?php
			}
		}
		if(isset($_GET['delnotsucc']))
		{	
	        if(base64_decode($_GET['delnotsucc'])=="delwrong")
			{	
			?>
			<div id="alert_label_faildel" class="alert alert-danger alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg"></span>
            </div>
			
			
			<?php
			}
		}
		if(isset($_GET['unii']))
		{
			$nm=base64_decode($_GET['unii']);
						
			?>
			<div id="alert_label_fail_upd" class="alert alert-warning alert-top" role="alert" style="margin:0px;padding:10px;">
            <span class="alert-msg">Academic Details  [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	  
	
	</div>
	
		<!-------------------End delete alert -------------->
	</div>
<div class="col-sm-4" style="text-align:right;border:0px solid blue;margin-top:35px;"><b style="font-size:14px;color:#606060;">Export To :&emsp;&emsp;</b>
	<b><a href="exports.php?type=excel&filename=Feedback Reports" ><i class="fa fa-file-excel-o" style="font-size:20px;color:green;" title="Excel"></i></a></b> &nbsp;
	<b><a href="exports.php?type=word&filename=Feedback Reports" ><i class="fa fa-file-word-o"  style="font-size:20px;" title="Word"></i></a></b>  &nbsp;
	<b><a href="exports.php?type=pdf&filename=Feedback Reports" target="_blank" ><i class="fa fa-file-pdf-o" style="font-size:20px;color:red;" title="PDF"></i></a></b>
	</div>	
</div>	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >

	
			
			<div class="table-responsive">
			<form action="feedback_file.php" method="post">
			 <?php

echo($table_export_data);

?>


		<table class="table table-hover" id="aexample" style="border-top:0px solid lightgrey;border-right:1px solid lightgrey;border-left:1px solid lightgrey;border-bottom:1px solid lightgrey;">
 
		

<!------------- Pagination Code 2 ---------->
		<td colspan="4" style="text-align:center;">   
		
		<?php 
			
				if(isset($_SESSION['search_results']))
				{
					
					         $sql = "SELECT * FROM feedback where ".$_SESSION['search_results']." and usertype='100'"; 	
				}
				else
				{
                       $sql = "SELECT * FROM feedback where  year='".date('Y')."' and usertype='100' "; 
				}
        $rs_result =mysql_query($sql); //run the query
        $total_records = mysql_num_rows($rs_result);  //count number of records
	
	    //echo $total_records;
	
        $total_pages = ceil($total_records / $num_rec_per_page); 

	  
	    echo(pagination($num_rec_per_page,$page,$total_records));
	  
	  
	    ?>
		 
	
		</td>
		<!------------- End Pagination Code 2 ---------->
   
  </table>
 </form>
			
			
			
	</div>
	</div>
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

<?php
if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="feedback";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where sno='".$item."' and usertype='100' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
		alert('Successfully removed.!');
		window.location.href='feedback_file.php';
		</script>";
		exit;
	}
	else
	{
		echo"<script>
		alert('Unable to process your request. Please try again..!');
		window.location.href='feedback_file.php';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=base64_decode($_GET['remove']);
	$table="feedback";
	$wher="where sno='".$datas."' and usertype='100' ";
	
		$delsdata=$getsignle->deleterecord($table,$wher);
		
	
	
	if($delsdata)
	{
	 
		echo"<script>
		alert('Successfully removed.!');
		window.location.href='feedback_file.php';
		</script>";
		exit;
	}
	else
	{
		 
		echo"<script>
		alert('Unable to process your request. Please try again..!');
		window.location.href='feedback_file.php';
		</script>";
		exit;
	}
}

?>
<?php

if(isset($_GET['view']))
{
	$id_modal=base64_decode($_GET['view']);
	
	echo"
	<script>	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal1').modal('show');
    });
	
	</script>
	";
?>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" style="width:60%;height:100%;">
    
    <!-- Modal content-->
    <div class="modal-content" >
	
    <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
    <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">View Feedback</span>
	<button type="button" class="close" data-dismiss="modal"  style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style="height:250px">
	<br/>
	
	<?php 
	$update_tab="feedback";
	$conds="where sno='".$id_modal."' and usertype='100' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);
	?>
	
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	<div class="row">
	
	<div class="col-sm-12" style="margin-top:-10px;">
	<div class="col-sm-1" style="font-weight:bold;font-size:13px;"> Name:</div>
	<div class="col-sm-1" style="color:red">
	<?php
	
	$qwe=$single['name'];
	
	$query_s=mysql_query("select * from feedback where name='".$qwe."' and usertype='100'");
	while($rg=mysql_fetch_array($query_s))
	{
		if($qwe==$rg['name'])
		{
			echo($rg['name']);				
		}					
	}
	?>
	</div>
	
	<div class="col-sm-1" style="font-weight:bold;font-size:13px"> Mobile:</div>
		<div class="col-sm-2" style="color:red">

	<?php
	
	$qwe=$single['name'];
	
	$query_s=mysql_query("select * from feedback where name='".$qwe."' and usertype='100'");
	while($rg=mysql_fetch_array($query_s))
	{
		if($qwe==$rg['name'])
		{
			echo($rg['mobile']);				
		}					
	}
	?>
	</div>
	
	
	<div class="col-sm-1" style="font-weight:bold;font-size:13px;"> Email:</div>
	<div class="col-sm-1" style="color:red;">
	<?php
	
	$qwe=$single['name'];
	
	$query_s=mysql_query("select * from feedback where name='".$qwe."' and usertype='100'");
	while($rg=mysql_fetch_array($query_s))
	{
		if($qwe==$rg['name'])
		{
			echo($rg['emailid']);				
		}					
	}
	?>
	</div>




	</div>

	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"style="font-weight:bold;font-size:13px;">Query:</div>
	<div class="col-sm-10">
    
	
	
	<?php
	$qwe=$single['name'];
	
	$query_s=mysql_query("select * from feedback where name='".$qwe."' and usertype='100'");
	while($rg=mysql_fetch_array($query_s))
	{
		if($qwe==$rg['name'])
		{
			echo($rg['postadd']);				
		}					
	}
	?>
	</div>
	<div class="col-sm-1"></div>
	</div>
	</div>
	</div> 
    
	<div class="modal-footer" style="padding:10px;">
	<center><button type="button" class="btn btn-danger" data-dismiss="modal"  style="width:100px;">Close</button></center>
    </div>
     </form>
	</div>
	</div>
</div>
</div>
<?php }?>

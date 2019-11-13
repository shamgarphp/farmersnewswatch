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
    <div class="modal-dialog" style="width:65%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">
          
          <span class="modal-title" style="font-weight:bold;font-size:14px;color:#f8f8f8;;">View Total Details</span>
		  <button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
        </div>
        <div class="modal-body" style="height:450px;overflow-y:scroll">
		<?php
	$stuprf=mysql_query("select * from  edu_user_institution where mgmt_code='".$id_modal."'");
	if($single=mysql_fetch_array($stuprf))
	{
	
	?>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
 <div class="col-sm-12" style="font-weight:bold;font-size:15px;color:brown;text-align:center">Institution Details</div>
 <div class="col-sm-12" style="border:0px solid red;"> 
	 <div class="col-sm-10"></div>
	  <div class="col-sm-2" style="box-radius;border:1px solig lightgrey;">
	  <?php
	 if($single['institution_logo']!="")
	 {
	
      echo ('<img width=100px height=100px src="institution_logo/'.$single['institution_logo'].'" />');

	 }
	  else
	 {
		echo '<img width=100px height=100px src="noimg.png"/>';
	 }
	 ?>
	 </div>
	 </div>
<div class="row" style="padding:0px;margin:0px;">
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Country:</div>
	<div class="col-sm-2"><?php $cntry=$single['country'];
	$stuprf=mysql_query("select * from 	Country where SNO='".$cntry."'");
	if($hp=mysql_fetch_array($stuprf))
	{
		echo $hp['Countryname'];
	}?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">State:</div>
	<div class="col-sm-3"><?php $stte=$single['state'];
	$stuprf=mysql_query("select * from 	state where SNO='".$stte."'");
	if($hp=mysql_fetch_array($stuprf))
	{
		echo $hp['Statename'];
	}?></div>

	</div>	
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">City:</div>
	<div class="col-sm-2"><?php $acity=$single['city'];
	$stuprf=mysql_query("select * from 	city where SNO='".$acity."'");
	if($hp=mysql_fetch_array($stuprf))
	{
		echo $hp['City'];
	}?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Village:</div>
	<div class="col-sm-3"><?php echo $single['village'];?></div>	
	</div>
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Pincode:</div>
	<div class="col-sm-2"><?php echo $single['pincode'];?></div>
	<div class="col-sm-6"></div>
	</div>	
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Map Link:</div>
	<div class="col-sm-5"><?php echo $single['google_maplink'];?></div>
	<div class="col-sm-3"></div>
	</div>	
<?php
	}
	?>
	<?php
	$stuprf=mysql_query("select * from  edu_user_orders where mgmt_code='".$id_modal."'");
	if($single=mysql_fetch_array($stuprf))
	{
	
	?>
 <div class="col-sm-12"  style="font-weight:bold;font-size:15px;margin-top:25px;text-align:center;color:brown">Order Details</div>
<div class="row" style="padding:0px;margin:0px;">
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">No.of Student:</div>
	<div class="col-sm-2"><?php echo $single['noof_students']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">No.of Faculty :</div>
	<div class="col-sm-3"><?php echo $single['noof_faculty']; ?></div>

	</div>	
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">No.of Management:</div>
	<div class="col-sm-2"><?php echo $single['noof_management']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Name:</div>
	<div class="col-sm-3"><?php echo $single['contact_person_name'];?></div>	
	</div>
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Mobile Number:</div>
	<div class="col-sm-2"><?php echo $single['contact_person_mobile'];?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Mail Id:</div>
	<div class="col-sm-3"><?php echo $single['contact_person_mail'];?></div>	
	</div>	
	<div class="col-sm-12" style="margin-top:15px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Inst Phone Number:</div>
	<div class="col-sm-2"><?php echo $single['institution_phone'];?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Inst Mail Id:</div>
	<div class="col-sm-3"><?php echo $single['institution_mail'];?></div>	
	</div>	
	<div class="col-sm-12" style="margin-top:20px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	<table class="table table-bordered" style="border:1px solid lightgrey;">
    <tr>
	<th style="font-size:13px;font-weight:bold;">Management Cost</th>
	<th style="font-size:13px;font-weight:bold;text-align:right;"><?php echo number_format($single['mgmt_cost'],2);?></th>
	</tr>
	<tr>
	<th style="font-size:13px;font-weight:bold;">Student Cost</th>
	<th style="font-size:13px;font-weight:bold;text-align:right;"><?php echo number_format($single['student_cost'],2);?></th>
	</tr>
	<tr>
	<th style="font-size:13px;font-weight:bold;">Faculty Cost</th>
	<th style="font-size:13px;font-weight:bold;text-align:right;"><?php echo number_format($single['faculty_cost'],2);?></th>
	</tr>
	<tr>
	<th style="font-size:13px;font-weight:bold;">Management Total Cost</th>
	<th style="font-size:13px;font-weight:bold;text-align:right;"><?php echo number_format($single['management_cost'],2);?></th>
	</tr>
	<tr>
	<th style="font-size:13px;font-weight:bold;color:red;">Total Cost</th>
	<th style="font-size:13px;font-weight:bold;color:red;text-align:right;"><?php echo number_format($single['total_cost'],2);?></th>
	</tr>
	</table>
	</div>
	<div class="col-sm-1"></div>
	</div>	
</div>
<?php
	}
?>	
<?php
	$stuprf=mysql_query("select * from  edu_user_orders where mgmt_code='".$id_modal."'");
	if($single=mysql_fetch_array($stuprf))
	{
	
?>	
<div class="col-sm-12"  style="font-weight:bold;font-size:15px;margin-top:25px;text-align:center;color:brown">Payment Type</div>
<div class="row" style="padding:0px;margin:0px;">
<?php
if($single['payment_type']=="1")
{
	$stuprf=mysql_query("select * from  edu_user_payment_cash where mgmt_code='".$id_modal."'");
	if($row=mysql_fetch_array($stuprf))
	{
	
	?>
	<div class="col-sm-12" style="margin-top:25px;padding:1px;">
	<div class="col-sm-4"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;background-color:yellow">Payment Type:</div>
	<div class="col-sm-2" style="color:red;background-color:yellow"><?php echo "Cash"; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Amount:</div>
	<div class="col-sm-2"><?php echo $row['amount']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Payment Date:</div>
	<div class="col-sm-3"><?php echo $row['payment_date']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Name:</div>
	<div class="col-sm-2"><?php echo $row['contact_person_name']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Mobile Number:</div>
	<div class="col-sm-3"><?php echo $row['contact_person_mobile']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Address:</div>
	<div class="col-sm-6"><?php echo $row['contact_address']; ?></div>
	</div>
<?php	
}
}
if($single['payment_type']=="2")
{
	$stuprf=mysql_query("select * from  edu_user_payment_dd where mgmt_code='".$id_modal."'");
	if($row=mysql_fetch_array($stuprf))
	{
	?>
	<div class="col-sm-12" style="margin-top:25px;padding:1px;">
	<div class="col-sm-4"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;background-color:yellow">Payment Type:</div>
	<div class="col-sm-2" style="color:red;background-color:yellow"><?php echo "DD"; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">DD Amount:</div>
	<div class="col-sm-2"><?php echo $row['amount']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">DD Date:</div>
	<div class="col-sm-3"><?php echo $row['dd_date']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">DD Number:</div>
	<div class="col-sm-2"><?php echo $row['dd_number']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Bank Name:</div>
	<div class="col-sm-3"><?php echo $row['bankname']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Name:</div>
	<div class="col-sm-2"><?php echo $row['contact_person_name']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Mobile NUmber:</div>
	<div class="col-sm-3"><?php echo $row['contact_person_mobile']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Address:</div>
	<div class="col-sm-8"><?php echo $row['contact_address']; ?></div>	
	</div>
	<?php
	}
}
if($single['payment_type']=="3")
{
	$stuprf=mysql_query("select * from   edu_user_payment_neft where mgmt_code='".$id_modal."'");
	if($row=mysql_fetch_array($stuprf))
	{
		?>
		<div class="col-sm-12" style="margin-top:25px;padding:1px;">
	<div class="col-sm-4"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;background-color:yellow">Payment Type:</div>
	<div class="col-sm-2" style="color:red;background-color:yellow"><?php echo "NEFT / RTGS"; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">NEFT/RTGS Amount:</div>
	<div class="col-sm-2"><?php echo $row['amount']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Payment Date:</div>
	<div class="col-sm-3"><?php echo $row['neft_date']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Transaction Number:</div>
	<div class="col-sm-2"><?php echo $row['transaction_number']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Reference Number:</div>
	<div class="col-sm-3"><?php echo $row['ref_number']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Bank Name:</div>
	<div class="col-sm-2"><?php echo $row['bankname']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Account Holder Name:</div>
	<div class="col-sm-3"><?php echo $row['account_holder']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Name:</div>
	<div class="col-sm-2"><?php echo $row['contact_person_name']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Mobile Number:</div>
	<div class="col-sm-3"><?php echo $row['contact_person_mobile']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Address:</div>
	<div class="col-sm-8"><?php echo $row['contact_address']; ?></div>	
	</div>
	<?php
}	
}
if($single['payment_type']=="4")
{
	$stuprf=mysql_query("select * from   edu_user_payment_cheque where mgmt_code='".$id_modal."'");
	if($row=mysql_fetch_array($stuprf))
	{
	?>
	<div class="col-sm-12" style="margin-top:25px;padding:1px;">
	<div class="col-sm-4"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;background-color:yellow">Payment Type:</div>
	<div class="col-sm-2" style="color:red;background-color:yellow"><?php echo "Cheque"; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Cheque Amount:</div>
	<div class="col-sm-2"><?php echo $row['amount']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Payment Date:</div>
	<div class="col-sm-3"><?php echo $row['payment_date']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Name Of Cheque:</div>
	<div class="col-sm-2"><?php echo $row['nameoncheque']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Cheque Number:</div>
	<div class="col-sm-3"><?php echo $row['cheque_number']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Bank Name:</div>
	<div class="col-sm-2"><?php echo $row['bankname']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Account Holder Name:</div>
	<div class="col-sm-3"><?php echo $row['account_holder']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Person Name:</div>
	<div class="col-sm-2"><?php echo $row['contact_person_name']; ?></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Mobile Number:</div>
	<div class="col-sm-3"><?php echo $row['contact_person_mobile']; ?></div>
	</div>
	<div class="col-sm-12" style="margin-top:25px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-3" style="font-weight:bold;font-size:13px;">Contact Address:</div>
	<div class="col-sm-8"><?php echo $row['contact_address']; ?></div>	
	</div>
<?php	
}
}
?>












</div>
<?php
}
?>
</div>
  </div>     
 <div class="modal-footer" style="padding:10px;">
 <button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;">Cancel</button>
    </div>
      </form>
	</div>
   </div>
  </div>  
  <?php
  }  
  ?>
<!-- body content  -->
<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px;"> User Reports 
	</div>
	 <div class="col-sm-12" style="border:1px solid lightgrey;padding:10px 0px;">
   <!--  <div class="col-sm-12" style="font-weight:bold;font-size:18px;color:brown;"><center>Management Complete Details</center></div>-->
	 <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	  <div class="col-sm-12">
<div class="col-sm-3">
 <div class="form-group">
         <label for="usr" id="field_label">Edu Type:</label>
	<select class="form-control" id="usr" name="edu_type" title="Please Select Edu Type"> 
       <option value="">-- select Edu Type --</option>	
  <?php                                                                          
	  $tab_name="education_type";
	   $whrs="";
	   $ords="ORDER By education_name ASC";	
	$ns=$getsignle->select_query($tab_name,$whrs,$ords);
	   while($re=mysql_fetch_array($ns))
           {
            ?>
            <option value="<?php echo($re['id']); ?>"><?php echo($re['education_name']);?>    </option>
          <?php
            }
        ?>
	</select>	
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
			 for($i=2005;$i<=2050;$i++)
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
			 for($i=2005;$i<=2050;$i++)
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
	
	<div class="col-sm-12" id="edu_type_label" style="padding:10px 0px;">View Reports
	
</div>
	
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px;" >

	
			
			<div class="table-responsive">
			<form action="usertype_profile.php" method="post">
			 <table class="table table-hover" style="border:1px solid lightgrey;">
 
      <tr id="ths" style="font-size:13px;">
	  <th>
	  <input type="checkbox" id="selectall"/>
	  </th>
        <th style="font-weight:bold;">SNO</th>
		<th style="font-weight:bold;">Education Type</th>
        <th style="font-weight:bold;">Institution Name</th>
        <th style="font-weight:bold;">Institution Code</th>
		<th style="font-weight:bold;">Established Year</th>
        <th style="font-weight:bold;">Paid/Un-Paid</th>
        <th style="font-weight:bold;">Action</th>
      
      </tr>
	   	  <?php
 error_reporting(0);
 if(isset($_POST['search']))
	{
		
	$frm_date=$_POST["frmdate"];
	$to_date=$_POST["todate"];	
	$frm_mnth=$_POST["frmonth"];
	$to_mnth=$_POST["tomonth"];	
	$frm_yr=$_POST["fryear"];
	$to_yr=$_POST["toyear"];	
   $edutpe=$_POST["edu_type"];
  

$qry_sub="";
if($edutpe!="")
{
$qry_sub=$qry_sub."education_type='".$edutpe."' and ";	

}

//-----------------------date wise--------------------------------

if($frm_date!="" && $to_date!="")
{
$qry_sub=$qry_sub. " (a.datee>= '".$frm_date."' and a.datee<='".$to_date."') and ";	
}
else if($frm_date!="")
{
	$qry_sub=$qry_sub." (a.datee='".$frm_date."') and ";
}
else if($to_date!="")
{
$qry_sub=$qry_sub." (a.datee='".$to_date."') and ";
}

//-----------------------Serach Month wise--------------------------------
if($frm_mnth!="" && $to_mnth!="")
{
$qry_sub=$qry_sub." (a.monthh>='".$frm_mnth."' and a.monthh<='".$to_mnth."') and ";	
echo $qry_sub;
}
else if($frm_mnth!="")
{
	$qry_sub=$qry_sub." (a.monthh='".$frm_mnth."') and ";	
}
else if($to_mnth!="")
{
	$qry_sub=$qry_sub." (a.monthh='".$to_mnth."') and ";
}
//----------------------Year  wise--------------------------------
if($frm_yr!="" && $to_yr!="")
{
$qry_sub=$qry_sub." (a.yearr>='".$frm_yr."' and a.yearr<='".$to_yr."') and ";	
}
else if($frm_yr!="")
{
	$qry_sub=$qry_sub." (a.yearr='".$frm_yr."') and ";	
}
else if($to_yr!="")
{
$qry_sub=$qry_sub." (a.yearr='".$to_yr."') and ";
}
else
{
	$qry_sub=$qry_sub." (a.yearr='".date('Y')."') and ";
}

 if ($qry_sub != "" && ($edutpe !="" ||  $frm_date!="" || $to_date!="" || $frm_mnth!="" || $to_mnth!="" || $frm_yr!="" || $to_yr!="" ))
            {
			
                $qryy_sub = strlen($qry_sub)-6;
				//echo $qryy_sub;
				$as=$qryy_sub;				
				for($wq=0;$wq<=$qryy_sub;$wq++)
				{
					$thyz=$thyz.$qry_sub[$wq];	
					
				}					
            }
 	
	$whrs_sea="where ".$thyz." and a.mgmt_code= b.mgmt_code";	
	
	}
	else
	{
		$whrs_sea="where a.mgmt_code= b.mgmt_code and  a.yearr='".date('Y')."' and b.yearr='".date('Y')."' ";	
	}
	//echo $whrs_sea;
$tab_name_sea="edu_user_institution a, edu_user_orders b";
//echo $whrs_sea;
	$sele_sea=$getsignle->select_query($tab_name_sea,$whrs_sea);
	
		$inc=0;
		?>
	
		<span style="color:green;">Results For :</span>
		<?php
		
		if($edutpe!="")
		{
			
				$query_s=mysql_query("select * from education_type where id='".$edutpe."'");
				if($rg=mysql_fetch_array($query_s))
				{
					echo($rg['education_name']);
				} 
		}
		if($frm_date!="")
		{
			echo (" --> ".$frm_date);
		}
		if($to_date!="")
		{
			echo (" --> ".$to_date);
		}
		if($frm_mnth!="")
		{
			echo (" --> ".$frm_mnth);
		}
		if($to_mnth!="")
		{
			echo (" -->".$to_mnth);
		}
		if($frm_yr!="")
		{
			echo (" --> ".$frm_yr);
		}
		if($to_yr!="")
		{
			echo (" --> ".$to_yr);
		}
	
		echo"&emsp;[".(mysql_num_rows($sele_sea))."]";
while($row=mysql_fetch_array($sele_sea))
{	
$inc++;
  ?>
 <tr id="rg">
		  <td>
		<input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/>
		</td>
		<td>
		
<?php  echo($inc); ?>
		</td>
<td><?php
if($row['education_type']=='1')
{
	echo "College";
}
if($row['education_type']=='2')
{
	echo "School";
}
if($row['education_type']=='3')
{
	echo "Institution";
}

?></td>
<td><?php echo $row['institution_name'];?></td>
<td><?php echo $row['institution_code'];?></td>
<td><?php echo $row['established_year'];?></td>
<td><?php 
if($row['paid_unpaid']=="1")
{
	echo "Paid";
}	
if($row['paid_unpaid']=="2")
{
	echo "Not-Paid";
}

?></td>
<td><a href="edu_users_reports.php?view_edu&view=<?php echo(base64_encode($row['mgmt_code'])) ?>" onclick="javascript:if(confirm('Do you want View Total Details')==true){return true}else{ return false;}" title="view">
		<span class="glyphicon glyphicon-eye-open"></span></a></td>
</tr>
  
		<?php
		}
		if($inc=="0")
		{
		?>
		<tr>
		<td colspan="8" style="text-align:center;color:red;">No Results</td>
		</tr>
		<?php
		}
		?>
  <tr>
  
  <td colspan="8">
  
  <input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />
  
  </td>
  
  </tr>

   
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
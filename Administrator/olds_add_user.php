<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getting = new Dbcon;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Add User</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />

<link rel="stylesheet" href="css/user.css" type="text/css">


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






<div class="page-header">
    <div class="row">
       
	   
	   
	   
	   <?php  require_once("includes/main_header1.php");  ?>
		
		
		
    </div>
</div>
	<div class="col-sm-12" id="divider_label"></div>
<script type="text/javascript" src="js/addinguser.js">

	
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-eaHfqumeUPkypDT4xpbKw7EVNePD-k&libraries=places&callback=initAutocomplete"
         async defer></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/map.js">



</script>
<!-- header -->

<!-- body content  -->

<div class="content" style="padding-top:20px;">
<form action="#" name="f1">

<?php
/*

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
?>   
   <div class="col-sm-3" id="edu_type_label_user" style="font-size:18px;"> Add User Account</div>
	<div class="col-sm-9" style="border:0px solid red;text-align:right;">
	<span style="padding-left:10px;"><a href="javascript:void()" id="sub_labels" style="color:#FF9933;text-shadow:0px 0px 0px;-webkit-text-shadow:0px 0px 0px;-moz-text-shadow:0px 0px 0px;"> View Reports </a></span>
	<span style="padding-left:10px;"><a href="javascript:void()" id="sub_labels"> Upload Excel </a></span>
	
	<span style="padding-left:10px;"><a href="javascript:void()" id="sub_labels" style="color:lightgreen;"> Download Excel Format </a></span>
	
	&nbsp;
	</div>
	
	
	
	<!--  background-color:#F0F0F0;  -->
	
	<div class="col-sm-12" id="side_label_user" style="padding:8px;margin:0px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Account Information

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus"></span>
	</a>
	</div>
	</div>
	
	
	<div class="col-sm-12" id="data_user"  style="padding:0px;margin:0px;" >
	
	<!-- 8341778912 -->
	
	
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control"  name="ac1" placeholder="First Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper First Name" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac2" placeholder=" Last Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper Last Name" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="ac3" onchange="ab2()" placeholder="Email ID" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Email ID" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac4" onchange="ab1()" placeholder="Mobile No" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper Mobile Number" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="margin:0px 0px 10px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="password" class="form-control" name="ac5" placeholder="Password"  title="Please Enter Password" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="ac6" placeholder="Confirm Password"  title="Please Enter Confirm Password" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	</div>
	
	
	
	
	
	
	
	
	
		<div class="col-sm-12" id="side_label_user" style="padding:8px;margin-top:15px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Educational Institution Details

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus1"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus1"></span>
	</a>
	</div>
	</div>
	
	
	<div class="col-sm-12" id="data_user1"  style="padding:0px;margin:0px;" >
	
	<!-- 8341778912 -->
	
	
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
<select name="ac7" class="form-control" title="Educational Type" onchange="price(this.value)" required>
<option value="">-- Educational Type --</option>
<?php
$tab_name="education_type";
$whrs="";
$ords="";
$qry=$getting->select_query($tab_name,$whrs,$ords);
while($rs=mysql_fetch_array($qry))
{
	?>
	
	<option value="<?php echo($rs['id']); ?>"><?php echo($rs['education_name']); ?></option>
	
	<?php
}

?>
</select>
<!--
      <input type="text" class="form-control" name="ac1" placeholder="First Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper First Name" required>
	  -->
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac8" placeholder="Institution Name" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Institution Name" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="ac9"  placeholder="Institution Code"  title="Please Enter Institution Code" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac10"  placeholder="Established Year" pattern="[0-9]{4,4}" title="Please Enter Established Year" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <select class="form-control" name="ac11" onchange="getstates(this.value)" title="Country" required>
	  <option value=""> -- Country -- </option>
	
	  <?php
$tab_namea="country";
$whrs="";
$ords="";
$qrya=$getting->select_query($tab_namea,$whrs,$ords);
while($rsa=mysql_fetch_array($qrya))
{
	?>
	
	<option value="<?php echo($rsa['SNO']); ?>"><?php echo($rsa['Countryname']); ?></option>
	
	<?php
}

?>
	  

	  
	  
	  </select>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

  <select class="form-control" name="ac12" id="usr_state" onchange="getcities(this.value)" title="State" required>
	  <option value="">  State  </option>
	  
	  </select>   

   </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
    
	  <select class="form-control" name="ac13" title="City" id="usr_city" required>
	  <option value="">  City  </option>
	  
	  </select>   
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac14"  placeholder="Locality / Village" title="Please Enter Village" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="ac15"  placeholder="Pin code"  title="Please Enter Pincode" required />
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac16" id="pac-input"   placeholder="Google Map Address"   title="Please Enter Maplink" required />
<input type="hidden" name="ac17" id="lt" />
<input type="hidden" name="ac18" id="gt"/>
    
	<div id="map"></div>
	</div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
		
	</div>
	
	
	
	
	
	
	<div class="col-sm-12" id="side_label_user" style="padding:8px;margin-top:15px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Order Details

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus2"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus2"></span>
	</a>
	</div>
	</div>
	
	
	<div class="col-sm-12" id="data_user2"  style="padding:0px;margin:0px;" >
	
	<!-- 8341778912 -->
	
	
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
<input type="number" name="ac19" class="form-control" onclick="ds()" onkeypress="ds()" onchange="order_sum(this.value)" id="stu"  placeholder="No of Student Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
<input type="hidden" name="ac20" id="mgmt_name" />

<input type="hidden" name="ac21" id="mgmt" />

<input type="hidden" name="ac22" id="mgmt_stu" />
<input type="hidden" name="ac23" id="mgmt_fac" />


<!--
      <input type="text" class="form-control" name="ac1" placeholder="First Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper First Name" required>
	  -->
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

    <input type="number" name="ac24" class="form-control" onclick="ds()" onkeypress="ds()" id="stu1" onchange="order_sum(this.value)"    placeholder="No of Faculty Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
</div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
        <input type="number" name="ac25" class="form-control" onclick="ds()" onkeypress="ds()" id="stu2" onchange="order_sum(this.value)"    placeholder="No of Management Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac26"  placeholder="Contact Person Name" pattern="[a-zA-Z+ ]{3,50}" title="Please Enter Contact Person Name" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
         <input type="text" class="form-control" name="ac27"  placeholder="Contact Person Mobile No" pattern="[0-9]{10,10}" title="Should be 10 digits" required>
   
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
  <input type="email" class="form-control" name="ac28"  placeholder="Contact Person Mail ID"  title="Please enter proper mail id" required>
   

   </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="ac29"  placeholder="Institution Phone No"  title="Should be numeric" required>
    
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="email" class="form-control" name="ac30"  placeholder="Institution Mail ID"  title="Please enter proper mail id" required>
   </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;padding-bottom:20px;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-10" style="border:0px solid grey;">
	<div class="col-sm-12" style="font-weight:bold;padding-bottom:10px;border-bottom:1px solid lightgrey;">Order Summary</div>
	<div class="col-sm-12" style="padding:5px;">
	<div class="col-sm-3" id="ordname" style="font-size:13px;">College</div>
	<div class="col-sm-7" id="ordnum" style="text-align:center;">-</div>
	<div class="col-sm-2" id="ordprice" style="text-align:right;">-</div>
	</div>
	<div class="col-sm-12" style="padding:5px;">
	<div class="col-sm-3" id="ord_mgmt" style="font-size:13px;">No of Students</div>
	<div class="col-sm-7" id="ordnum1" style="text-align:center;">-</div>
	<div class="col-sm-2" id="ordprice1" style="text-align:right;">-</div>
		</div>
	
		<div class="col-sm-12" style="padding:5px;">
		<div class="col-sm-3" id="ord_mgmt" style="font-size:13px;">No of Faculty</div>	
		<div class="col-sm-7" id="ordnum2" style="text-align:center;">-</div>
	<div class="col-sm-2" id="ordprice2" style="text-align:right;">-</div>
		</div>
	
		<div class="col-sm-12" style="padding:5px;">
		<div class="col-sm-3" id="ord_mgmt" style="font-size:13px;">No of Managment</div>
	<div class="col-sm-7" id="ordnum3" style="text-align:center;">-</div>
	<div class="col-sm-2" id="ordprice3" style="text-align:right;">-</div>
		</div>
	
		
		<div class="col-sm-12" style="margin-top:10px;margin-bottom:10px;padding:5px;border-top:1px solid lightgrey;">
		<div class="col-sm-3" id="ord_mgmt" style="font-weight:bold;">Sub Total</div>
		<div class="col-sm-7" id="ordnum4" style="text-align:center;"></div>
	<div class="col-sm-2" id="ordprice4" style="text-align:right;font-weight:bold;">-</div>
	</div>
	
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<input type="hidden" name="ac31" id="ccode" />

	</div>
	
	
	
	
	
	
	
	
	
	
	
			<div class="col-sm-12" id="side_label_user" style="padding:8px;margin-top:15px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Payment Type

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus3"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus3"></span>
	</a>
	</div>
	</div>
	
	
	<div class="col-sm-12" id="data_user3"  style="padding:0px;margin-bottom:50px;" >
	
	<!-- 8341778912 -->
	
	
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-10" style="border:0px solid grey;">
	<div class="col-sm-12" style="padding:10px;border-bottom:1px solid lightgrey;">
	<div class="col-sm-3">
	
<input type="radio"  name="ac32" id="pt1" value="Cash"  title="Educational Type" checked> <b>Cash</b>

</div>

<div class="col-sm-3">
	
<input type="radio"  name="ac32" id="pt2" value="DD" title="Educational Type"> <b>DD</b>

</div>
<div class="col-sm-3">
	
<input type="radio"  name="ac32" id="pt3" value="NEFT / RTGS" title="Educational Type"> <b>NEFT / RTGS</b>

</div>
<div class="col-sm-3">
	
<input type="radio"  name="ac32" id="pt4" value="Cheque" title="Educational Type"> <b>Cheque</b>

</div>








</div>

<div class="col-sm-12" id="cash" style="border:0px solid red;padding-bottom:10px;padding-top:30px;padding-left:0px;padding-right:0px;">

	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="cash1" pattern="[0-9]{1,5}"  placeholder="Amount"  title="Please Enter Amount">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="cash2" id="demo"  placeholder="Payment Date"  title="Please Enter Payment Date">
    </div>
	</div>
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="cash3"  placeholder="Contact Person Name"  title="Please Enter Contact Person Name" /></div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control"  name="cash4"  placeholder="Contact Mobile Number" pattern="[0-9]{10,10}" title="Please Enter Contact Person Mobile number">
    
<script>$( "#demo" ).dateDropper();</script>

<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
-->

	
	</div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;padding:0px;">
	<div class="form-group">
      <textarea class="form-control" name="cash5"  placeholder="Contact Address" style="resize:none;"  title="Please Enter Contact Address"></textarea></div>
	</div>
	
</div>

<!--  end cash    -->



<div class="col-sm-12" id="dd" style="display:none;border:0px solid red;padding-bottom:10px;padding-top:30px;padding-left:0px;padding-right:0px;">

	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="dd1" pattern="[0-9]{1,5}"  placeholder="DD Amount"  title="Please Enter DD Amount">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="dd2" id="demo1"  placeholder="DD Date"  title="Please Enter DD Date">
    </div>
	</div>
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="dd3"  placeholder="DD Number"  title="Please Enter DD Number">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="dd4"  placeholder="Bank Name"  title="Please Enter Bank Name">
    </div>
	</div>
	
	
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="dd5"  placeholder="Contact Person Name"  title="Please Enter Contact Person Name" /></div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control"  name="dd6"  placeholder="Contact Mobile Number" pattern="[0-9]{10,10}" title="Please Enter Contact Person Mobile number">
    
<script>$( "#demo1" ).dateDropper();</script>

<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
-->

	
	</div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;padding:0px;">
	<div class="form-group">
      <textarea class="form-control" name="dd7"  placeholder="Contact Address" style="resize:none;"  title="Please Enter Contact Address"></textarea></div>
	</div>
	
</div>









<!--  end DD   -->



<div class="col-sm-12" id="neft" style="display:none;border:0px solid red;padding-bottom:10px;padding-top:30px;padding-left:0px;padding-right:0px;">

	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="neft1" pattern="[0-9]{1,5}"  placeholder="NEFT / RTGS Amount"  title="Please Enter  Amount">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="neft2" id="demo3"  placeholder="Payment Date"  title="Please Enter Date">
    </div>
	</div>
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="neft3"  placeholder="Transaction Number"  title="Please Enter Transaction Number">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="neft4"  placeholder="Reference Number"  title="Please Enter Reference">
    </div>
	</div>
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="neft5"  placeholder="Bank Name"  title="Please Enter Bank Name">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="neft6"  placeholder="Account Holder Name"  title="Please Enter Account Holder Name">
    </div>
	</div>
	
	
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="neft7"  placeholder="Contact Person Name"  title="Please Enter Contact Person Name" /></div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control"  name="neft8"  placeholder="Contact Mobile Number" pattern="[0-9]{10,10}" title="Please Enter Contact Person Mobile number">
    
<script>$( "#demo3" ).dateDropper();</script>

<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
-->

	
	</div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;padding:0px;">
	<div class="form-group">
      <textarea class="form-control" name="neft9"  placeholder="Contact Address" style="resize:none;"  title="Please Enter Contact Address"></textarea></div>
	</div>
	
</div>








<!--  end NEFT   -->



<div class="col-sm-12" id="cheque" style="display:none;border:0px solid red;padding-bottom:10px;padding-top:30px;padding-left:0px;padding-right:0px;">

	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="ch1" pattern="[0-9]{1,5}"  placeholder="Cheque Amount"  title="Please Enter  Amount">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="ch2" id="demo4"  placeholder="Payment Date"  title="Please Enter Date">
    </div>
	</div>
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="ch3"  placeholder="Name on Cheque"  title="Please Enter Name on Cheque">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="ch4"  placeholder="Cheque Number"  title="Please Enter Cheque Number">
    </div>
	</div>
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="ch5"  placeholder="Bank Name"  title="Please Enter Bank Name">
	</div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control" name="ch6"  placeholder="Account Holder Name"  title="Please Enter Account Holder Name">
    </div>
	</div>
	
	
	
	
	<div class="col-sm-6" style="border:0px solid grey;padding-left:0px;">
	<div class="form-group">
      <input type="text" class="form-control" name="ch7"  placeholder="Contact Person Name"  title="Please Enter Contact Person Name" /></div>
	</div>	
	<div class="col-sm-6" style="border:0px solid grey;padding-right:0px;">
	<div class="form-group">

      <input type="text" class="form-control"  name="ch8"  placeholder="Contact Mobile Number" pattern="[0-9]{10,10}" title="Please Enter Contact Person Mobile number">
    
<script>$( "#demo4" ).dateDropper();</script>

<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
-->

	
	</div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;padding:0px;">
	<div class="form-group">
      <textarea class="form-control" name="neft9"  placeholder="Contact Address" style="resize:none;"  title="Please Enter Contact Address"></textarea></div>
	</div>
	
</div>

























<!--
      <input type="text" class="form-control" name="ac1" placeholder="First Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper First Name" required>
	  -->
	
	
	</div>
	
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
</form>	

	
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
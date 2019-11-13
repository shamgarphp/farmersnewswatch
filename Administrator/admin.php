<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getting = new Dbcon;

$getting->is_session();

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
<script type="text/javascript">
$(document).ready(function(){
    $("#minus").click(function(){
       //alert('gfg');
		 $("#minus").hide();
		 $("#plus").show();
		$("#data_user").hide(1300);
		 });
    $("#plus").click(function(){
         $("#plus").hide();
		 $("#minus").show();
		 $("#data_user").show(1300);
		 });
	$("#minus1").click(function(){
   //alert('gfg');
		 $("#minus1").hide();
		 $("#plus1").show();
		 $("#data_user1").hide(1300);
		});
    $("#plus1").click(function(){
         $("#plus1").hide();
		 $("#minus1").show();
		 $("#data_user1").show(1300);
    });
	$("#minus2").click(function(){
       //alert('gfg');
		 $("#minus2").hide();
		 $("#plus2").show();
		 $("#data_user2").hide(1300);
		 });
    $("#plus2").click(function(){
         $("#plus2").hide();
		 $("#minus2").show();
		 $("#data_user2").show(1300);
		 });
	$("#minus3").click(function(){
       //alert('gfg');
		 $("#minus3").hide();
		 $("#plus3").show();
		 $("#data_user3").hide(1300);
		 });
    $("#plus3").click(function(){
         $("#plus3").hide();
		 $("#minus3").show();
		 $("#data_user3").show(1300);
    });
$("#pt1").click(function(){
         $("#cash").show(1300);
		 $("#dd").hide();
		 $("#neft").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 });
$("#pt2").click(function(){
         $("#dd").show(1300);
		 $("#cash").hide();
		 $("#neft").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 });
$("#pt3").click(function(){
         $("#neft").show(1300);
		 $("#cash").hide();
		 $("#dd").hide();
		 $("#cheque").hide();
		 window.scrollTo(1800,1800);
		 });
		$("#pt4").click(function(){
		$("#cheque").show(1300);
		 $("#cash").hide();
		 $("#neft").hide();
		 $("#dd").hide();
		 window.scrollTo(1800,1800);
		});
});
function ab1()
            {
             var numb= document.getElementById("h2").value;
                if(numb==" ")
                {
                    alert("please enter numbers");
                    document.ac4.f1.focus();
                    return false;
                }
                if(numb.length>10)
                {
                    alert("number should't exceed 10 digits");
                    document.ac4.f1.focus();
                    return false;
                }
                 if(numb.length<10)
                {
                    alert("number should be 10 digits");
                    document.ac4.f1.focus();
                    return false;
                }
                 if(isNaN(numb))
                {
                    alert("please enter numbers");
                    document.ac4.f1.focus();
                    return false;
                }
                }


function ab2()
{

   var email=document.getElementById('h3').value;
   if(email=="")
   {
     alert("Not empty");
     document.f1.ac3.focus();
     return false;
   }
   if(email.indexOf("@",0)<0)
   {
     alert("Valid address Needed");
     document.f1.ac3.focus();
     return false;
   }
   if(email.indexOf(".",0)<0)
   {
     alert("Proper mail id");
     document.f1.ac3.focus();
     return false;
   }
}

function getstates(countryid) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
	var thg=somex2.split("@");
     document.getElementById("usr_state").innerHTML=thg[0];
	 document.getElementById("ccode").value=thg[1];
	 


																
            }
        }
        xmlhttp.open("GET", "states_adding.php?countryids="+ countryid, true);
        xmlhttp.send();
			
	}

	
	function getcities(stateid) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
     document.getElementById("usr_city").innerHTML=somex2;


																
            }
        }
        xmlhttp.open("GET", "cities_adding.php?stateids="+ stateid, true);
        xmlhttp.send();
			
	}


	
	
	
		function price(edu_id) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
    var ress=somex2.split("#");
	document.getElementById("mgmt").value=ress[0];
	document.getElementById("mgmt_stu").value=ress[1];
	document.getElementById("mgmt_fac").value=ress[2];
	document.getElementById("mgmt_name").value=ress[3];
	
document.getElementById("ordname").innerHTML=ress[3];
document.getElementById("ordnum").innerHTML="1 x "+ress[0];
document.getElementById("ordprice").innerHTML=ress[0];
document.getElementById("ordprice4").innerHTML=ress[0];

	

																
            }
        }
        xmlhttp.open("GET", "edu_price.php?eduids="+ edu_id, true);
        xmlhttp.send();
			
	}
	
	
	
	
	
	
	
	
	

      function initAutocomplete() 
	  {
       

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
alert(places);
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-eaHfqumeUPkypDT4xpbKw7EVNePD-k&libraries=places&callback=initAutocomplete"
         async defer></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function ds()
{
var geocoder = new google.maps.Geocoder();
var address = document.getElementById('pac-input').value;
//alert(address);
geocoder.geocode( { 'address': address}, function(results, status) {

if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
var longitude = results[0].geometry.location.lng();
    
	document.getElementById('lt').value=latitude;
	document.getElementById('gt').value=longitude;

    } 
}); 
}

function order_sum(sa)
{
	var sts=parseInt(document.getElementById("mgmt_stu").value);
	var fcf=parseInt(document.getElementById("mgmt_fac").value);
	
	
		var mgmtp=parseInt(document.getElementById("mgmt").value);
	
	
	var student=document.getElementById("stu").value;
	var faculty=document.getElementById("stu1").value;
	var management=document.getElementById("stu2").value;
	var currency=document.getElementById("ccode").value;
	
	
	
document.getElementById("ors1").value=sts;

	
	
	
	
	if(student!="")
	{
var redsq=(parseInt(student)*sts);
document.getElementById("ors2").value=redsq;

document.getElementById("ordnum1").innerHTML=student+" x "+sts;
document.getElementById("ordprice1").innerHTML=redsq;
var vb=(redsq+mgmtp);
	document.getElementById("ordprice4").innerHTML=currency+" "+vb;
		document.getElementById("ors5").value=vb;

	}
	if(faculty!="")
	{
var redsw=(parseInt(faculty)*fcf);
document.getElementById("ors3").value=redsw;

document.getElementById("ordnum2").innerHTML=faculty+" x "+fcf;
document.getElementById("ordprice2").innerHTML=redsw;
var hh=(redsq+redsw+mgmtp);
	document.getElementById("ordprice4").innerHTML=currency+" "+hh;
		document.getElementById("ors5").value=hh;

	}
	if(management!="")
	{
var redse=(parseInt(management)*fcf);

document.getElementById("ors4").value=redse;


document.getElementById("ordnum3").innerHTML=management+" x "+fcf;
document.getElementById("ordprice3").innerHTML=redse;
var nn=(redsq+redsw+redse+mgmtp);
document.getElementById("ordprice4").innerHTML=currency+" "+nn;
	document.getElementById("ors5").value=nn;

	}
	
		

	
}

  function readURL1(input) {
		 
            if (input.files && input.files[0]) {
                var reader = new FileReader();
			
                reader.onload = function (e) {
                    
						$('#blah1').attr('src', e.target.result);
                };
				

                reader.readAsDataURL(input.files[0]);
            }
        }
		     

function readURL2(input) {
		 
            if (input.files && input.files[0]) {
                var reader = new FileReader();
			
                reader.onload = function (e) {
                    
						$('#blah2').attr('src', e.target.result);
                };
				

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>
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
      <input type="text" class="form-control" name="ac3" onchange="ab2()" placeholder="Email ID" title="Please Enter Email ID" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="ac4" onchange="ab1()" placeholder="Mobile No" pattern="[0-9]{10,10}" title="Please Enter Proper Mobile Number" required>
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
<select name="edu1" class="form-control" title="Educational Type" onchange="price(this.value)" required>
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

      <input type="text" class="form-control" name="edu2" placeholder="Institution Name" pattern="[a-zA-Z+ ]{3,100}" title="Please Enter Institution Name" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="edu3"  placeholder="Institution Code"  title="Please Enter Institution Code" required>
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="edu4"  placeholder="Established Year" pattern="[0-9]{4,4}" title="Please Enter Established Year" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <select class="form-control" name="edu5" onchange="getstates(this.value)" title="Country" required>
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

  <select class="form-control" name="edu6" id="usr_state" onchange="getcities(this.value)" title="State" required>
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
    
	  <select class="form-control" name="edu7" title="City" id="usr_city" required>
	  <option value="">  City  </option>
	  
	  </select>   
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="edu8"  placeholder="Locality / Village" title="Please Enter Village" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="edu9"  placeholder="Pin code"  title="Please Enter Pincode" required />
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="edu10" id="pac-input"   placeholder="Google Map Address"   title="Please Enter Maplink" required />

	  
	  <input type="hidden" name="edu11" id="lt" />
<input type="hidden" name="edu12" id="gt"/>
    
	<div id="map"></div>
	</div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
		
		
		
		
<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
	<div style="margin-top:50px;">
	<b style="color:grey;">Upload Institution Logo</b>
    <input type="file" onchange="readURL1(this);" class="form-control" title="Upload Photo" name="edu13" style="color:grey;font-size: 17px;color: #282828;border:1px solid lightgrey;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;font-family: source sans pro;height: 35px;width: 100%;padding: 0px;margin:0px;font-size: 16px;font-family: arial;" /></td>
    </div>
	    
	
	</div>
	</div>	
	<div class="col-sm-5" style="text-align:center;border:0px solid grey;">
	<div class="form-group">

    <div style="border:1px solid lightgrey;height:150px;width:150px;margin-left:100px;border-radius:150px;">

<img id="blah1" src="noimg.png"  width="100%" height="100%" style="border-radius:150px;" />

    </div>
	
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
<input type="number" name="or1" class="form-control" onclick="ds()" onkeypress="ds()" onchange="order_sum(this.value)" id="stu"  placeholder="No of Student Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
<input type="hidden" name="ac2sa0" id="mgmt_name" />

<input type="hidden" name="ac2as1" id="mgmt" />

<input type="hidden" name="ac2as2" id="mgmt_stu" />
<input type="hidden" name="ac2as3" id="mgmt_fac" />





<input type="hidden" name="or9"  id="ors1" />
<input type="hidden" name="or10" id="ors2" />
<input type="hidden" name="or11" id="ors3" />
<input type="hidden" name="or12"  id="ors4" />
<input type="hidden"  name="or13" id="ors5" />


<!--
      <input type="text" class="form-control" name="ac1" placeholder="First Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Proper First Name" required>
	  -->
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

    <input type="number" name="or2" class="form-control" onclick="ds()" onkeypress="ds()" id="stu1" onchange="order_sum(this.value)"    placeholder="No of Faculty Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
</div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
        <input type="number" name="or3" class="form-control" onclick="ds()" onkeypress="ds()" id="stu2" onchange="order_sum(this.value)"    placeholder="No of Management Accounts" required pattern="[0-9]{1,5}" title="Should be Numeric">
</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="text" class="form-control" name="or4"  placeholder="Contact Person Name" pattern="[a-zA-Z+ ]{3,50}" title="Please Enter Contact Person Name" required>
    </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
         <input type="text" class="form-control" name="or5"  placeholder="Contact Person Mobile No" pattern="[0-9]{10,10}" title="Should be 10 digits" required>
   
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
  <input type="email" class="form-control" name="or6"  placeholder="Contact Person Mail ID"  title="Please enter proper mail id" required>
   

   </div>
	</div>
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	</div>
	
	
	<div class="col-sm-12" style="border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">
      <input type="text" class="form-control" name="or7"  placeholder="Institution Phone No"  title="Should be numeric" required>
    
	
	</div>
	</div>	
	<div class="col-sm-5" style="border:0px solid grey;">
	<div class="form-group">

      <input type="email" class="form-control" name="or8"  placeholder="Institution Mail ID"  title="Please enter proper mail id" required>
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
	
<input type="radio"  name="or14" id="pt1" value="1"  title="Cash" checked> <b>Cash</b>

</div>

<div class="col-sm-3">
	
<input type="radio"  name="or14" id="pt2" value="2" title="DD"> <b>DD</b>

</div>
<div class="col-sm-3">
	
<input type="radio"  name="or14" id="pt3" value="3" title="NEFT / RTGS"> <b>NEFT / RTGS</b>

</div>
<div class="col-sm-3">
	
<input type="radio"  name="or14" id="pt4" value="4" title="Cheque"> <b>Cheque</b>

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
      <textarea class="form-control" name="ch9"  placeholder="Contact Address" style="resize:none;"  title="Please Enter Contact Address"></textarea></div>
	</div>
	
</div>
</div>
</div>
	</div>
	<div class="col-sm-12" style=""></div>
	</form>	
</div>
<div style="margin-top:-26px;margin-left:19px;margin-right:19px;padding-bottom:100px">
	<div class="col-sm-12" id="side_label_user" style="padding:8px;">

	<div class="col-sm-12" style="text-shadow:0px 0px 10px white;font-size:14px;"> Gallery

	<a href="javascript:void()">
	<span  class="glyphicon glyphicon-plus" style="float:right;display:none;" id="plus3"></span>
	</a>
	<a href="javascript:void()">
	<span class="glyphicon glyphicon-minus" style="float:right;" id="minus3"></span>
	</a>
	</div>
	</div>
	
	
	<div class="col-sm-12" id="data_user3"  style="padding:0px;" >
	

	
	
	<div class="col-sm-12" style="margin:30px 0px 0px 0px;border:0px solid grey;">
		
	<div class="col-sm-1" style="border:0px solid grey;">   </div>
	<div class="col-sm-10" style="border:0px solid grey;">
	
	
<div class="col-sm-8" >
<form>
  <div class="form-group">
    <label for="exampleInputEmail1"><b>College Image</b></label>
    <input type="file"  onchange="readURL2(this);" class="form-control" name="edu14">
   
  </div>
  <div class="form-group">
    <b><label for="exampleInputEmail1"><b>Slider1<b></label>
    <input type="file" onchange="readURL2(this);" class="form-control" name="edu15">
   
  </div>
 <div class="form-group">
    <b><label for="exampleInputEmail1"><b>Slider2<b></label>
    <input type="file" onchange="readURL2(this);"  class="form-control" name="edu16">
   
  </div>
   <div class="form-group">
    <b><label for="exampleInputEmail1"><b>Slider3<b></label>
    <input type="file"  onchange="readURL2(this);" class="form-control" name="edu17">
   
  </div>
   
  </div>
   <div class="form-group">
    <b><label for="exampleInputEmail1"><b>About Us<b></label>
    <textarea class="form-control" name="about" style="height:60px;"></textarea>
   
  </div>
  
 
</form>

</div>
<div class="col-md-4">
<div class="form-group">

    <div style="border:1px solid lightgrey;height:150px;width:150px;border-radius:150px;">

<img id="blah2" src="noimg.png"  width="100%" height="100%" style="border-radius:150px;" />

    </div>
	
	</div>
</div>
</div>
<div class="col-sm-12" style="text-align:center;margin-bottom:50px;margin-top:20px;">
        
        	<input type="submit" class="btn btn-success"  name="submit" value="Submit">
        
        </div>
<div class="col-sm-1"></div>

</div>      
</div>


<!-- body content end -->
	
<div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
 <?php   require_once("includes/footer.php"); ?>
						</div>         
               </body></html>
<?php
if(isset($_POST['useradd']))
{
	$valu=0;
	
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('Y-m');
$year=date('Y');
$asd=date('Y-m-d H:i:s');
$mgmt_code=strtotime($asd)+10;

// -----------------------------------  Account Insertion ----------------------------------------------->
	$account="";
	$account_columns="datee,timee,dayy,monthh,yearr,mgmt_code,first_name,lastname,mailid,mobile,password,status,edu_type";
	$table="edu_user_account";
	
for($lryw=1;$lryw<=5;$lryw++)
  {
	 
	  $lrasam=$_POST['ac'.$lryw];
	  if($lryw==5)
	  $account.="'".$lrasam."'";
      else
	  $account.="'".$lrasam."'".',';
  }
  $qwe=$_POST['edu1'];
$colval="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$account,'1','".$qwe."'";
	$ins1=$getting->insertrecord($table,$account_columns,$colval);
	// --------------------------------- Institution Details Insertion-------------------------------------------->
	$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["edu13"]["name"]);
$extension = end($temp);
//echo($_FILES["edu13"]["type"]);
if ((($_FILES["edu13"]["type"] == "image/gif")
|| ($_FILES["edu13"]["type"] == "image/jpeg")
|| ($_FILES["edu13"]["type"] == "image/jpg")
|| ($_FILES["edu13"]["type"] == "image/pjpeg")
|| ($_FILES["edu13"]["type"] == "image/x-png")
|| ($_FILES["edu13"]["type"] == "image/png"))
&& ($_FILES["edu13"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["edu13"]["error"] > 0) {
    echo "Return Code: " . $_FILES["edu13"]["error"] . "<br>";
  } else {
$pan_proof_imagename4=$_FILES["edu13"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("institution_logo/" . $_FILES["edu13"]["name"])) {
      $incre="1";
      $rn= $_FILES["edu13"]["name"];
      $pan_proof_imagename4=$incre.$rn;
      //echo $rrn;
   if(file_exists("institution_logo/" . $pan_proof_imagename4))
          {
			  for($i=2;$i<=2000000;$i++)
              {
              $pan_proof_imagename4=$i.$pan_proof_imagename4;
              if(file_exists("institution_logo/" . $pan_proof_imagename4))
                  {
					  
				  }
                  else
                      {
                       move_uploaded_file($_FILES["edu13"]["tmp_name"],
      "institution_logo/" . $pan_proof_imagename4);
                       break;
                      }
					  }
					  }
					  else
              {
       move_uploaded_file($_FILES["edu13"]["tmp_name"],
      "institution_logo/" . $pan_proof_imagename4);
              }
    } else {
      move_uploaded_file($_FILES["edu13"]["tmp_name"],
      "institution_logo/" . $_FILES["edu13"]["name"]);

    }
  }
} else {
  $pan_proof_imagename4="No Image";
}

// institution image


	$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["edu14"]["name"]);
$extension = end($temp);
//echo($_FILES["edu14"]["type"]);
if ((($_FILES["edu14"]["type"] == "image/gif")
|| ($_FILES["edu14"]["type"] == "image/jpeg")
|| ($_FILES["edu14"]["type"] == "image/jpg")
|| ($_FILES["edu14"]["type"] == "image/pjpeg")
|| ($_FILES["edu14"]["type"] == "image/x-png")
|| ($_FILES["edu14"]["type"] == "image/png"))
&& ($_FILES["edu14"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["edu14"]["error"] > 0) {
    echo "Return Code: " . $_FILES["edu14"]["error"] . "<br>";
  } else {
$inst_image=$_FILES["edu14"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("institution_logo/" . $_FILES["edu14"]["name"])) {
      $incre="1";
      $rn= $_FILES["edu14"]["name"];
      $inst_image=$incre.$rn;
      //echo $rrn;
   if(file_exists("institution_logo/" . $inst_image))
          {
			  for($i=2;$i<=2000000;$i++)
              {
              $inst_image=$i.$inst_image;
              if(file_exists("institution_logo/" . $inst_image))
                  {
					  
				  }
                  else
                      {
                       move_uploaded_file($_FILES["edu14"]["tmp_name"],
      "institution_logo/" . $inst_image);
                       break;
                      }
					  }
					  }
					  else
              {
       move_uploaded_file($_FILES["edu14"]["tmp_name"],
      "institution_logo/" . $inst_image);
              }
    } else {
      move_uploaded_file($_FILES["edu14"]["tmp_name"],
      "institution_logo/" . $_FILES["edu14"]["name"]);

    }
  }
} else {
  $inst_image="";
}


// slider1


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["edu15"]["name"]);
$extension = end($temp);
//echo($_FILES["edu15"]["type"]);
if ((($_FILES["edu15"]["type"] == "image/gif")
|| ($_FILES["edu15"]["type"] == "image/jpeg")
|| ($_FILES["edu15"]["type"] == "image/jpg")
|| ($_FILES["edu15"]["type"] == "image/pjpeg")
|| ($_FILES["edu15"]["type"] == "image/x-png")
|| ($_FILES["edu15"]["type"] == "image/png"))
&& ($_FILES["edu15"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["edu15"]["error"] > 0) {
    echo "Return Code: " . $_FILES["edu15"]["error"] . "<br>";
  } else {
$slider1=$_FILES["edu15"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("institution_logo/" . $_FILES["edu15"]["name"])) {
      $incre="1";
      $rn= $_FILES["edu15"]["name"];
      $slider1=$incre.$rn;
      //echo $rrn;
   if(file_exists("institution_logo/" . $slider1))
          {
			  for($i=2;$i<=2000000;$i++)
              {
              $slider1=$i.$slider1;
              if(file_exists("institution_logo/" . $slider1))
                  {
					  
				  }
                  else
                      {
                       move_uploaded_file($_FILES["edu15"]["tmp_name"],
      "institution_logo/" . $slider1);
                       break;
                      }
					  }
					  }
					  else
              {
       move_uploaded_file($_FILES["edu15"]["tmp_name"],
      "institution_logo/" . $slider1);
              }
    } else {
      move_uploaded_file($_FILES["edu15"]["tmp_name"],
      "institution_logo/" . $_FILES["edu15"]["name"]);

    }
  }
} else {
  $slider1="No Image";
}


// slider 2

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["edu16"]["name"]);
$extension = end($temp);
//echo($_FILES["edu16"]["type"]);
if ((($_FILES["edu16"]["type"] == "image/gif")
|| ($_FILES["edu16"]["type"] == "image/jpeg")
|| ($_FILES["edu16"]["type"] == "image/jpg")
|| ($_FILES["edu16"]["type"] == "image/pjpeg")
|| ($_FILES["edu16"]["type"] == "image/x-png")
|| ($_FILES["edu16"]["type"] == "image/png"))
&& ($_FILES["edu16"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["edu16"]["error"] > 0) {
    echo "Return Code: " . $_FILES["edu16"]["error"] . "<br>";
  } else {
$slider2=$_FILES["edu16"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("institution_logo/" . $_FILES["edu16"]["name"])) {
      $incre="1";
      $rn= $_FILES["edu16"]["name"];
      $slider2=$incre.$rn;
      //echo $rrn;
   if(file_exists("institution_logo/" . $slider2))
          {
			  for($i=2;$i<=2000000;$i++)
              {
              $slider2=$i.$slider2;
              if(file_exists("institution_logo/" . $slider2))
                  {
					  
				  }
                  else
                      {
                       move_uploaded_file($_FILES["edu16"]["tmp_name"],
      "institution_logo/" . $slider2);
                       break;
                      }
					  }
					  }
					  else
              {
       move_uploaded_file($_FILES["edu16"]["tmp_name"],
      "institution_logo/" . $slider2);
              }
    } else {
      move_uploaded_file($_FILES["edu16"]["tmp_name"],
      "institution_logo/" . $_FILES["edu16"]["name"]);

    }
  }
} else {
  $slider2="No Image";
}


// slider3


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["edu17"]["name"]);
$extension = end($temp);
//echo($_FILES["edu17"]["type"]);
if ((($_FILES["edu17"]["type"] == "image/gif")
|| ($_FILES["edu17"]["type"] == "image/jpeg")
|| ($_FILES["edu17"]["type"] == "image/jpg")
|| ($_FILES["edu17"]["type"] == "image/pjpeg")
|| ($_FILES["edu17"]["type"] == "image/x-png")
|| ($_FILES["edu17"]["type"] == "image/png"))
&& ($_FILES["edu17"]["size"] < 10000000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["edu17"]["error"] > 0) {
    echo "Return Code: " . $_FILES["edu17"]["error"] . "<br>";
  } else {
$slider3=$_FILES["edu17"]["name"];
   //   echo $pan_proof_imagename;
    if (file_exists("institution_logo/" . $_FILES["edu17"]["name"])) {
      $incre="1";
      $rn= $_FILES["edu17"]["name"];
      $slider3=$incre.$rn;
      //echo $rrn;
   if(file_exists("institution_logo/" . $slider3))
          {
			  for($i=2;$i<=2000000;$i++)
              {
              $slider3=$i.$slider3;
              if(file_exists("institution_logo/" . $slider3))
                  {
					  
				  }
                  else
                      {
                       move_uploaded_file($_FILES["edu17"]["tmp_name"],
      "institution_logo/" . $slider3);
                       break;
                      }
					  }
					  }
					  else
              {
       move_uploaded_file($_FILES["edu17"]["tmp_name"],
      "institution_logo/" . $slider3);
              }
    } else {
      move_uploaded_file($_FILES["edu17"]["tmp_name"],
      "institution_logo/" . $_FILES["edu17"]["name"]);

    }
  }
} else {
  $slider3="No Image";
}




//
$institut="";
$institut_columns="image,image1,image2,image3,aboutus,datee,timee,dayy,monthh,yearr,mgmt_code,education_type,institution_name,institution_code,established_year,country,state,city,village,pincode,google_maplink,latitude,langitude,institution_logo,status";
$tablea="edu_user_institution";
	for($iq=1;$iq<=12;$iq++)
  {
	$lrasan=$_POST['edu'.$iq];
	  if($iq==12)
	  $institut.="'".$lrasan."'";
      else
	  $institut.="'".$lrasan."'".',';
  }
  $colvala="'".$inst_image."','".$slider1."','".$slider2."','".$slider3."','".$_POST['about']."','".$date."','".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$institut,'$pan_proof_imagename4','1'";
	$ins2=$getting->insertrecord($tablea,$institut_columns,$colvala);
	// --------------------------------- Orders Details Insertion-------------------------------------------->
	$orders="";
	$orders_columns="datee,timee,dayy,monthh,yearr,mgmt_code,noof_students,noof_faculty,noof_management,contact_person_name,contact_person_mobile,contact_person_mail,institution_phone,institution_mail,mgmt_cost,student_cost,faculty_cost,management_cost,total_cost,payment_type,paid_unpaid,expire_date,package,status";
	$tableb="edu_user_orders";
	$start = date("Y-m-d"); 
$expiry_date = date('Y-m-d', strtotime('365 days')); 
for($ii=1;$ii<=14;$ii++)
  {
$lrasab=$_POST['or'.$ii];
	  if($ii==14)
	  $orders.="'".$lrasab."'";
      else
	  $orders.="'".$lrasab."'".',';
  }
  $colvalb="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$orders,'1','".$expiry_date."','1','1'";
$ins3=$getting->insertrecord($tableb,$orders_columns,$colvalb);
	//  ---------------------------------  Cash Payment    -------------------------------
  $payment=$_POST['or14'];
  if($payment=="1")
  {
$cashes="";
$cashes_columns="datee,timee,dayy,monthh,yearr,mgmt_code,amount,payment_date,contact_person_name,contact_person_mobile,contact_address,status";
$tabled="edu_user_payment_cash";
	
for($aii=1;$aii<=5;$aii++)
		{
	 $lrasav=$_POST['cash'.$aii];
	  if($aii==5)
	  $cashes.="'".$lrasav."'";
      else
	  $cashes.="'".$lrasav."'".',';
		}
		$colvalc="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$cashes,'1'";
$ins4=$getting->insertrecord($tabled,$cashes_columns,$colvalc);
	}
  else if($payment=="2")
  {
// ---------------------------------- DD Payment  -------------------------
$dd="";
$dd_columns="datee,timee,dayy,monthh,yearr,mgmt_code,amount,dd_date,dd_number,bankname,contact_person_name,contact_person_mobile,contact_address,status";
$tablef="edu_user_payment_dd";
for($aiia=1;$aiia<=7;$aiia++)
		{
	$lrasac=$_POST['dd'.$aiia];
	  if($aiia==7)
	  $dd.="'".$lrasac."'";
      else
	  $dd.="'".$lrasac."'".',';
		}
	  $colvalc="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$dd,'1'";
$ins4=$getting->insertrecord($tablef,$dd_columns,$colvalc);
	  }
  else if($payment=="3")
  {
//   ----------------------------- NEFT --------------------------
$neft="";
$neft_columns="datee,timee,dayy,monthh,yearr,mgmt_code,amount,neft_date,transaction_number,ref_number,bankname,account_holder,contact_person_name,contact_person_mobile,contact_address,status";
$tableg="edu_user_payment_neft";
	for($aiiaa=1;$aiiaa<=9;$aiiaa++)
		{
	   $lrasax=$_POST['neft'.$aiiaa];
	  if($aiiaa==9)
	  $neft.="'".$lrasax."'";
      else
	  $neft.="'".$lrasax."'".',';
		}
		$colvalc="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$neft,'1'";
$ins4=$getting->insertrecord($tableg,$neft_columns,$colvalc);
		}
  else if($payment=="4")
  {
	  
	  
	  // ---------------------  Cheque Payment  -------------
	  
	  
	  $cheque="";
	$cheque_columns="datee,timee,dayy,monthh,yearr,mgmt_code,amount,payment_date,nameoncheque,cheque_number,bankname,account_holder,contact_person_name,contact_person_mobile,contact_address,status";
	$tableh="edu_user_payment_cheque";
	for($aiiaaa=1;$aiiaaa<=9;$aiiaaa++)
		{
	 $lrasaz=$_POST['ch'.$aiiaaa];
	  if($aiiaaa==9)
	  $cheque.="'".$lrasaz."'";
      else
	  $cheque.="'".$lrasaz."'".',';
		}
		$colvalc="'".$date."','".$time."','".$day."','".$month."','".$year."','".$mgmt_code."',$cheque,'1'";
$ins4=$getting->insertrecord($tableh,$cheque_columns,$colvalc);		
		}
  if($ins1 && $ins2 && $ins3 && $ins4)
  {
	  
$user=$_POST['ac3'];		
		$pass=$_POST['ac4'];
		$name=$_POST['ac1']." ".$_POST['ac2'];
		
		$offmail=$getting->official_mail();
				
	$subject="Bslate - Successfully register with us";
	
	$msg =" 
			<table width='500' cellpadding='0' cellspacing='0' border='0' style='border:solid 10px #3366CC;'> 

		<tr  bgcolor='#3366CC' height='25'> 

		<td height='70'>
			<h2><span style='color:white;'>Bslate Education Application</span></h2>
			
		</td> 

	</tr> 
	
	<tr bgcolor='#FFFFFF'> <td> <br> </td> </tr> 
	
	<tr bgcolor='#FFFFFF' height='30'> 

		<td height='27' valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>
		

		Dear $name, <br/><br/>
		<p>Thank you for register with us. Please find out your credentials below here.</p>
			<b>UserName : </b>$user<br />
			<b>PassWord : </b>$pass
			<br/><br/>
			Now you can use our services. <a href='http://www.bslate.co.in/Bteam/Management' style='background-color:tomato;color:white;'>Click here</a> to login
			<br /><br /><br />
			<b>Regards</b><br/>
			<a href='http://www.bslate.co.in'>Bslate</a>,<br/><br/>
			
		</td> 
		
	</tr> 
	
	<tr bgcolor='#FFFFFF'><td> </td></tr> 
	
	<tr height='40'  bgcolor='#d4db0a'> 
	
		<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color:#3366CC;'>
		
			<font color='white'>Copyright @ ".date('Y')." Krupa Hi-Tech Global Technologies India Pvt Ltd., </font>
			
		</td> 

	</tr> 

</table>";	
$to = $_POST['ac3'];
	
       		    
  //$headers .= "From: .'hfczambia@gmail.com'.\r\n";
  //$headers .= "Reply-To: ". strip_tags($to) . "\r\n";
 // $headers .= "CC: swami.sri024@gmail.com\r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Bslate<$offmail>' . "\r\n";
	$headers .= ""."\r\n";    	
	//echo $msg;
				//mail($to,$subject,$msg,$headers);
		$rd=mail($to,$subject,$msg,$headers);
			
	   			if($rd)
				{
					
					
				echo"<script>
				alert('Successfully Registered !!!');
				
				window.location.href='edu_users.php';
				</script>";
				exit;
				}
				else
				{
					
					echo"<script>
				alert('Unable to process your request. Please try again !!!');
				
				window.location.href='edu_users.php';
				</script>";
				exit;
				}
  }
  else
  {
					echo"<script>
				alert('Unable to process your request. Please try again !!');
				
				window.location.href='edu_users.php';
				</script>";
				
				//echo(mysql_error());
				
				
	exit;
	  
  }
  }
?>
  
  
  
  
  
	

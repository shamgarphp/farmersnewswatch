<?php

include("config/dbconnection.php");
include("config/dbconfig.php");

$config_class = new Dbcon;
$config_class->is_session_mgmt();

if(isset($_POST['submit']))
{			
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');
$time=date('H:i:s');
$day=date('d');
$month=date('n');
$year=date('Y');
$asd=date('Y-m-d H:i:s');
$transport_id=strtotime($asd);
$login_userid=$_SESSION['edu_type'];	
		
if($login_userid=="1")
{
	$inst=$config_class->getsinglerecord("edu_user_account","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['mgmt_code'];					
}
else if($login_userid=="2")
{
	$inst=$config_class->getsinglerecord("edu_user_account","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['mgmt_code'];
}
else if($login_userid=="3")
{
	$inst=$config_class->getsinglerecord("edu_user_account","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['mgmt_code'];
}
else if($login_userid=="101")
{
	$inst=$config_class->getsinglerecord("stu_personal","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['stu_code'];	
}
else if($login_userid=="102")
{
	$inst=$config_class->getsinglerecord("faculty_personal","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['faculty_code'];	
}
else if($login_userid=="103")
{
	$inst=$config_class->getsinglerecord("stu_parent_account","where mgmt_code='".$_SESSION['management']."'");
	$login_user=$inst['parent_code'];
}
else if($login_userid=="104")
{
	$inst=$config_class->getsinglerecord("trp_add_transporter","where management_id='".$_SESSION['management']."'");
	$login_user=$inst['transporter_id'];
}
else if($login_userid=="105")
{
	$inst=$config_class->getsinglerecord("trp_add_driver","where management_id='".$_SESSION['management']."'");
	$login_user=$inst['driver_id'];
}
else if($login_userid=="106")
{
	$inst=$config_class->getsinglerecord("hostel_reg","where management_id='".$_SESSION['management']."'");
	$login_user=$inst['hostel_id'];
}
	
	
	
	/*-------------------------insert code------------------------------------*/
		
	
	$name=$_POST['trans_vhcno'];
	$I_transrc=$_POST['trans_src0'];
	$I_tsrctime=$_POST['trans_time0'];
	$I_trandes=$_POST['trans_dest'];
	$I_trantime=$_POST['trans_destime'];	
	$sevar=$_SESSION['management'];
				
	$df=mysql_num_rows(mysql_query("select * from time_transport where vehicle_no=".$name."  and mgmt_code='".$_SESSION['management']."' "));
	if($df!=0)
	{
		echo"<script>		
		alert('Time table already allocated to this Vehicle. Please check in transport time table reports ');
		window.location.href='mgmt_ttable_transport_view.php';		
		</script>";
		exit;
	}
				
	$table="time_transport";
	$conds="where vehicle_no='".$name."' and mgmt_code='".$_SESSION['management']."'";
	$testa=$config_class->getsinglerecord($table,$conds);
	$columns="mgmt_code,vehicle_no,source,destination,srctime,desttime,status,login_type,date,time,month,year,day,transport_id,user_type,login_type_userid";
	$column_values="'".$sevar."','".$name."','".$I_transrc."','".$I_trandes."','".$I_tsrctime."','".$I_trantime."','1','".$login_userid."','".$date."','".$time."','".$month."','".$year."','".$day."','".$transport_id."','Transport','".$login_user."'";
	$resulta=$config_class->insertrecord($table,$columns,$column_values);		
	$inc=$_POST['ince'];
	
	for($i=1;$i<=$inc;$i++)
	{	
		$I_srcpoint=$_POST['trans_src'.$i];
		$I_srctime=$_POST['trans_time'.$i];
		$table="time_transport1";
		$sevar=$_SESSION['management'];
		$columns="mgmt_code,brd_point,brd_time,status,login_type,date,time,month,year,day,transport_id,user_type,login_type_userid";		
		$column_values="'".$sevar."','".$I_srcpoint."','".$I_srctime."','1','".$login_userid."','".$date."','".$time."','".$month."','".$year."','".$day."','".$transport_id."','Transport','".$login_user."'";		
		$result=$config_class->insertrecord($table,$columns,$column_values);
		if($result)
		{
			$re=1;
						
		}
	}	
	
	if($re=1)
	{
		$suc=base64_encode("succ");
		echo"<script>
		window.location.href='mgmt_ttable_transport.php?succ=".$suc."';
		</script>";
		exit;
	}
	else
	{
		$fail=base64_encode("wrong");
		echo"<script>
		window.location.href='mgmt_ttable_transport.php?notsucc=".$fail."';
		</script>";
		exit;
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Management</title>
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
var iic=0;
function sampleDemo()
{
		
	iic++;
	var get_Val=document.getElementById("addtxt1").value; 
	var get_Val1=document.getElementById("addtxt2").value; 
	
	var a=get_Val;
	var b=(+a + +1);
	var c=(+b + +1);
		
	var se=(+get_Val1 + +1);
	
	var result='';
	result+="<div class='col-sm-12' id='ds"+se+"'  style='padding:0px;margin-top:-10px;'><div class='col-sm-11'></div>"+		
	"<div class='col-sm-1'><img src='delete3.jpg' class='remove1' onclick='sbs("+se+")' style='width:20px;height:20px;'/></div>";			
	result+="<div class='col-sm-12' style='border:0px solid red;margin-top:-15px;'><div class='col-sm-1'></div><div class='col-sm-5'>"+		 		 
	"<div class='form-group'>"+      
	"<label for='usr' id='field_label'>Boarding Point<span style='font-size:18px;color:red;'>&nbsp;*</span></label>"+
    "<input type='text' class='form-control' id='fc45' name='trans_src"+iic+"' placeholder='Boarding Point' title='Please Enter Boarding Point' required>"+	  
	"</div></div><div class='col-sm-5'>"+
	" <div class='form-group'>"+	
	"<label for='usr' id='field_label'>Boarding Time<span style='font-size:18px;color:red;'>&nbsp;*</span></label>"+
    "<input type='time' class='form-control' id='fc46' name='trans_time"+iic+"'  placeholder='Boarding Time' title='Please Enter Boarding Time' required>"+	 	
	"</div></div>";
	result+="</div></div>";
		 
	document.getElementById("ince_val").value=iic;
	var newval=a+b;
	document.getElementById("addtxt1").value=c;
	document.getElementById("addtxt2").value=se;		 
	return result;
	
}
</script>
	
<script>

 $(document).ready(function()
 {
    $("#btnAdd").click(function()
	{
		var s=sampleDemo();
		$("#CustomDiv").append(s);
    });

 });	

</script>

<script>
function sbs(s)
{ 
	var elem = document.getElementById("ds"+s);
	elem.parentNode.removeChild(elem);
	
}


function getroute(no) 
{	

	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
                
			var  somex1=xmlhttp.responseText; 
			var result=somex1.split("#");

			document.getElementById("fc45").value=result[0].trim();
			document.getElementById("fc46").value=result[1].trim();
			document.getElementById("fc47").value=result[2].trim();
			document.getElementById("fc48").value=result[3].trim();
																
		}
    }
	
    xmlhttp.open("GET", "route_details.php?id="+no, true);
    xmlhttp.send();

}

</script>

</head>

<body class="pace-done">
	<div class="pace  pace-inactive">
		<input type='text' name='hidentxt1' id='addtxt1' value="0"/>
		<input type='text' name='hidentxt1' id='addtxt2' value="0"/>
	<?php include("includes/mainheader.php"); ?>
	
	</div>


<!--  page header   -->
		<div class="navbar navbar-default header-highlight">            
					
			<?php  include("includes/main_header.php");  ?>			
			
        </div>
		
		
		<!--  page header stop   -->
		
		
		<!-- page overall content start here -->
		
        <div class="page-container" style="min-height:567px">
		
            <div class="page-content">
			
			
			<!-- page sidemenu start here     -->
			
					<?php  include("includes/leftsidemenu.php");  ?>

				
				<!--  page sidemenu stop here   -->
				
				
				
				
				
				
                <div class="content-wrapper">
				
                    <div class="content">
						<script src="./supporting/Chart.js"></script>
						<script src="./supporting/Chart.StackedBar.js"></script>
						<!--<script type="text/javascript" src="/css/assets/js/plugins/visualization/echarts/echarts.js"></script>-->                        


<div class="page-header">
    <div class="row">
       	 
	   <?php  include("includes/main_header1.php");  ?>
				
    </div>
</div>

<!-- header -->

<!-- body content  -->

<SCRIPT language="javascript">
			
$(function()
{

	// add multiple select / deselect functionality
	$("#selectall").click(function () 
	{
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function()
	{

		if($(".case").length == $(".case:checked").length) 
		{
			$("#selectall").attr("checked", "checked");
		}
		else
		{
			$("#selectall").removeAttr("checked");
		}

	});
});
				
</script>


 
 <!---------------------------------Designing----------------------------------------->	
	
<div class="content" style="padding:0px;">
    
	<!-----------Insert Alert-------->	
		<div class="col-sm-12" style="margin-top:15px;margin-bottom:5px;padding:0px;border:0px solid red;height:40px;width:50%;margin-left:250px;;">
	 
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
            <span class="alert-msg"></span>vehicle details should be unique. !
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
            <span class="alert-msg">vehicle details [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique!</span>
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
            <span class="alert-msg">vehicle details [ <?php echo("<span style='color:blue;'>".$nm."</span>"); ?> ] should be unique. Already exist in database!</span>
            </div>
			
			
			<?php
				
		}
		
			
	 
	 ?>
	 
	
	</div>
		<!----------- End Insert Alert-------->	

	
	<div class="col-sm-12" id="edu_type_label" style="padding:0px 0px 10px 0px;"> Transport Time Table	
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;padding:1px;"><a href="mgmt_ttable_transport_view.php"  style="color:#0099FF;font-weight:bold;font-size:12px;color:white;">View Reports</a></span>	
	</div>

	<div class="col-sm-12" style="border:1px solid lightgrey;padding:10px 0px;">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
						
	<div class="col-sm-12">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	<div class="form-group">
    <label for="usr" id="field_label">Vehicle Number<span style="color:red;font-size:18px;">&nbsp;*</span></label>
    <select class="form-control" id="usr" name="trans_vhcno" title="Please Select Vehicle Number" onchange="getroute(this.value)" required> 
		<option value="">-- select Vehicle Number --</option>
		
		<?php        
		$t=0;
		$sz=mysql_query("select b.SNO as no,a.vehicle_no as vno from trp_add_vehicle a,  trp_add_routemap b where a.SNO=b.vehicle_no and a.management_id='".$_SESSION['management']."' and b.management_id='".$_SESSION['management']."' ORDER By a.vehicle_no ASC ");	   
		while($re=mysql_fetch_array($sz))
        {
			$t++;
        ?>
        <option value="<?php echo($re['no']); ?>"><?php echo($re['vno']);?>    </option>
        <?php
        }
			if($t==0)
			{
		?>
		<option value="">   No Vechicles   </option>
		<?php
			}
		?>
	</select>
	</div>
	</div>	
	<div class="col-sm-1"></div>
	</div>	
	
	<div class="col-sm-12" style="margin-top:-10px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-5">
	<div class="form-group">
    <label for="usr" id="field_label">Source<span style="color:red;font-size:18px;">&nbsp;*</span></label>
    <input type="text" class="form-control" id="fc45" name="trans_src0" placeholder="Enter Source" title="please Enter Source"/>	
	</div>	
	</div>
	<div class="col-sm-5">
	<div class="form-group">
    <label for="usr" id="field_label">Source Time<span style="color:red;font-size:18px;">&nbsp;*</span></label>
    <input type="time" class="form-control" id="fc46" name="trans_time0" placeholder="Timings" title="please Select Timings"/>	
	<input type="hidden" name="exp_data" id="expdat"/>
	</div>
	</div>
	<div class="col-sm-1" style="margin-top:35px;margin-left:-18px;">
	<input type="button" class="edu_btn" id="btnAdd" name="add"  value="Add More Boarding Points" title="Add More Boarding Points" style="font-size:8px;font-weight:normal;background-color:green;width:95px;height:20px;border-radius:2px;">
	<input type="hidden" class="form-control" id="ince_val" name="ince">    
	</div>
	</div>
	
	<div id="CustomDiv"></div>

	<div class="col-sm-12" style="margin-top:-10px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-5">	
    <div class="form-group">
	<?php	  
	$qw=mysql_query("select * from edu_user_institution where mgmt_code='".$_SESSION['management']."' ");
	if($rr=mysql_fetch_array($qw))
	{		
		$mapa=$rr['google_maplink'];
		$lt=$rr['latitude'];
		$lg=$rr['langitude'];		  
	}	  
	?>
    <label for="usr" id="field_label">Destination<span style="color:red;font-size:18px;">&nbsp;*</span></label>
	<input type="text" class="form-control" id="fc47" name="trans_dest" value="<?php echo($mapa); ?>" readonly placeholder="Destination" title="please Enter Destination"/>	
	</div>
	</div>
	<div class="col-sm-5">	
    <div class="form-group">
    <label for="usr" id="field_label">Destination Time<span style="color:red;font-size:18px;">&nbsp;*</span></label>
    <input type="time" class="form-control" id="fc48" name="trans_destime" value="09:30" placeholder="Timings" title="please Select Timings"/>	
	</div>
	</div>
	<div class="col-sm-1"></div>
	</div>
	
	<div class="col-sm-12">
	<div class="col-sm-5"></div>
	<div class="col-sm-4" style="padding-top:20px;">
	<input type="submit" class="btn btn-success"  name="submit" value="Submit" style="width:100px;">
	</div>
	</div>		
	</form>
					
	</div>	
	</div>
	
	<!----------------------------view page------------------------->

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

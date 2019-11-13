<?php

//session_start();

//require_once("connection_test.php");

//error_reporting(0);

include("lib/config.php"); 

//include("includes/head.php");

include("pagination.php");
include("lib/db_configue.php");


if((!isset($_SESSION['rec_id'])) || ($_SESSION['rec_id'] == "")){
	header("Location:emplogin.php");
} else {
	$recid=$_SESSION['rec_id'];
}




// package checking


$userid = $_SESSION['rec_id'];

$sel_query = "select * from quote_recruiter_access where (userid='$userid') and (status='1') and (desc_ra!='') order by id desc limit 1";



//echo $sel_query;

$planstatus=mysql_fetch_array(mysql_query("SELECT plan_resume FROM job_recruiter_plan WHERE plan_rec='$userid'"));



//echo $sel_query ; exit ;

$sel_status = select($sel_query);

$res_count = counts($sel_status);

//echo 'count'.$res_count.'<br />Plan'.$planstatus['plan_resume'];

if($res_count == 0 || $planstatus['plan_resume']==0)  {

header("location: newemp_resume_pack.php?id=".base64_encode($userid)."&option=".base64_encode('resume')."");exit;

}
/*
else
{
		header("location:ad-search.php");
		exit;


		}
*/


/*  ========================= */



$eid=$_SESSION['rec_id'];



	$chk_query1=mysql_query("select * from quote_recruiter_access where userid=$eid and status=1");

	$chk_query=mysql_fetch_array($chk_query1);

	//echo strtotime($chk_query['exp_date'])."<br>";

	//echo strtotime(date("Y-m-d"))."<br>"; exit;

			

	if(mysql_num_rows($chk_query1) > 0)

	{    

		

		

	// $ds="2015-11-28";

	 //if($chk_query['exp_date'] < $ds)

		

	 if(strtotime($chk_query['exp_date']) < strtotime(date("Y-m-d")))

	 {

	 mysql_query("update quote_recruiter_access set status=0 where userid=$eid and status=1");

	 mysql_query("UPDATE job_recruiter_plan SET plan_resume=0, plan_email_usage=0, plan_email=0 WHERE plan_rec='$eid'");

	// header("location: emp_resumeaccess.php?err=Validity Expired");

	 //exit;
	 
	 	header("location: newemp_resume_pack.php?id=".base64_encode($userid)."&option=".base64_encode('resume')."");exit;

	 }

	 }

	

	/*if($_SESSION['sub_rid'] && $_SESSION['sub_rid'])

	{

		$perm = mysql_fetch_array(mysql_query("SELECT resume_access FROM  `subrecruiter` where srid ='$_SESSION[sub_rid]' ")) ;

	

		if($perm[0] != 1)

		{

	

			header("Location:emp_welcome.php?access_fail=no_acc") ;

	

		}

	}*/			

	










/*
$userid = $_SESSION['rec_id'];

$sel_query = "select * from quote_recruiter_access where (userid='$userid') and (status='1') and (desc_ra!='') order by id desc limit 1";



//echo $sel_query;

$planstatus=mysql_fetch_array(mysql_query("SELECT plan_resume FROM job_recruiter_plan WHERE plan_rec='$userid'"));



//echo $sel_query ; exit ;

$sel_status = select($sel_query);

$res_count = counts($sel_status);

//echo 'count'.$res_count.'<br />Plan'.$planstatus['plan_resume'];

if($res_count == 0 || $planstatus['plan_resume']==0)  {

header("location: newemp_resume_pack.php?id=".$userid."&option=resume");exit;

}
/*
else
{
		header("location:ad-search.php");
		exit;


		}*/



/*  ========================= */


/*
$eid=$_SESSION['rec_id'];



	$chk_query1=mysql_query("select * from quote_recruiter_access where userid=$eid and status=1");

	$chk_query=mysql_fetch_array($chk_query1);

	//echo strtotime($chk_query['exp_date'])."<br>";

	//echo strtotime(date("Y-m-d"))."<br>"; exit;

			

	if(mysql_num_rows($chk_query1) > 0)

	{    

		

		

	// $ds="2015-11-28";

	 //if($chk_query['exp_date'] < $ds)

		

	 if(strtotime($chk_query['exp_date']) < strtotime(date("Y-m-d")))

	 {

	 mysql_query("update quote_recruiter_access set status=0 where userid=$eid and status=1");

	 mysql_query("UPDATE job_recruiter_plan SET plan_resume=0, plan_email_usage=0, plan_email=0 WHERE plan_rec='$eid'");

	// header("location: emp_resumeaccess.php?err=Validity Expired");

	 //exit;
	 
	 	header("location: newemp_resume_pack.php?id=".$userid."&option=resume");exit;

	 }

	 }
// package expire data checking






*/










$jid="resumesearch";

if(isset($_SESSION['searchresult'])) {
//	header("Location:ad-search.php");
//} else {
	$seekerIds=explode(",",$_SESSION['searchresult']);
}

if(isset($_REQUEST['folder'])) {
	$folder = $_REQUEST['folder'];
} else {
	$folder = '';
}

$folderData=mysql_fetch_array(mysql_query("SELECT * FROM candidate_folder WHERE fold_id='$folder'"));

$checkdownloadlist=mysql_fetch_array(mysql_query("SELECT plan_resume FROM job_recruiter_plan WHERE plan_rec='$recid'"));
$resumequota=$checkdownloadlist['plan_resume'];










if(isset($_REQUEST['resume_access']))
	{	











$ch = 0;



		$_SESSION['resume_access_search_fields']='';
		$_SESSION['searchresult']="";
		
		$function_area =trim($_REQUEST['function_area']);
		$_SESSION['ht']=$function_area;
		
		$curr_industry = trim($_REQUEST['curr_industry']);
		$_SESSION['ht1']=$curr_industry;
		
		$keyskill = trim($_REQUEST['keyskill']);
		$_SESSION['key']=$keyskill;
		$ke1 = trim($_REQUEST['key1']);
		$ke2 = trim($_REQUEST['key2']);
	
		$from = trim($_REQUEST['from']);
		//$_SESSION['s1']=$from;
		$to = trim($_REQUEST['to']);
		$_SESSION['s1']=$from;
		$_SESSION['ht2']=$to;
		
		$basic_grad = trim($_REQUEST['basic_grad']);
		//$_SESSION['ht3']=$basic_grad;
		
		$_SESSION['s4']=$basic_grad;
		$location = trim($_REQUEST['location']);
		$_SESSION['s3']=$location;
		$country = trim($_REQUEST['country']);
		$_SESSION['ht4']=$country;
		
		$operation = trim($_REQUEST['oper']);
		$notice = $_REQUEST['np'];
		$_SESSION['ht5']=$notice;
		
		$resume_fresh = $_REQUEST['rf'];
		$_SESSION['ht6']=$resume_fresh;
		
		
		date_default_timezone_set("Asia/Kolkata");

	$datt=date("Y-m-d");
	
   $uidabm = $_SESSION['rec_id'];
	

	if($keyskill!="")
	{
	mysql_query("insert into searched_keywords(date,member_id,search_keywords,member_type) values('".$datt."','".$uidabm."','".$keyskill."','Recruiter') ");
	}
	
		
		
		if($function_area!='')
		{
			$fun = " functional_area=".$function_area;
			$search = $fun;
			$ch = 1;
			$functional_area=mysql_fetch_array(mysql_query("select farea from job_seeker_farea WHERE id='$function_area'"));
			$_SESSION['resume_access_search_fields']="<strong>Functional area</strong> : $functional_area[farea]";
		}
/*if($ke1!='' && $ke2!='')
		{
			
            $keyword1 = str_replace(",", " ",$ke1);
			$keyword2 = str_replace(",", " ",$ke2);
			
			$skil = " keyskills LIKE '%".$ke1."%' and keyskills LIKE '%".$ke2."%' ";
if($ch)
			{
				$search = $search." AND ".$skil;
			}
			else
			{
				$search = $skil;
			}
				$search = $skil;
			$ch = 1;
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Keywords : </strong>$ke1, $ke2";	
		}*/
		
		if($curr_industry)
		{
			$indu = " current_industry_type=".$curr_industry;
			if($ch)
			{
				$search = $search." AND ".$indu;
			}
			else
			{
				$search = $indu;
			}
			$ch = 1; 
			$indus=mysql_fetch_array(mysql_query("select * from job_seeker_itype where id='$curr_industry'"));
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Industry Type : </strong>$indus[itype]";
		}
		
		
		//notice period
		if($notice!='')
		{
			$indunp = " notice_period='".$notice."' ";
			if($ch)
			{
				$search = $search." AND ".$indunp;
			}
			else
			{
				$search = $indunp;
			}
			$ch = 1; 
			//$indusnp=mysql_fetch_array(mysql_query("select * from job_seeker_itype where id='$curr_industry'"));
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Notice Period : </strong>$notice";
		}
		// resume freshness
		if($resume_fresh!='')
		{
			$days_resume=0;
			
			
			if($resume_fresh=="7 days")
			{
				$days_resume=7;
			}
			else if($resume_fresh=="15 days")
			{
				$days_resume=15;
			}
			else if($resume_fresh=="30 days")
			{
				$days_resume=30;
			}
			else if($resume_fresh=="45 days")
			{
				$days_resume=45;
			}
			else if($resume_fresh=="60 days")
			{
				$days_resume=60;
			}
			else if($resume_fresh=="90 days")
			{
				$days_resume=90;
			}
			else
			{
				
  $jobCheck=mysql_query("SELECT * FROM job_seeker");
  $cnt=mysql_num_rows($jobCheck);
				$days_resume=$cnt;
			}
			
					$Current = Date('N');
		//echo("current date".$Current);

$DaysToSunday = 7 - $Current; 

$DaysFromMonday = $Current - 1; 

//$Sunday = Date('d/m/y', StrToTime("+ {$DaysToSunday} Days")) . "<br>"; 

$date = Date('Y/m/d', StrToTime("+ {$DaysFromMonday} Days"));
$r=$days_resume;
$d=4+$r;
$mod_date = strtotime($date."- $d days");
$cd=date('Y-m-d');
$result_date=date("Y-m-d",$mod_date);	 

			
			
			
			$indunprf = " date<='".$cd."' and date>='".$result_date."' ";
			if($ch)
			{
				$search = $search." AND ".$indunprf;
			}
			else
			{
				$search = $indunprf;
			}
			$ch = 1; 
			//$indusnp=mysql_fetch_array(mysql_query("select * from job_seeker_itype where id='$curr_industry'"));
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Resume Freshness : </strong>$resume_fresh";
		}
		
		// and operation
		if($operation=="Any one of the keywords")
		{
		if($keyskill)
		{
            $keyword = str_replace(",", " ",$keyskill);
            $saearched=explode(" ",$keyword);
            $srch_sql='';
	
            foreach($saearched as $nn)
             {
                if($nn!='')
                {
                    if($srch_sql=="")
                     {				
                       $srch_sql.="keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$nn)."%') OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR c_company LIKE '%$nn%' OR exp_compname1 LIKE '%$nn%' OR exp_compname2 LIKE '%$nn%' OR exp_compname3 LIKE '%$nn%' OR exp_compname4 LIKE '%$nn%'  OR email LIKE '%$nn%' OR phone_mobile LIKE '%$nn%' OR designation LIKE '%$nn%' OR exp_role1 LIKE '%$nn%' OR exp_role2 LIKE '%$nn%' OR exp_role3 LIKE '%$nn%' OR exp_role4 LIKE '%$nn%' OR keyskills2 LIKE '%$nn%' OR keyskills3 LIKE '%$nn%' OR keyskills4 LIKE '%$nn%'";
            //$srch_sql.="keyskills LIKE '%$nn%' OR job_title LIKE '%$nn%' OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR email LIKE '%$nn%'";
                   
					} else {				
                       $srch_sql.=" OR keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$nn)."%') OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR c_company LIKE '%$nn%' OR exp_compname1 LIKE '%$nn%' OR exp_compname2 LIKE '%$nn%' OR exp_compname3 LIKE '%$nn%' OR exp_compname4 LIKE '%$nn%'  OR email LIKE '%$nn%' OR phone_mobile LIKE '%$nn%' OR designation LIKE '%$nn%' OR exp_role1 LIKE '%$nn%' OR exp_role2 LIKE '%$nn%' OR exp_role3 LIKE '%$nn%' OR exp_role4 LIKE '%$nn%' OR keyskills2 LIKE '%$nn%' OR keyskills3 LIKE '%$nn%' OR keyskills4 LIKE '%$nn%'";
                    }
                }
            }

            $key ='('.$srch_sql.')';
           
			//$key = " ( keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$keyskill)."%') OR username LIKE '%$keyskill%' OR name LIKE '%$keyskill%' OR email LIKE '%$keyskill%')";
			if($ch)
			{
				$search = $search." AND ".$key;
			}
			else
			{
				$search = $key;
			}	
			$ch = 1;		
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Keywords : </strong>$keyskill";	
		}
		}
		
		// AND operation
		
		if($operation=="All of the keywords")
		{
		if($keyskill)
		{
            $keyword = str_replace(",", " ",$keyskill);
            $saearched=explode(" ",$keyword);
            $srch_sql='';
	
            foreach($saearched as $nn)
             {
                if($nn!='')
                {
                    if($srch_sql=="")
                     {				
                       $srch_sql.="(keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$nn)."%') OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR c_company LIKE '%$nn%' OR exp_compname1 LIKE '%$nn%' OR exp_compname2 LIKE '%$nn%' OR exp_compname3 LIKE '%$nn%' OR exp_compname4 LIKE '%$nn%'  OR email LIKE '%$nn%' OR phone_mobile LIKE '%$nn%' OR designation LIKE '%$nn%' OR exp_role1 LIKE '%$nn%' OR exp_role2 LIKE '%$nn%' OR exp_role3 LIKE '%$nn%' OR exp_role4 LIKE '%$nn%' OR keyskills2 LIKE '%$nn%' OR keyskills3 LIKE '%$nn%' OR keyskills4 LIKE '%$nn%')";
            //$srch_sql.="keyskills LIKE '%$nn%' OR job_title LIKE '%$nn%' OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR email LIKE '%$nn%'";
                   
					} else {				
                       $srch_sql.=" AND (keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$nn)."%') OR username LIKE '%$nn%' OR name LIKE '%$nn%' OR c_company LIKE '%$nn%' OR exp_compname1 LIKE '%$nn%' OR exp_compname2 LIKE '%$nn%' OR exp_compname3 LIKE '%$nn%' OR exp_compname4 LIKE '%$nn%' OR email LIKE '%$nn%' OR phone_mobile LIKE '%$nn%' OR designation LIKE '%$nn%' OR exp_role1 LIKE '%$nn%' OR exp_role2 LIKE '%$nn%' OR exp_role3 LIKE '%$nn%' OR exp_role4 LIKE '%$nn%' OR keyskills2 LIKE '%$nn%' OR keyskills3 LIKE '%$nn%' OR keyskills4 LIKE '%$nn%')";
                    } 
                }
            }

            $key ='('.$srch_sql.')';
           
			//$key = " ( keyskills LIKE('%".str_replace(" ","%') OR job_title LIKE ('%",$keyskill)."%') OR username LIKE '%$keyskill%' OR name LIKE '%$keyskill%' OR email LIKE '%$keyskill%')";
			if($ch)
			{
				$search = $search." AND ".$key;
			}
			else
			{
				$search = $key;
			}	
			$ch = 1;		
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Keywords : </strong>$keyskill";	
		}
		}
		
		if($from && $to)
		{
			if($from==0 && $to==0)
			{
				
			$expp = " exp_years=0";
			if($ch)
			{
				$search = $search." AND ".$expp;
			}
			else
			{
				$search = $expp;
			}	
			$ch = 1;
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Experience : </strong>$from - $to Years";	
			}
			else
			{
			$exp = " (exp_years >='".$from."' and exp_years <='".$to."')";
			if($ch)
			{
				$search = $search." AND ".$exp;
			}
			else
			{
				$search = $exp;
			}	
			$ch = 1;
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Experience : </strong>$from - $to Years";	
			}
		}

		if($basic_grad)
		{
			$bg = " ugcourse=".$basic_grad;		
			if($ch)
			{
				$search = $search." AND ".$bg;
			}
			else
			{
				$search = $bg;
			}	
			$ch = 1;
			$graduateresult=mysql_fetch_array(mysql_query("select * from graduation where id='$basic_grad'"));
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Education : </strong>$graduateresult[degree]";
		}
		
		if($location)
		{
			$loc = " current_location like '%$location%'";	
			if($ch)
			{
				$search = $search." AND ".$loc;
			}
			else
			{
				$search = $loc;
			}	
			$ch = 1;	
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Location : </strong>$location";			
		}
		
		if($country)
		{
			$cou = " country=".$country;	
			if($ch)
			{
				$search = $search." AND ".$cou;
			}
			else
			{
				$search = $cou;
			}		
			$ch = 1;		
			$selectcountryresult=mysql_fetch_array(mysql_query("select * from countries where countryID='$country' order by countryName asc"));
			$_SESSION['resume_access_search_fields'].=($_SESSION['resume_access_search_fields']!='') ? ", " : "";
			$_SESSION['resume_access_search_fields'].="<strong>Country : </strong>$selectcountryresult[countryName]";	
		}
		
		if($search)
		{
			//echo "select id from job_seeker where $search AND profilevisibility_status=1 AND login_status=0";exit;
			$viewquery = mysql_query("select id from job_seeker where $search AND profilevisibility_status=1 AND login_status=0 order by last_login desc");
			if(mysql_num_rows($viewquery))
			{	
				$sen = "id IN(";
			
				while($viewuser = mysql_fetch_array($viewquery))
				{
						$send[] = $viewuser['id'];	
						//echo $viewuser['id'];
				}
				$sen = $sen.implode(",",$send).")";
				//echo $sen;exit;
				$_SESSION['searchresult'] = implode(",",$send);
				$_SESSION['cont'] = $sen;
				//echo "test => ".$sen;exit;
				//header("Location:view_resume_search.php?cont");exit; //$sen
				 header("Location:ad-search.php?cont");exit;
				 
				 
			}
			else
			{
				echo "<script language=\"JavaScript\"> alert(\"No matches\"); </script>";
				 
				header("Location:ad-search.php?msg=No Matches Found");	 			
			}
		}
		else
		{
			echo "<script language=\"JavaScript\"> alert(\"No matches\"); </script>";	
			
			header("Location:ad-search.php?msg=No Matches Found"); 		
		}
	}



/*

if(!isset($_SESSION['seeker_id']))

{

			echo "<script>

		window.location='emplogin.php';</script>";
		exit;

}







/*
$vtime = date("h:i:sa");



  $vdate = date("Y-m-d");  

$visitor_update_query = "insert into visitors_counter values('".$vdate."','".$vtime."','1','jbsi')";

mysql_query($visitor_update_query);*/











?>



<html>

<head>

<title>Jobsincorporation - Advance Search</title>

<link rel="icon" href="newimages/j.png" />





<!--

<script type="text/javascript" src="jquery.js"></script>





<link href="js/jquery.datepick.css" rel="stylesheet">

<script src="js/jquery.plugin.js"></script>

<script src="js/jquery.datepick.js"></script>

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" href="css/jquery.ui.theme.css">

	<script src="js/jquery-1.7.2.js"></script>

	<script src="js/jquery.ui.core.js"></script>

	<script src="js/jquery.ui.datepicker.js"></script>

	<link rel="stylesheet" href="css/jquery.ui.datepicker.css">-->


<link rel="stylesheet" href="css/empdevc.css"/>
<style type="text/css">






















body{

	padding:0px;

	margin:0px;

	font-family:arial;

}

.loader {

	position: fixed;

	left: 0px;

	top: 0px;

	width: 100%;

	height: 100%;

	z-index: 9999;

	background: url('images/Icon2.gif') 50% 50% no-repeat rgb(249,249,249);

}

#main

{

	

	width:100%;

	margin-left:auto;

	margin-right:auto;

	/*border:2px solid red;*/

	

	

}




#a{

	background-color:#606060;padding:5px;color:white;text-decoration:none;font-weight:bold;

	

}

#a:hover

{

	background-color:lightgrey;

	color:black;

}





#aa{

	padding:5px;text-decoration:none;font-weight:bold;

	color:black;

}

#aa:hover

{

	background-color:#606060;

	color:white;

}

#content

{

	/*

	border:1px solid black;*/

	margin:58px 0px 0px 0px;

	width:100%;

	background-image:url('emp gif1.gif');

	

	background-size: 100% 100%;

		box-shadow:0px 5px 15px grey;
	-moz-box-shadow:0px 5px 15px grey;
	-webkit-box-shadow:0px 5px 15px grey;
}


#login

{

	float:right;

	width:30%;/*

	border:1px solid black;*/

}

#loginfor

{

	float:right;

	width:30%;/*

	border:1px solid black;*/

}

#profile

{

	float:right;

	width:30%;/*

	border:1px solid black;*/

}





#search

{



	height:300px;

	

}

#subsearch

{

	margin:0px 0px 0px 100px;

	height:100px;

	/*border:1px solid black;

	*/width:70%;

}

#np

{

	border:1px solid black;

	width:349px;

	height:49px;

	float:right;

	margin:-30px 0px 0px 0px;

	

	background-image:url('newimages/np.png');

}



#companies

{

	/*

	border:1px solid black;*/

	margin:0px 0px 0px 0px;

	height:100px;

	background-color:grey;

}

#footer

{

	/*

	border:1px solid black;*/

	margin:0px 0px 0px 0px;

	height:200px;

	background-color:black;

}

#presults:hover

{

	box-shadow: 0px 0px 20px #CCC;

	-moz-box-shadow: 0px 0px 20px #CCC;

	-webkit-box-shadow: 0px 0px 20px #CCC;

	

}


.procinfobar a{
   font-weight:bold;
  text-decoration:underline;
  
}
.procinfobar a:hover{  
  text-decoration:none;  
}

</style>







	<script type="text/javascript">

/*
	function registration() {

	//alert(stra);

		//	document.getElementById("eduup").style.display ="none"; document.getElementById('dlight').style.display='none';document.getElementById('dfade').style.display='none'

				document.getElementById("dlightaa").style.display ="block";

				document.getElementById("dfadeaa").style.display ="block";   

   window.scrollTo(400,400);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                //document.getElementById("txtHint").value= xmlhttp.responseText;

				//document.getElementById("txtHint1").value= xmlhttp.responseText;

				

				var  somex1=xmlhttp.responseText; 

				//alert(somex1);

				//var somex=somex1.split(",");

				//document.getElementById("results").style.display ="none";

				//document.getElementById("hirenow").style.display ="none";

				

				document.getElementById("dbupdate").innerHTML =somex1;

								document.getElementById("dlightaa").style.display ="none";

				document.getElementById("dfadeaa").style.display ="none";

window.scrollTo(400,400);





																

            }

        }

        xmlhttp.open("GET", "newregister1.php?register=reg", true);

        xmlhttp.send();

		

		

		

    	

	

}


*/




    function ValidateForm() {
        var del_str = "check";
        var j1 = 0;
        for (i = 0; i < document.mailform.length; i++) {
            ele = document.mailform.elements[i];
            ele_name = ele.name;
            if (ele_name.substring(0, del_str.length) == del_str) {
                if (ele.checked == true) {
                    j1 = j1 + 1;
                }
            }
        }
        if (j1 < 1) {
            alert("Please select atleaset one job seeker");
            return false;
        }
        /*else
        {
        alert("Are You Sure You Want To Send Email");
        }*/
    }
    function SetAllCheckBoxes(FormName, FieldName, CheckValue) {
        if (!document.forms[FormName]) {

            return;
        }
        var objCheckBoxes = document.forms[FormName].elements[FieldName];

        if (!objCheckBoxes)
            return;
        var countCheckBoxes = objCheckBoxes.length;
        if (!countCheckBoxes) {
            objCheckBoxes.checked = CheckValue;

        }
        else {
            // set the check value for all check boxes
            for (var i = 0; i < countCheckBoxes; i++) {
                objCheckBoxes[i].checked = CheckValue;
            }
        }
    }


    function selectUnselect_contacts(form) {

        for (var i = 1; i < form.elements.length; i++) {
            eval("form.elements[" + i + "].checked = form.elements[0].checked");
        }

    }


function validate()
{
	var function_area=document.resume_access.function_area.value.trim();
	
	var curr_industry=document.resume_access.curr_industry.value.trim();
	
	var keyskill=document.resume_access.keyskill.value.trim(); 
	
	var from=document.resume_access.from.value.trim();
	
	var to=document.resume_access.to.value.trim();
	
	var basic_grad=document.resume_access.basic_grad.value.trim();
	
	var location=document.resume_access.location.value.trim(); 
	
	var country =document.resume_access.country.value.trim();
	
		var kk1=document.getElementById('rfs').value;
		var kk2=document.getElementById('nps').value;
		
	
	if(kk1=="" && kk2=="" && function_area=="" && curr_industry=="" && keyskill=="" && from=="" && to=="" && basic_grad=="" && location=="" && country=="")
	{ 
 		alert("Enter any one field for search.");
		
		return false;	
	}
	
	if(from!="")
	{
		if(to=="")
		{
			alert("Enter both field of search.");
			
			return false;	
		}
	}
	
	if(to!="")
	{
		if(from=="")
		{
			alert("Enter both field for search.");
			
			return false;	
		}
	}
 	return true;
}	

function view(id)
{
	//alert("testing");
	//alert(window.location.href);
	var as="view"+id;
	//alert(as);
	document.getElementById(as).style.display='block';
	//window.location.href=window.location.href;
	
	var sas="viewed"+id;

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(sas).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","view_ajax.php?jsids="+id,true);
xmlhttp.send();


	
	
	
}

function asa()
{
	//alert("dfd");
	window.scrollTo(800,800);
}



</script>
	<link rel="stylesheet" href="styles.css" />

	<script src="backtotop.js"></script>
</head>

<body onload="asa()">





<div id="main" >





<div id="dlightaa" class="dpydivcontentaa" style="">



Loading...



	</div>

	</center>

    <div id="dfadeaa" class="dpybgshadeaa"></div>














<?php 

require_once("newempskin.php");

 ?>






<!--

profile

-->








<!--
<div id="np" style="opacity:0.65;filter:alpha(opacity=65);">



</div>
-->






<!--
<div id="dbupdate">





</div>-->


<div id="hirenow" >







<div  style="font-size:18px;margin:35px 30px 10px 30px;">

<?php

if(isset($_GET['msg']))
{

?>
<div style="text-align:center;">
<span style="font-weight:bold;font-family:arial;font-size:16px;text-shadow:2px 2px 5px grey;-webkit-text-shadow:2px 2px 5px grey;-moz-text-shadow:2px 2px 5px grey;color:orangered;">

No Matches Found

</span>
</div>
<?php
}


?>


<span style="font-weight:bold;font-family:arial;font-size:22px;text-shadow:2px 2px 5px grey;-webkit-text-shadow:2px 2px 5px grey;-moz-text-shadow:2px 2px 5px grey;color:#606060;">

Advanced Search

</span>

</div>

<div  style="float:left;box-shadow: 0px 0px 20px #CCC;-webkit-box-shadow: 0px 0px 20px #CCC;-moz-box-shadow: 0px 0px 20px #CCC;font-size:18px;margin:0px 30px 30px 30px;border-radius:5px;border:1px solid lightgrey;">




<!--  search creteria start  -->




<div style="margin:0px 0px 0px 5%;  float:left; width: 90%;border:0px solid lightgreen;" >
<form name="resume_access" method="post" action="<?php echo $PHP_SELF;?>">
<div style="width:100%;float:left;border:0px solid black;">
	
<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" >
	Keywords
	<input name="keyskill" type="text" class="full" placeholder="Skills,Designation,Job title etc.," value="<?php echo($_SESSION['key']); ?>" style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" />
	</div>	
<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" id="k2">
	Operation
	<select name="oper"    id="k" style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" >
		<option>All of the keywords</option>
	<option>Any one of the keywords</option>
	
	</select>

	</div>	
	
	<div style="width:30%; padding:5px;border:0px solid black;float:left;" >
	Experience
	<div style="border:0px solid black;width:100%;float:left;">
	<select name="from"  style="margin:5px 0px 0px 0px;border:1px solid grey;width:46%;height:42px;float:left;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" >
<option value="">Year</option>
			 <?php
		
		if($_SESSION['s1']!="")
		{
			?>
			<option value="<?php echo($_SESSION['s1']); ?>" selected>
			<?php echo($_SESSION['s1']);  ?>
			</option>
			<?php
			
		}
		
	 for($i=0;$i<30;$i++){ ?>
			 <option value='<?= $i ?>'><?= $i ?></option>
			 <?php } ?>
		</select>
&nbsp;<span style="font-size:13px;">to</span>&nbsp;
		
			<select name="to"  style="float:right;margin:5px 0px 0px 0px;border:1px solid grey;width:45%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" >
<option value="">Year</option>
			 <?php
		
		if($_SESSION['ht2']!="")
		{
			?>
			<option value="<?php echo($_SESSION['ht2']); ?>" selected>
			<?php echo($_SESSION['ht2']);  ?>
			</option>
			<?php
			
		}
		
	 for($i=0;$i<30;$i++){ ?>
			 <option value='<?= $i ?>'><?= $i ?></option>
			 <?php } ?>
		</select>
	</div>
	</div>
	</div>
	
	<!-- First row end -->
	<div style="width:100%;float:left;border:0px solid black;">
	
	<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" >
	Location
	<input name="location" type="text" placeholder="Location" title="Location" value="<?php //echo($_SESSION['s3']); ?>" style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" />
	</div>	
	
		<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" >
	Functional Area
	<select style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" name="function_area" id="function_area">
		<option value="">Select</option>
		<?php 
		$functional_arearesult=mysql_query("select * from job_seeker_farea");
		while($functional_arearesultrow=mysql_fetch_array($functional_arearesult))
		{
			if($_SESSION['ht']==$functional_arearesultrow['id'])
			{
				?>
		
				<?php
			}
			else
			{
			?>
		<option value="<?php echo $functional_arearesultrow['id'];?>"> <?php echo $functional_arearesultrow['farea'];?> </option>
		<?php 
			}
		} ?>	
	</select>
	</div>	
	
	
	
	
			<div style="width:30%; padding:5px;border:0px solid black;float:left;" >
	Industry Type
	<select style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" name="curr_industry" id="curr_industry">
		<option value="">Select</option>
		<?php $industryresult=mysql_query("select * from job_seeker_itype");
			while($industryresultresultrow=mysql_fetch_array($industryresult))
			{
				if($_SESSION['ht1']==$industryresultresultrow['id'])
			{
				?>
					<option value="<?php echo $industryresultresultrow['id'];?>" selected> <?php echo $industryresultresultrow['itype'];?> </option>
		
				<?php
			}
			else
			{
				?>
			<option value="<?php echo $industryresultresultrow['id'];?>"> <?php echo $industryresultresultrow['itype'];?> </option>
		  <?php 
			}
		  } ?>	
	</select>

	</div>	
</div>
<!--  Second row end-->
	<div style="width:100%;float:left;border:0px solid black;">
<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" >
	<div style="border:0px solid black;width:100%;float:left;">
	<div style="float:left;width:50%;">
Qualification
</div>
<div style="float:left;width:48%;">
Select Country
</div>
</div>
	<div style="border:0px solid black;width:100%;float:left;">
	<input type="text" placeholder="Qualififcation" title="Qualification" name="basic_grad" id="basic_grad"  style="margin:5px 0px 0px 0px;border:1px solid grey;width:46%;height:42px;float:left;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" />

		
			<select name="country" id="select_country"   style="float:right;margin:5px 0px 0px 0px;border:1px solid grey;width:49%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" >
<option value="" selected="selected">Select</option>
			<?php $selectcountryresult=mysql_query("select * from countries order by countryName asc");
					while($selectcountryrow=mysql_fetch_array($selectcountryresult))
					{
						if($_SESSION['ht4']==$selectcountryrow['countryID'])
						{
							?>
									<option value="<?php echo $selectcountryrow['countryID'];?>" selected> <?php echo $selectcountryrow['countryName'];?> </option>
			
							<?php
						}
						else
						{
						?>
					<option value="<?php echo $selectcountryrow['countryID'];?>"> <?php echo $selectcountryrow['countryName'];?> </option>
			<?php
						}
			} ?>	

</select>
			</div>
	</div>	

	
	<div style="width:32.5%; padding:5px;border:0px solid black;float:left;" >
	Notice Period
	<select style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" name="np" id="nps">
		<option value="" selected="selected">Select</option>
	  <?php
	  if($_SESSION['ht5']=="")
	  {
		  
	  }
	  else
	  {
		  ?>
		  
			<option selected><?php echo($_SESSION['ht5']); ?></option>
		  <?php
	  }
	  ?>
			<option>Immediate</option>
			
				<option>One Week</option>
			
				<option>Two Weeks</option>
			
				<option>Three Weeks</option>
			
				<option>One Month</option>
			
				<option>45 Days</option>
			
				<option>Two Months</option>
			
				<option>Three Months</option>
	
	</select>
	</div>	

	<div style="width:30%; padding:5px;border:0px solid black;float:left;" >
	Resume Freshness
	<select style="margin:5px 0px 0px 0px;border:1px solid grey;width:100%;height:42px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);" name="rf" id="rfs">
		<option value="" selected="selected">Select</option>
	    <?php
	  if($_SESSION['ht6']=="")
	  {
		  
	  }
	  else
	  {
		  ?>
		  
			<option selected><?php echo($_SESSION['ht6']); ?></option>
		  <?php
	  }
	  ?>
	
			<option>7 days</option>
			
				<option>15 days</option>
			
				
				<option>30 days</option>
			
				<option>45 days</option>
			
				<option>60 days</option>
			
				<option>90 days</option>
				<option>Above 90 days</option>
			
	</select>
	</div>	
	
	</div>
	
<div style="margin:0px 0px 0px 0px; float:left; height: 65px; width: 100%;border:0px solid lightgreen;" >
<input type="submit" value="Search" name="resume_access" onclick="javascript : return validate();" placeholder="Location" style="box-shadow:3px 3px 5px grey;margin:5px 0px 0px 0px;border:0px solid black;width:17%;height:42px;border-radius:3px;-webkit-border-radius:3px;opacity:0.8;filter:alpha(opacity=80);-moz-border-radius:3px;background-color:#606060;font-weight:bold;float:right;color:white;" />
</div>
	
	
	
	
	</form>
</div>



<!-- Search creteria End -->











</div>
<?php
$sds="none";

if(isset($_SESSION['cont']) || isset($_GET['folder']))
{

if(isset($_REQUEST['cont']) || isset($_GET['folder']))
{
	$sds="block";
	
	
}
else
{
	$sds="none";
}
}	
?>

<div  style="display:<?php echo($sds) ?>;width:98%;background-color:smokewhite;float:left;box-shadow: 0px 0px 20px #CCC;-webkit-box-shadow: 0px 0px 20px #CCC;-moz-box-shadow: 0px 0px 20px #CCC;font-size:18px;margin:0px 30px 30px 10px;border-radius:5px;border:1px solid lightgrey;">


<div class="procinfobar"> 
	<table>
		<tr class="folderhead">
			<td class="mangerhead">
				<a href="ad-search.php?cont" style="text-decoration:none;color:#606060;">
				Search Result
				<hr style="margin:-2px 25px 7px 25px; border-width:2px;">
				<div class="folder inline">
					( <?=sizeof($seekerIds)?> )
				</div>
				</a>
			</td>
			<?php
				$selectFolder=mysql_query("SELECT * FROM candidate_folder WHERE fold_user=0 AND fold_id!=19 ORDER BY fold_position ASC");
				while($rowFolder=mysql_fetch_array($selectFolder)) {
			?>
			<td class="mangerhead">
				<a href="ad-search.php?folder=<?=$rowFolder['fold_id']?>" style="text-decoration:none;color:#606060;">
				<?=$rowFolder['fold_name']?>
				<hr style="margin:-2px 25px 7px 25px; border-width:2px;">
				<div class="folder inline">
					( <?=mysql_num_rows(mysql_query("SELECT * FROM job_recruiter_folder WHERE fold_recruiter='$_SESSION[rec_id]' AND fold_folder='$rowFolder[fold_id]'"))?> )
				</div>
				</a>
			</td>
			<?php } ?>
			
			<td class="mangerhead">
				<a id="clickme" href="javascript:void(0);" style="text-decoration:none;color:#606060;">
					Personal folder ( <?php 				
	echo(mysql_num_rows(mysql_query("SELECT * FROM candidate_folder WHERE fold_user='$recid' ORDER BY fold_id ASC")));
			 ?> )
					<hr style="margin:-2px 25px 7px 25px; border-width:2px;">
					<div class="folder inline">
						view
					</div>
				</a>
				
				<div id="book" class="innermagerhead" style="display:none;background-color:grey;">
					<?php
						$selectFolder=mysql_query("SELECT * FROM candidate_folder WHERE fold_user='$recid' ORDER BY fold_id ASC");
						if(mysql_num_rows($selectFolder)>0) {
						while($rowFolder=mysql_fetch_array($selectFolder)) {
					?>
					<a href="ad-search.php?jid=<?=$jid?>&folder=<?=$rowFolder['fold_id']?>" style="text-decoration:none;color:#e0e0e0;">
						<?=$rowFolder['fold_name']?>
						<div class="folder inline">
							( <?php
							//=mysql_num_rows(mysql_query("SELECT * FROM job_seeker_recruiter_jobs WHERE jid='$jid' AND folder='$rowFolder[fold_id]'"))
							
							
	echo(mysql_num_rows(mysql_query("SELECT fold_seeker FROM job_recruiter_folder WHERE fold_recruiter='$_SESSION[rec_id]' AND fold_folder='$rowFolder[fold_id]'")));
							?> )
						</div>
					</a>
					
					<hr>
					
					<?php } } else { ?>
						<a href="#" style="text-decoration:none;color:white;">
							No folder created

						</a>
						<hr>
					<?php } ?>
					
					<a href="newemp_folder.php" style="color:#E0E0E0;">Manage</a> <span style="color:#E0E0E0;">|</span> <a href="newemp_folders_new.php" style="color:#E0E0E0;">Add folder</a>
					
				</div>
			</td>
		</tr>
	</table>
</div>
<div style="font-family:Agency FB;width:100%;border:1px solid #ffc745;box-shadow:0px 0px 5px grey;-moz-box-shadow:0px 0px 5px grey;-webkit-box-shadow:0px 0px 5px grey;background-color:white;font-size:20px;font-weight:bold;color:#606060;"></div>
<div style="font-family:Agency FB;width:100%;border:0px solid black;background-color:white;font-size:20px;font-weight:bold;color:#505050;padding-top:15px;padding-bottom:15px;">
<?php if(isset($_REQUEST['moved'])) { ?>
	&nbsp;<span style="color:#00CC99;"><strong>Candidate moved successfully</strong></span>
	<?php } ?>
	<br/>
&nbsp;
<?php echo (isset($_REQUEST['folder'])) ? $folderData['fold_name'] : "Search Results"; ?> 
	<div style="float:right;margin:0px 0px 0px -5px;font-family:Helvetica;font-weight:normal;font-size:16px;">No of resumes per page : 25&nbsp;</div>
</div>

<!-- search results start -->
<div style="font-family:Helvetica;width:100%;border:0px solid black;background-color:white;color:#505050;">

<form method='post' action='newmail_preview.php' name='mailform' onSubmit='return ValidateForm()'>
	<div class="procinfobar" style="margin-top:0px;"> 
	<table width="100%" border="0" style="border-collapse:collapse;">
		<tr style="background-color:#E5E5E5; height:30px; font-size:13px;color:black;font-size:15px;">
			<td style="width:3%; text-align:center;">
				<input type="checkbox" name="select_all_contacts" id="select_all_contacts" onClick="selectUnselect_contacts(this.form)" class="text1"/>
			</td>
			<td>
				<strong>Personal Details</strong>
			</td>
			<td>
				<strong>Experience Summary</strong>
			</td>
			<td>
				<strong>Professional Details</strong>
			</td>
			
			<td style="width: 15%; text-align:center;">
				<strong>Process</strong>
			</td>
		</tr>
<?php

if($folder=='') {
	$sql="SELECT id FROM job_seeker WHERE id IN ($_SESSION[searchresult]) ORDER BY last_login DESC";
} else {
	$sql="SELECT fold_seeker FROM job_recruiter_folder WHERE fold_recruiter='$_SESSION[rec_id]' AND fold_folder='$folder'";
}
if($folder!='') {
	$strget="folder=$folder";
} else {
	$strget="cont";
}


$rowsPerPage =25;
//echo getPagingQuery($sql, $rowsPerPage,$strget);exit;
$result=mysql_query(getPagingQuery($sql, $rowsPerPage,$strget)) or die($sql." - ".mysql_error());

$pagingLink = getPagingLink($sql, $rowsPerPage,$strget); 

$count_postreply = mysql_num_rows($result);

if($count_postreply>0) {
$cnt=0;
while($resrow=mysql_fetch_array($result)) 
{
	$cnt++;
	
	if($folder=='') {
		$seeker_id = $resrow['id'];
	} else {
		$seeker_id = $resrow['fold_seeker'];
	}
	$sql="select * from job_seeker where id=$seeker_id ";
	$res=mysql_query($sql);
	$seeker_fetch=mysql_fetch_array($res);
	
// ---------- Previous company ---------- //

$cuurent_company="";
$curr_query=mysql_query("SELECT
    CASE
        WHEN `exp_compto1` >= `exp_compto2` AND `exp_compto1` >= `exp_compto3` THEN `exp_compto1`
        WHEN `exp_compto2` >= `exp_compto1` AND `exp_compto2` >= `exp_compto3` THEN `exp_compto2`
        WHEN `exp_compto3` >= `exp_compto1` AND `exp_compto3` >= `exp_compto2` THEN `exp_compto3`
        ELSE  `exp_compto1`
    END AS M FROM job_seeker WHERE `id`=$seeker_fetch[id]");
$curr_date=mysql_fetch_array($curr_query);

if($curr_date['M'] == "0000-00-00") {
	$cuurent_company = "";
} elseif($curr_date['M']==$seeker_fetch['exp_compto4']) {
	//echo "4th ".$curr_date['M'];
	$cuurent_company = "<b>".$seeker_fetch['exp_role4']."</b><br>";
	$cuurent_company .= $seeker_fetch['exp_compname4']."(".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom4']))." to ".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom4'])).")";
	//$cuurent_company .= $seeker_fetch['exp_compdesc4'];

} elseif($curr_date['M']==$seeker_fetch['exp_compto3']) {
	//echo "3rd ".$curr_date['M'];
	$cuurent_company = "<b>".$seeker_fetch['exp_role3']."</b><br>";
	$cuurent_company .= $seeker_fetch['exp_compname3']."(".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom3']))." to ".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom3'])).")";
	//$cuurent_company .= $seeker_fetch['exp_compdesc3'];
	
} elseif($curr_date['M']==$seeker_fetch['exp_compto2']) {
	//echo "2nd ".$curr_date['M'];
	$cuurent_company = "<b>".$seeker_fetch['exp_role2']."</b><br>";
	$cuurent_company .= $seeker_fetch['exp_compname2']."(".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom2']))." to ".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom2'])).")";
	//$cuurent_company .= $seeker_fetch['exp_compdesc2'];
	
} elseif($curr_date['M']==$seeker_fetch['exp_compto1']) {
	//echo "1st ".$curr_date['M'];
	$cuurent_company = "<b>".$seeker_fetch['exp_role1']."</b><br>";
	$cuurent_company .= $seeker_fetch['exp_compname1']."(".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom1']))." to ".date("d-M-Y",strtotime($seeker_fetch['exp_compfrom1'])).")";
	//$cuurent_company .= $seeker_fetch['exp_compdesc1'];
	
} else {
	$cuurent_company = "Fresher";
}

// ---------- Previous company end ---------- //


// ---------- Education details ---------- //

$study="";
//echo "SELECT * FROM graduation WHERE id=$seeker_fetch[ugcourse]";
//$keyword='B.Tech,MCA,B.E ';

            //$keywords = str_replace(",", " ",$keyword);
            //$saearched=explode(" ",$keywords);
			$ug_graduvate=" ";
if(($seeker_fetch['ugcourse'] != "") && ($seeker_fetch['ugcourse'] != 0)) {
	if(is_numeric($seeker_fetch['ugcourse'])) {
	$ug_graduvate_aray = mysql_fetch_array(mysql_query("SELECT * FROM graduation WHERE id='".$seeker_fetch['ugcourse']."'"));

	} else {
	$ug_graduvate_aray = mysql_fetch_array(mysql_query("SELECT * FROM graduation WHERE degree LIKE '%$seeker_fetch[ugcourse]%'"));
	}
	$ug_graduvate = $ug_graduvate_aray['degree'];
	/* foreach($saearched as $nn)
             {
				 
				 if (strpos($ug_graduvatee, $nn) !== false)
				 {
				 
	$ug_graduvate = preg_replace("/\b([a-z]*${nn}[a-z]*)\b/i","<span style='background-color:yellow;'>$1</span>",$ug_graduvatee);
				 }
    
			 }*/
	if($seeker_fetch['ugspecialization'] != "") {
		$ug_graduvate .= " in $seeker_fetch[ugspecialization]";
		 /*foreach($saearched as $nn)
             {
				  if (strpos($ug_graduvatee, $nn) !== false)
				 {
	$ug_graduvate .= preg_replace("/\b([a-z]*${nn}[a-z]*)\b/i","<span style='background-color:yellow;'>$1</span>",$ug_graduvatee);
				 }
			 }*/
	} 
	if($seeker_fetch['ug_to_year'] != "") {
		$ug_graduvate .= " ($seeker_fetch[ug_to_year])";
/*foreach($saearched as $nn)
             {
				  if (strpos($ug_graduvatee, $nn) !== false)
				 {
	$ug_graduvate .= preg_replace("/\b([a-z]*${nn}[a-z]*)\b/i","<span style='background-color:yellow;'>$1</span>",$ug_graduvatee);
				 }
			 }*/
	}
	$study="ug";
}
$pg_graduvate=" ";
if(($seeker_fetch['pgcourse'] != "") && ($seeker_fetch['pgcourse'] != 0)) {
	$pg_graduvate_aray = mysql_fetch_array(mysql_query("SELECT * FROM post_graduation WHERE id='$seeker_fetch[pgcourse]'"));
	$pg_graduvate = $pg_graduvate_aray['degree'];
	if($seeker_fetch['pgspecialization'] != "") {
		$pg_graduvate .= " in $seeker_fetch[pgspecialization]";
	} 
	if($seeker_fetch['pg_to_year'] != "") {
		$pg_graduvate .= " ($seeker_fetch[pg_to_year])";
	}
	$study="pg";
}
$doc_degree=" ";
if(($seeker_fetch['post_pgcourse'] != "") && ($seeker_fetch['post_pgcourse'] != 0)) {
	$doc_degree_aray = mysql_fetch_array(mysql_query("SELECT * FROM doctrate WHERE id='$seeker_fetch[post_pgcourse]'"));
	$doc_degree = $doc_degree_aray['degree'];
	if($seeker_fetch['doctrate_specialization'] != "") {
		$doc_degree .= " in $seeker_fetch[doctrate_specialization]";
	} 
	$study="doc";
}

// ---------- Education details end ---------- //


// ---------- Experience details ---------- //


$exp_years = $seeker_fetch['exp_years'];

$exp_months = $seeker_fetch['exp_months']; 	
//echo $exp_years."-".$exp_months."-";
$exp_yearmonths = "";

if(($exp_months=='0' && $exp_years=='0') || ($exp_months=='' && $exp_years==''))
{
	$exp_yearmonths= "Fresher";
}

if(($exp_years > 0) && ($exp_years != ""))
 { 
	if($exp_years >1)
		$exp_yearmonths.= "$exp_years Years";
	else
		$exp_yearmonths.= "$exp_years Year";
 }		
 
 // if($exp_years > 0 && $exp_months > 0)
	// $exp_yearmonths.= " and "; 
 if(($exp_months > 0) && ($exp_months != ""))
 {
	if($exp_yearmonths != "") {
		$exp_yearmonths .= " and ";
	} else {
		$exp_yearmonths = "";
	}
	
   if($exp_months > 1)
	$exp_yearmonths.= "$exp_months Months";
	
   else
	$exp_yearmonths.= "$exp_months Month";
	
 }
 if(($exp_yearmonths=='Fresher') || ($exp_yearmonths == ""))
{
	$experience="Fresher";
} else {
 	$experience=$exp_yearmonths;
}

// ---------- Experience details end ---------- //


	if($cnt%2==0)
	{
	?>
		<tr  style="background-color:white;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		
		<?php
	}
	else
	{
		?>
		<tr style="background-color:whitesmoke;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		<?php
	}
	?>
		<td style="width:3%; text-align:center;">
				<input type="checkbox" name="check[]" value="<?php echo $seeker_id;?>" />
			</td>
		<td style="font-family:Helvetica;font-size:12px;">
			<?php
			
//echo($sql);
	$keyword=$_SESSION['key'];
$str=$seeker_fetch['name'];

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
	
	
			
			
			?> <? if($seeker_fetch['membership_status']==1) {?> <img src="images/Featured_icon.png" width="12" /> <img src="images/Featured_icon.png" width="12" /> <img src="images/Featured_icon.png" width="12" /> <? } ?> 
			
			
			
			<?php
			
			$qwd=mysql_query("select * from quote_recruiter_access where userid='$recid'");
			if($rwe=mysql_fetch_array($qwd))
			{
				$pr=$rwe['price'];
			}
			
			if($pr=="0")
			{
				
			}
			else
			{
			?>
			
			
			<br>
				<img src="images/email.png" style="width:15px;height:10px;" title="email id" /> : <?php 
				//echo ;
						
	$keyword=$_SESSION['key'];
$str=$seeker_fetch['email'];

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
	
				
				
				?> <br>
				<img src="images/mobile.jpg" style="width:15px;height:15px;" title="Mobile Number" /> : <?php
				//echo ($seeker_fetch['phone_mobile']==0) ? "" : $seeker_fetch['phone_mobile'];
					
	$keyword=$_SESSION['key'];
$str=$seeker_fetch['phone_mobile'];

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
	
			




			}

				?> <br>
				<img src="images/location.png" style="width:15px;height:15px;" title="Location"/> : <?php if($seeker_fetch['current_location']!='') 
					
				//echo "".substr($seeker_fetch['current_location'],0,12)." ";
				
				$keyword=$_SESSION['s3'];
$str=$seeker_fetch['current_location'];

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
echo($str);
				
				

				
				
				?>
			</td>
		
		<td style="font-family:Helvetica;font-size:12px;">
				 <?php
				  
				 
				 $keyword=$_SESSION['s1'];
$str=$experience;

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
?>
				 <br>
				Last Active on : 
				<?php
					if($seeker_fetch['last_login'] != '0000-00-00 00:00:00') {
						echo date("l M,dS Y",strtotime($seeker_fetch['last_login']));
					} else {
						echo date("l M,dS Y",strtotime($seeker_fetch['date']));
					}
				
					if(($resrow['applydate'] != '') && ($resrow['applydate'] != '0000-00-00 00:00:00') && ($resrow['applydate'] != '0000-00-00')) {
						echo "<br>Applied on : ".date("l M,dS Y",strtotime($resrow['applydate']));
					} 
				?>
			</td>
			<td style="font-family:Helvetica;font-size:12px;">
				<?php 
				//echo $cuurent_company;

										
	$keyword=$_SESSION['key'];
$str=$cuurent_company;

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
	

				?><br/>
				
				<?php //echo $study." : ";
					if($doc_degree != "") {
						//echo $doc_degree;
						$idds=$_SESSION['s4'];
						
													$doc_degree_arayy = mysql_fetch_array(mysql_query("SELECT * FROM doctrate WHERE id='$idds'"));
	$doc_degreey = $doc_degree_arayy['degree'];
												
	$keyword=$doc_degreey;
$str=$doc_degree;

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str."<br/>");
						
						
					} 
					if($pg_graduvate != "") {
						//echo $pg_graduvate;
						$idda=$_SESSION['s4'];
												$pg_graduvate_arayf = mysql_fetch_array(mysql_query("SELECT * FROM post_graduation WHERE id='$idda'"));
	$pg_graduvatef = $pg_graduvate_arayf['degree'];

									
	$keyword=$pg_graduvatef;
$str=$pg_graduvate;

            $keywords = str_replace("/", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str."<br/>");
						
						
						
						
					} 
					if($ug_graduvate != "") {
						//echo $ug_graduvate;
						
					
						$idd=$_SESSION['s4'];
						$ug_graduvate_arayt = mysql_fetch_array(mysql_query("SELECT * FROM graduation WHERE id='$idd'"));
	
	$ug_graduvatet = $ug_graduvate_arayt['degree'];
	
	
									
	$keyword=$ug_graduvatet;
$str=$ug_graduvate;

            $keywords = str_replace("/", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str."<br/>");
	//echo($ug_graduvate);

						
						
					} 
				?>
				<br>
				<!--<strong>Functional Area :</strong> 
				<?php 
				$sel_farea=mysql_fetch_array(mysql_query("select * from job_seeker_farea where id=$seeker_fetch[functional_area]"));
				if($sel_farea['farea']!='') { 
					echo ucfirst($sel_farea['farea']); 
				} else { 
					echo "Nil"; 
				}
				?>
				<br>-->
				
			</td>
			
			
			<td style="width: 15%; text-align:center;font-family:Helvetica;font-size:12px;">
			<?php $idc=base64_encode($seeker_fetch['id']);

							$searchdata=$_SESSION['key']." ".$_SESSION['s1']."".$as."".$_SESSION['ht2']."".$re." ".$_SESSION['s3']." ".$_SESSION['ht']." ".$_SESSION['ht1']." ".$_SESSION['s4']." ".$_SESSION['ht4']." ".$_SESSION['ht5']." ".$_SESSION['ht6'];
							$searchs=base64_encode($searchdata);
							if(isset($_SESSION['sub_rid']))
							{
								$sr=$_SESSION['sub_rid'];
							}
							else
							{
								$sr="0";
							}
											$viewcount=mysql_num_rows(mysql_query("SELECT seeker FROM resumeview WHERE recruiter='$_SESSION[rec_id]' AND seeker='".$seeker_fetch['id']."' and subrec='$sr'"));
											$downloadcount=mysql_num_rows(mysql_query("SELECT seeker FROM resumedownloads WHERE recruiter='$_SESSION[rec_id]' AND seeker='".$seeker_fetch['id']."' and subrec='$sr'"));
							
								$jsid=$seeker_fetch['id'];
							
			?>
				<!--<a href="<?php echo $website_url."/seeker/".str_replace("/","",str_replace(" ","-",$seeker_fetch['current_location']))."/".str_replace(" ","~",$seeker_fetch['username']); ?>" target="_blank">View Profile</a> -->
			
				<a href="newemp_userprofile.php?uname=<?php echo $idc; ?>&search=<?php echo($searchs); ?>" value="<?php echo($seeker_fetch['id']); ?>"   target="_blank" onClick="view(<?php echo($jsid); ?>)"><img src="images/view.png" style="width:22px;height:22px;" title="Candidate Profile" /></a> 
				
				<!--<hr class="noshade">-->
				
				<?php 
				$mailid_ecript = base64_encode($seeker_fetch['email']);
				if($jobs_data['job_status'] == 1) { ?>
				<a href="javascript:void(0);" onClick="alert('This job is disabled, you can not mail');"><img src="images/sendmail.jpg" style="width:20px;height:20px;" title="Send mail" /></a>
				<?php } else { ?>
				<a href="newmail_preview.php?userid=<?php echo $mailid_ecript; ?>&job_id=<?php echo $jid; ?>"><img src="images/sendmail.jpg" style="width:20px;height:20px;" title="Send mail" /></a>
				<?php } ?>
				
				<?php if( $seeker_fetch['resume']!='' && file_exists("resume/".$seeker_fetch['resume'])) { ?>
				<!--<hr class="noshade">-->
				<?php /*?><a href="resume/<?php echo $seeker_fetch['resume'];?>" target="_blank">Resume</a><?php */?>
                		<?php if($resumequota>0) {
							
							if($_SESSION['s1']=="")
							{
								$as="";
								$re="";
							}
							else
							{
								$as="to";
								$re=" Years";
							}

						?>
                        <a href='resume_download.php?resume=<?php echo "resume/".$seeker_fetch['resume'];?>&id=<?php echo $idc; ?>&sear=<?php echo($searchs); ?>'>
                            <img src="images/resume.png" style="width:20px;height:20px;" title="Download resume" />
                        </a>&nbsp;<br/>
                        <?php } else { ?>
                        <a href='javascript:void(0);' onClick="alert('No acces to download the resume please get subscription');">
                            <img src="images/resume.png" style="width:20px;height:20px;" title="Download resume"/>
                        </a>&nbsp;<br/>
                        <?php } ?>
				<?php } 
				if($viewcount!=0)
				{
				?>
				
				<div  style="margin:0px 0px 0px 35px;width:28px;border-radius:50px;height:28px;border:1px solid black;float:left;" >
<div style="margin:9px 0px 0px 0px;font-size:8px;" id="<?php echo("viewed".$jsid); ?>" title="<?php echo($viewcount); ?> times viewed by you"><?php echo($viewcount); ?> TV</div>
</div>
<?php
				}
				if($downloadcount!=0)
				{
					if($viewcount==0)
					{
								?>
<div  style="margin:0px 0px 0px 37px;width:28px;border-radius:50px;-webkit-border-radius:50px;-moz-border-radius:50px;height:28px;border:1px solid black;float:left;">
<div style="margin:9px 0px 0px 0px;font-size:8px;" title="<?php echo($downloadcount); ?> times downloaded by you"><?php echo($downloadcount); ?> TD</div>
</div>
<?php
					}
					else
					{
				?>
<div  style="margin:0px 0px 0px 2px;width:28px;border-radius:50px;-webkit-border-radius:50px;-moz-border-radius:50px;height:28px;border:1px solid black;float:left;">
<div style="margin:9px 0px 0px 0px;font-size:8px;" title="<?php echo($downloadcount); ?> times downloaded by you"><?php echo($downloadcount); ?> TD</div>
</div>
<?php
					}
				}
				?>
				<div id="<?php echo("view".$seeker_fetch['id']); ?>"  style="display:none;margin:0px 0px 0px 2px;width:28px;border-radius:50px;-webkit-border-radius:50px;-moz-border-radius:50px;height:28px;border:1px solid black;float:left;">
<div style="margin:9px 0px 0px 0px;font-size:8px;">Viewed</div>
</div>

<?php

if($_SESSION['sub_rid'])
	{
		$sr=$_SESSION['sub_rid'];
	}
	else
	{
		$sr="0";
	}
	
	
date_default_timezone_set("Asia/Kolkata");
//$lvt = date("h:i:sa");
$city_aj=$seeker_fetch['id'];
  $lvda = date("Y-m-d");  
	$rida=$_SESSION['rec_id'];
	
	$sqlm="select * from instant_view where date='".$lvda."' and seeker='".$city_aj."' and rid='".$rida."' and srid='".$sr."'";
	$qr=mysql_query($sqlm);
	if($rw=mysql_fetch_array($qr))
	{
		?>
						<div   style="display:block;margin:0px 0px 0px 2px;width:28px;border-radius:50px;-webkit-border-radius:50px;-moz-border-radius:50px;height:28px;border:1px solid black;float:left;">
<div style="margin:9px 0px 0px 0px;font-size:8px;">Viewed</div>
</div>

<?php
		
	}
	
?>
			</td>
			
		</tr>
			<?php
	if($cnt%2==0)
	{
	?>
		<tr  style="background-color:white;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		
		<?php
	}
	else
	{
		?>
		<tr style="background-color:whitesmoke;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		<?php
	}
	?>
	<td></td>
			<td colspan="4" style="font-family:Helvetica;font-size:12px;">
			<br/>
				Key Skills :  
				<?php 
					if($seeker_fetch['keyskills'] != "") {
						//echo $seeker_fetch['keyskills']; 
											
	$keyword=$_SESSION['key'];
$str=$seeker_fetch['keyskills'];

            $keywords = str_replace(",", " ",$keyword);
			
            $saearched=explode(" ",$keywords);
			 

	 foreach($saearched as $nn)
      {

     $str = preg_replace("/($nn)/i","<span style='background-color:#90e490;'>$0</span>",$str);
	
	  }
	  echo($str);
	
						
					} else {
						echo "Nil";
					}
				?>  <br>
				</td>
				
			</tr>
		<?php
	if($cnt%2==0)
	{
	?>
		<tr  style="background-color:white;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		
		<?php
	}
	else
	{
		?>
		<tr style="background-color:whitesmoke;" <? //if($seeker_fetch['membership_status']==1) { echo "style='background-color:lightgrey;'"; } else{echo "style='background-color:whitesmoke;'";} ?>>
		<?php
	}
	?>
			<td colspan="5"><div style="border-left:0px;border-right:0px;border-bottom:0px;border-top:1px solid #d0d0d0;"></div></td>
						
		</tr>
<?php } ?>
		<tr>
			<td colspan="5">
<select name="movetofolder" id="movetofolder" style="box-shadow:0px 0px 3px grey;-webkit-box-shadow:0px 0px 3px grey;-moz-box-shadow:0px 0px 3px grey;height:30px;border-radius:2px;-moz-border-radius:2px;-webkit-border-radius:2px;">
					<option value="">Move to folder</option>
					<?php
						$selectFolder=mysql_query("SELECT * FROM candidate_folder WHERE fold_user IN (0, $recid) AND fold_id!=1 ORDER BY fold_id ASC");
						while($rowFolder=mysql_fetch_array($selectFolder)) {
					?>
						<option value="<?=$rowFolder['fold_id']?>"><?=$rowFolder['fold_name']?></option>
					<?php } ?>
				</select>
				&nbsp;
				<button type="submit" name="movefolderSearched" class="gobtn toosmallbtn" style="border-radius:3px;border:0px;height:30px;background-color:#606060;color:white;font-weight:bold;">Move now</button>
				&nbsp;
				<button type="submit" name="sendmail" class="gobtn toosmallbtn" style="border-radius:3px;border:0px;height:30px;background-color:#606060;color:white;font-weight:bold;">Send Mail</button>
				&nbsp;
				<!--<button type="submit" name="export" class="gobtn toosmallbtn">Export to Excel</button>-->
				<span style="float:right;">
					<?php echo $pagingLink; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td colspan="5"><hr></td>
		</tr>
		
<?php } else { ?>
		<tr>
			<td colspan="5" align="center" style="color:#993300; padding:10px;"><strong>No candidates to list</strong></td>
		</tr>
<?php }
//unset($_SESSION['key']);
 ?>
		
	</table>
	</div>
</form>
</div>
<!-- search results end -->



</div>

<!-- Search results end -->
<script language="javascript">
    $("#clickme").click(function () {
        $("#book").slideToggle("slow", function () {
            // Animation complete.
        });
    });
	
	

</script>
<!-- folder creation end -->

</div>


<style>

#foo li

{

	padding-top:10px;

}

</style>

<div id="footer" style="float:left;width:100%;">



<?php



require_once("newempfooter.php");



?>



</div>











</div>

<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
window.scrollTo(110,0);
</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 958974492;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/958974492/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



</body>

</html>


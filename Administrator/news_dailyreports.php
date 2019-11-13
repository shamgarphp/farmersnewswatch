<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education -Administrator </title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

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
font-weight:bold;color:#606060;
text-align:center;
}
a:hover, a:focus{
    text-decoration: none;
    outline: none;
}


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
License Terms
</style>
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
	
</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">
	<?php require_once("includes/mainheader.php"); ?>	
	</div>
    <div class="navbar navbar-default header-highlight">
            						
			<?php  require_once("includes/main_header.php");  ?>
								
        </div>
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
	   
	
	
	
	<!-------- ------------>
	
 	<div class="content" style="padding:0px;">
	
	
	<?php
if(isset($_GET['view']))
{
	$id_modal=base64_decode($_GET['view']);
	
	echo"
	<script>
	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal').modal('show');
    });
	
	</script>
	";

?>

<div class="modal fade" id="myModal" role="dialog" style=" ">
    <div class="modal-dialog" style="width:60%" style="overflow-x:hidden;overflow-y:hidden;">  
      <!-- Modal content-->
	<div class="modal-content" style="">
	
    <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">         
	<span class="modal-title" style="font-weight:bold;font-size:18px;color:#f8f8f8;">View Details</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style=" ">
 
	
	<?php		
	$update_tab="news_daily_activities";
	$conds="where id='".$id_modal."' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);		
	
	$ss=strip_tags($single['content']);
			//$message=substr($ss,0,30);
	
	?>
	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" >
        <div class="modal-body" style="">
 
    <div class="row" style="border-radius:5px;border:1px solid lightgrey;padding:10px;">
       

		  <div class="col-sm-12" style="margin-top:10px;font-weight:bold;font-size:24px;">		
	   
		<?php echo($single['news_title']); ?>
		

	
		</div> 
	  <div class="col-sm-12" style="margin-top:10px;border:0px solid green;">		
	    <div class="col-sm-1" style="border:0px solid black;"></div>
		<div class="col-sm-10" style="border:0px solid red;">
		<?php 
		if($single['file_type']=="1")
		{
			
			echo "<a href='News_Uploads/dailyactivenews/".$single['file_content']."' target='_blank'><img style='width:100%;height:200px;' src='News_Uploads/dailyactivenews/".$single['file_content']."' /></a>";
		}
		else if($single['file_type']=="2")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			 <video style="width:100%;height:250px;"  controls>
   <source src="<?php echo("News_Uploads/dailyactivenews/".$single['file_content']); ?>"  >

</video> 
			
			<?php
		}?>
		</div>
		    <div class="col-sm-1" style="border:0px solid blue;"> </div>

		</div> 
		
			  <div class="col-sm-12" style="margin-top:10px;">		


		<?php echo($ss); ?>
	

			  
			  
			  </div>
	
		
	   
	
		
	   
                   
               
              
              
            </div>
   
	   
		</div>
    <div class="modal-footer" style="padding:10px;">		
    <center>
	&emsp;<button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
    </center>
	</div>
	
	</form>
	</div>
    </div>
</div>
  

	
	</div>

<?php
} 
?>
	
	
    
    <div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:0px;border:0px solid grey;">	
	
	
	
	
	
	
	
	

		
	<div class="col-sm-9" id="edu_type_label" style="padding:0px;font-size:16px;margin-top:30px;">View Daily Activities Reports</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="daily.php" style="color:white;">Add news </a></span>
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;">

	<div class="table-responsive">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
	<table class="table table-hover" style="border:1px solid lightgrey;">
 
    <tr id="ths" style="background-color:#606060;font-size:14px;">
	<th><input type="checkbox" id="selectall"/></th>
    <th style="color:white;">S.NO</th>
    <th style="color:white;">Title of The News</th>
	<th style="color:white;">Description</th>
	
    <th style="color:white;">Action</th>
    </tr>

	<?php
		 
		$tab_name="news_daily_activities";
		$where="order by id  desc";
		
		$sele=$getsignle->select_query($tab_name,$where);
		
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
			
			$ss=strip_tags($row['content']);
			$message=substr($ss,0,30);
			?>  
             <tr style="text-align:center;">	
                 <td><input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/></td>
                  <td><?php echo($inc); ?></td>
                    <td> <?php echo ($row['news_title']) ; ?></td>
                    <td><?php echo($message); ?></td>
                    
        
                   
                    
                   
                 <td>
		<a href="news_dailyreports.php?view_edu&view==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon-eye-open"></i></a>
			<a href="news_dailyreports.php?remove=<?php echo(base64_encode($row['id'])); ?>&file=<?php echo(base64_encode($row['file_content'])); ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
		</tr>
		
            <?php
            
        }

	if($inc=="0")
		{  	?>
	<tr>
		<td colspan="5" style="text-align:center;color:red;">No Results</td>
		</tr>

		<?php } ?>
  <tr>
  
  <td colspan="5">
  
	<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />  
  
  </td>
  </tr>
		
	 </table>
	 
    </form>
	  
		
			
	</div>
	</div>
	
	
	
</div>


    </div>
	</div>
            </div>
        </div>
    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        					
	<?php   require_once("includes/footer.php"); ?>
											
						
                    </div>         
                </div>
            </div>
			
</body>
</html>

<?php
if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="news_daily_activities";
	$rv=0;
	foreach($datas as $item)
	{
		$ss=mysql_query("select * from news_daily_activities where id='".$item."' ");
		if($row=mysql_fetch_array($ss)){
			$sr=$row['file_content'];
		}
		$wher="where id='".$item."' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			unlink("News_Uploads/dailyactivenews/$sr");
			
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
      alert('successfully Deleted');
		window.location.href='news_dailyreports.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_dailyreports.php';
		</script>";
		exit;
	}

}

if(isset($_GET['remove']))
{
	$datas1=base64_decode($_GET['remove']);
		$datas2=base64_decode($_GET['file']);

	$table="news_daily_activities";
	$wher="where id='".$datas1."'";

	$delsdata=$getsignle->deleterecord($table,$wher);
				
	if($delsdata)
	{
   
   unlink("News_Uploads/dailyactivenews/$datas2");


	echo"<script>
      alert('successfully Deleted');
		window.location.href='news_dailyreports.php';
		</script>";
		exit;
		
	}
	else
	{
		echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_dailyreports.php';
		</script>";
		exit;
	}
}

/*-------------------------------------------------Update code-------------------------------------------*/
?>
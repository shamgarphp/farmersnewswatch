<?php




require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();

$categId = $_GET['data'];

if(isset($_GET['unap']))
{

    $id=base64_decode($_GET['unap']);
    
    $qry=mysqli_query($dbc,"update news_world_news set status='0' where id='".$id."' ");
    
    	if($qry)
	{
		echo"<script>
      alert('successfully changed display status into UnApproved');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}
}


if(isset($_GET['ap']))
{
    $id=$_GET['ap'];
    $date=date('Y-m-d');
    if($_SESSION['client'] == 3){
    	$qry=mysqli_query($dbc,"update news_world_news set mondal_status='1' where id='".$id."' ");
    	$status = 3;
    }
    else if($_SESSION['client'] == 2){

    	$qry = mysqli_query($dbc,"UPDATE `news_world_news` SET `distic_status` = '1' WHERE `news_world_news`.`id` = ".$id."");
    	$status = 2;
    }
    else if($_SESSION['client'] == 1){
    	// $id=base64_decode($_GET['ap']);
    	$qry=mysqli_query($dbc,"update news_world_news set state_status='1' where id='".$id."' ");
    	$status = 1;
    }
    
    
    

    $sql = mysqli_query($dbc,"INSERT INTO news_world_action_log (news_world_id,approved_by,approved_date,status)
			VALUES ('".$id."','".$_SESSION['client']."','".$date."','".$status."')");
    
    if($qry)
	{
		echo"<script>
      alert('successfully changed display status into Approved');
		window.location.href='news_worldreports.php'; 
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>FarmerWatcher -Administrator </title>

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



<?php 
	if(isset($_GET['edit']))
	{
		$id_modal = base64_decode($_GET['edit']);
		echo "
			<script>
				$(document).ready(function(){
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
	<span class="modal-title" style="font-weight:bold;font-size:18px;color:#f8f8f8;">Edit Details</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style=" ">
	<?php		
	$update_tab="news_world_news";
	$conds="where id='".$id_modal."' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);
	$ss=strip_tags($single['content']);
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
			
			echo "<a href='News_Uploads/Worldnews/".$single['file_content']."' target='_blank'><img style='width:100%;height:200px;' src='News_Uploads/Worldnews/".$single['file_content']."' /></a>";
		}
		else if($single['file_type']=="2")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			 <video style="width:100%;height:250px;"  controls>
   <source src="<?php echo("News_Uploads/Worldnews/".$single['file_content']); ?>"  >

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
    <center>	&emsp;<button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
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
	$update_tab="news_world_news";
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
			
			echo "<a href='News_Uploads/Worldnews/".$single['file_content']."' target='_blank'><img style='width:100%;height:200px;' src='News_Uploads/Worldnews/".$single['file_content']."' /></a>";
		}
		else if($single['file_type']=="2")
		{
			?>
			<!--
			<video width="50px" height="50px"></video>-->
			 <video style="width:100%;height:250px;"  controls>
   <source src="<?php echo("News_Uploads/Worldnews/".$single['file_content']); ?>"  >

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
    <center>	&emsp;<button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
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
	
	
    
    <div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:15px;border:0px solid grey;">	
	<div class="col-sm-9" id="edu_type_label" style="padding:0px;font-size:16px;margin-top:30px;">View Content Reports</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;">
	
	<button class="btn btn-primary" type="button"><a href="world.php" style="color: white">+ Add</a></button></span>
	<button type="button" class="btn btn-outline-secondary" style="margin-left: 50%"><a href="news_worldreports.php"> Reset </a></button>
	<!-- <button type="reset" style="margin-left: 56%"><a href="news_worldreports.php"> Reset </a></button> -->
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;">

	<div class="table-responsive">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
	<table class="table table-hover" style="border:1px solid lightgrey;">
 
    <tr id="ths" style="background-color:#606060;font-size:14px;">
	<th><input type="checkbox" id="selectall"/></th>
    <th style="color:white;">S.NO</th>
	<th style="color:white;">Category</th>
	
    <th style="color:white;">Title of The content</th>
	<th style="color:white;">Description</th>
		<th style="color:white;">Posted By</th>
	<th style="color:white;">Display Status</th>


	
	
    <th style="color:white;">Action</th>
    </tr>

	<?php

		if($_SESSION['client']=="Admin")
        {
			$query = "SELECT * FROM news_world_news order by category  asc";		
        }
        else if($_SESSION['client'] == 3)
        {
        	if($categId){
        		$query = "SELECT * FROM news_world_news WHERE posted_by = 4 AND category = '".$categId."' order by category  asc";
        	}
        	else{
        		$query = "SELECT * FROM news_world_news WHERE posted_by = 4 order by category  asc";
        	}
        		
        }
        else if($_SESSION['client'] == 2)
        {
        	if($categId){
        		$query = "SELECT n.*,l.id as lid FROM news_world_news n left join news_world_action_log l on n.id=l.news_world_id WHERE n.category = '".$categId."' AND l.approved_by = 3";
        	}else{
        		$query = "SELECT n.*,l.id as lid FROM news_world_news n left join news_world_action_log l on n.id=l.news_world_id WHERE l.approved_by = 3 ";
        	}
        }
        else if($_SESSION['client'] == 1)
        {
        	if($categId){
	        	$query = "SELECT n.*,l.status as lstatus,l.id as lid FROM news_world_news n left join news_world_action_log l on n.id=l.news_world_id WHERE l.approved_by = 2 AND category = '".$categId."' ";
	        }else{
	        	$query = "SELECT n.*,l.status as lstatus,l.id as lid FROM news_world_news n left join news_world_action_log l on n.id=l.news_world_id WHERE l.approved_by = 2";
	        }
        }
		
    	$sele = mysqli_query($dbc,$query);
		
		$inc=0;
		while($row=mysqli_fetch_array($sele))
		{
			$inc++;
			$ss=strip_tags($row['content']);
			$message=substr($ss,0,30);
			?>  
             <tr style="text-align:center;">	
                 <td>
				 <input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/>
				 </td>
                  <td><?php echo($inc); ?></td>
				                    <td><?php 
				                    
				                    if($row['category']=="Co-operative's")
				                    {
				                        echo"Co-operative's";
				                    }
				                    else if($row['category']=="fpo")
				                    {
				                        echo"fpo";
				                    }
				                    else if($row['category']=="Blogs")
				                    {
				                        echo"Distributer / Dealer";
				                    }
				                    else if($row['category']=="Health_and_Life_Style")
				                    {
				                        
				                        echo"Farmers world";
				                    }
				                    else
				                    {
				                       echo($row['category']); 
				                    }
				                     ?></td>
                    <td> <?php echo ($row['news_title']) ; ?></td>
                    <td><?php echo($message); ?></td>
                    
                   <td><?php 
                    if($row['posted_by']=="Admin")
                    {
                        echo"Admin <br/> <span style='font-size:12px;'>".$row['created_date']." ".$row['created_time']."</span>";
                    }
                    else
                    {
                        $qry_sub=mysqli_query($dbc,"select * from create_login where id='".$row['posted_by']."' ");
						// $row_sub=mysqli_fetch_array($qry_sub);
						// print_r($row_sub);
						// // echo "hi";
						// exit;
                        if($row_sub=mysqli_fetch_array($qry_sub))
                        {
                        	// echo "hi";
                        	// print_r($row_sub['login_type']);
                        	// exit;
                            if($row_sub['login_type']==1)
                            {
                                echo"District Head";
                            }
                            else if($row_sub['login_type']==2)
                            {
                                echo"State Head";
                            }
                            else if($row_sub['login_type']==3)
                            {
                                echo"Mandal Head";
                            }
                            else if($row_sub['login_type']==4)
                            {
                                echo"Village Head";
                            }
                            echo" - ".$row_sub['firstName']." ".$row_sub['lastName']." <br/> <span style='font-size:12px;'>".$row['created_date']." ".$row['created_time']."</span>";
                            
                        }
                    }
                    ?></td>
                    <td><?php
                    if($_SESSION['client']=="Admin")
                    {
                    if($row['status']==1)
                    {
                        ?>
                        <a href="?unap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to UnApprove display status')==true){return true}else{ return false;}"><span class="label label-success">Approved</span></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a href="?ap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to Approve display status')==true){return true}else{ return false;}"><span class="label label-danger">Unpproved</span></a>
                        <?php
                    }
                    
                    } 
                    if($_SESSION['client']== 3)
                    {
                    if($row['mondal_status']==1)
                    {
                        ?>
                        <a href="?unap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to UnApprove display status')==true){return true}else{ return false;}"><span class="label label-success">Approved</span></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a href="?ap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to Approve display status')==true){return true}else{ return false;}"><span class="label label-danger">Unpproved</span></a>
                        <?php
                    }
                    
                    }
                    if($_SESSION['client']== 2)
                    {
                    if($row['distic_status']==1)
                    {
                        ?>
                        <a href="?unap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to UnApprove display status')==true){return true}else{ return false;}"><span class="label label-success">Approved</span></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a href="?ap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to Approve display status')==true){return true}else{ return false;}"><span class="label label-danger">Unpproved</span></a>
                        <?php
                    }
                    
                    }

                    if($_SESSION['client']== 1)
                    {
                    if($row['state_status']==1)
                    {
                        ?>
                        <a href="?unap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to UnApprove display status')==true){return true}else{ return false;}"><span class="label label-success">Approved</span></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a href="?ap=<?php echo $row['id']; ?>" onclick="javascript:if(confirm('Do you want to Approve display status')==true){return true}else{ return false;}"><span class="label label-danger">Unpproved</span></a>
                        <?php
                    }
                    
                    }                    
                    
                    ?></td>
                    
                   
                    
                   
                 <td>

		<a href="news_worldreports.php?view_edu&view==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon-eye-open"></i></a><br>
				<a href="world_edit.php?edit_edu&edit==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon glyphicon-edit"></i></a><br>
			<a href="news_worldreports.php?remove=<?php echo(base64_encode($row['id'])); ?>&file=<?php echo(base64_encode($row['file_content'])); ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
		</tr>
		
            <?php
            
        }
	
	if($inc=="0")
		{  	?>
	<tr>
		<td colspan="8" style="text-align:center;color:red;">No Results</td>
		</tr>

		<?php } ?>
  <tr>
  
  <td colspan="8">
  
	<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true){return true;}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" />  
  
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
	$table="news_world_news";
	$rv=0;
	foreach($datas as $item)
	{
		$ss=mysqli_query($dbc,"select * from news_world_news where id='".$item."' ");
		if($row=mysqli_fetch_array($ss)){
			$sr=$row['file_content'];
		}
		$wher="where id='".$item."' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			unlink("News_Uploads/Worldnews/$sr");
			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
      alert('successfully Deleted');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}

}

if(isset($_GET['remove']))
{
	$datas1=base64_decode($_GET['remove']);
	$datas2=base64_decode($_GET['file']);
	$table="news_world_news";
	$wher="where id='".$datas1."' ";

	$delsdata=$getsignle->deleterecord($table,$wher);
				
	if($delsdata)
	{
		//unlink("/News_Uploads/Worldnews/'".$datas2."'");
		
		
unlink("News_Uploads/Worldnews/$datas2");
		
		echo"<script>
      alert('successfully Deleted');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
		
	}
	else
	{
		echo"<script>
       alert('Unable to process Please try again');
		window.location.href='news_worldreports.php';
		</script>";
		exit;
	}
}

/*-------------------------------------------------Update code-------------------------------------------*/
?>
<?php




require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
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
	$update_tab="promotions";
	$conds="where id='".$id_modal."' ";
	$single=$getsignle->getsinglerecord($update_tab,$conds);		
//	echo "select * from $update_tab $conds";
	//$ss=strip_tags($single['content']);
			//$message=substr($ss,0,30);
	
	?>
	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" >
        <div class="modal-body" style="">
 
    <div class="row" style="border-radius:5px;border:1px solid lightgrey;padding:10px;">
       

		  <div class="col-sm-12" style="margin-top:10px;font-weight:bold;font-size:24px;">		
	   
		<?php // echo($single['url']); ?>
		

	
		</div> 
	  <div class="col-sm-12" style="margin-top:10px;border:0px solid green;">		
	    <div class="col-sm-1" style="border:0px solid black;"></div>
		<div class="col-sm-10" style="border:0px solid red;">
		<?php 
	 
			
			echo "<a href='".$single['url']."' target='_blank'><img style='width:100%;height:200px;' src='Admin_Promotions/".$single['file_content']."' /></a>";
		 ?>
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
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="world.php" style="color:white;">  + Add   </a></span>
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;">

	<div class="table-responsive">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
	<table class="table table-hover" style="border:1px solid lightgrey;">
 
    <tr id="ths" style="background-color:#606060;font-size:14px;">
	<th><input type="checkbox" id="selectall"/></th>
    <th style="color:white;">S.NO</th>
	<th style="color:white;">Picture</th>
	
    <th style="color:white;">Priority</th>
	<th style="color:white;">URl</th>
	
    <th style="color:white;">Action</th>
    </tr>

	<?php
		 
		$tab_name="promotions";
		$where="  order by priority asc";
		
		$sele=$getsignle->select_query($tab_name,$where);
		
		$inc=0;
		while($row=mysql_fetch_array($sele))
		{
			$inc++;
		 
			?>  
             <tr style="text-align:center;">	
                 <td>
				 <input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/>
				 </td>
                  <td><?php echo($inc); ?></td>
				                    <td>
									<img src="Admin_Promotions/<?php echo($row['file_content']); ?>" style="width:100px;height:100px;"  />
									
 </td>
                    <td> <?php 
					if($row['priority']=="1")
					{
						echo"Top";
					}
					else if($row['priority']=="2")
					{
					echo ("Normal") ;
					}

					?></td>
                    <td><?php echo($row['url']); ?></td>
                    
        
                   
                    
                   
                 <td>
		<a href="promotions_reports.php?view_edu&view==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon-eye-open"></i></a>
			<a href="promotions_reports.php?remove=<?php echo(base64_encode($row['id'])); ?>&file=<?php echo(base64_encode($row['file_content'])); ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
		</tr>
		
            <?php
            
        }
	
	if($inc=="0")
		{  	?>
	<tr>
		<td colspan="6" style="text-align:center;color:red;">No Results</td>
		</tr>

		<?php } ?>
  <tr>
  
  <td colspan="6">
  
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
	$table="promotions";
	$rv=0;
	foreach($datas as $item)
	{
		$ss=mysql_query("select * from promotions where id='".$item."' ");
		if($row=mysql_fetch_array($ss)){
			$sr=$row['file_content'];
		}
		$wher="where id='".$item."' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			unlink("Admin_Promotions/$sr");

			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
      alert('successfully Deleted');
		window.location.href='promotions_reports.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='promotions_reports.php';
		</script>";
		exit;
	}

}

if(isset($_GET['remove']))
{
	$datas1=base64_decode($_GET['remove']);
	$datas2=base64_decode($_GET['file']);
	$table="promotions";
	$wher="where id='".$datas1."' ";

	$delsdata=$getsignle->deleterecord($table,$wher);
				
	if($delsdata)
	{
		//unlink("/News_Uploads/Worldnews/'".$datas2."'");
		
		
unlink("Admin_Promotions/$datas2");
		
		echo"<script>
      alert('successfully Deleted');
		window.location.href='promotions_reports.php';
		</script>";
		exit;
		
	}
	else
	{
		echo"<script>
       alert('Unable to process Please try again');
		window.location.href='promotions_reports.php';
		</script>";
		exit;
	}
}

/*-------------------------------------------------Update code-------------------------------------------*/
?>
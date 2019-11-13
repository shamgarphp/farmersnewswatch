<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - View Franchise Package</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />

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
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-12" id="b_content" style="border-radius:5px;padding:0px;">
	<div class="col-sm-12" id="edu_type_label" style="padding:10px;">View Franchise Package</div>

	
<SCRIPT language="javascript">
$(function(){
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});
	$(".case").click(function(){
		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}
	});
});
</SCRIPT>

	
<?php
$query=mysql_query("select * from fra_package");
//if($row=mysql_fetch_array($query))
?>

<form action="" method="post">
<table class="table table-hover">
<thead>
   <tr style="border-bottom:1px solid lightgrey;text-weight:bold;text-size:22px;background-color:#606060;">
      <th><b>&emsp;<input type="checkbox" id="selectall" style="width:15px;height:15px;"></b></th>
      <th style="color:white;"><b>S NO</b></th>
	  <th style="color:white;"><b>Package Duration</b></th>
      <th style="color:white;"><b>Package Price</b></th>

      <th style="color:white;"><b>Action</b></th>	  
    </tr>
</thead>
	<tbody>
	<?php
	
	$a=1;
	
 while ($row = mysql_fetch_array($query))
    {
		?>
           <tr style="border-bottom:1px solid lightgrey;">
		       <td>&emsp;<input type="checkbox" class="case" name="case[]" value="<?php echo $row['SNO']; ?>"  id="case" style="width:15px;height:15px;"></td>	 	   
			   <td><?php echo($a++); ?></td>
			   <td><?php echo($row['Priceduration']); ?></td>
			   <td><?php echo($row['Packageprice']); ?></td>
               
			   <td>
			   <a href="view_fra_package.php?remove=<?php echo $row['SNO']; ?>" id="remove" name="remove" title='Remove'><span class='glyphicon glyphicon-trash'></span></a>
        
			   </td>
		    
			</tr>
			   <?php
	             }
                ?>
  </tbody> 
</table>	

<div class="row" style="padding:10px;margin:0px;">			

<input type="submit" class="btn btn-danger" name="delete" value="Remove" style="width:100px;height:35px;border-radius:5px;color:white;outline:none;"/>
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
            


</body>
</html>

<?php
if(isset($_POST['delete']))
{
	$datas=$_POST['case'];
	$table="fra_package";
	$rv=0;
	foreach($datas as $item)
	{
		$wher="where SNO='".$item."' ";
	
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
		window.location.href='view_fra_package.php';
		</script>";
		exit;
	}
	else
	{
		echo"<script>
		alert('Unable to process your request. Please try again..!');
		window.location.href='view_fra_package.php';
		</script>";
		exit;
	}
}


if(isset($_GET['remove']))
{
	$datas=$_GET['remove'];
	//$datas=base64_decode($_GET['remove']);
	//$table="fra_package";
	//$wher="where SNO='".$datas."' ";
	
		//$delsdata=$getsignle->deleterecord($table,$wher);
		
	$delsdata=mysql_query("delete from fra_package where SNO='".$datas."'");
	
	if($delsdata)
	{
	 
		echo"<script>
		alert('Successfully removed.!');
		window.location.href='view_fra_package.php';
		</script>";
		exit;
	}
	else
	{
		 
		echo"<script>
		alert('Unable to process your request. Please try again..!');
		window.location.href='view_fra_package.php';
		</script>";
		exit;
	}
	
}


?>
<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>


<?php
if(isset($_REQUEST['Submit']))
{
	
	
	$getsignle = new Dbcon;
	
	
	$pkname=$_POST['pname'];
	$pknumber=$_POST['pnum'];
	$pduration=$_POST['pduration'];
	
	$table="package";
	$columns="Packagetype,Packageprice,Priceduration";
	$column_values="'".$pkname."','".$pknumber."','".$pduration."'";
	
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo("Inserted Sucessfully");
}
else
{
echo"Not inserted".mysql_error();	
}	
}
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

<!-- body content  -->


<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-12" id="b_content" style="border-radius:5px;padding:0px;">
	<div class="col-sm-12" id="edu_type_label" style="padding:10px;">View Package</div>

	
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
$query=mysql_query("select * from package");
//if($row=mysql_fetch_array($query))
?>

<form action="" method="post">
<table class="table table-hover">
<thead>
   <tr style="border-bottom:1px solid lightgrey;text-weight:bold;text-size:22px;background-color:#606060;">
      <th><b>&emsp;<input type="checkbox" id="selectall" style="width:15px;height:15px;"></b></th>
      <th style="color:white;"><b>SNO</b></th>
	  <th style="color:white;"><b>Package Type</b></th>
      <th style="color:white;"><b>Package Price</b></th>
      <th style="color:white;"><b>Package Duration</b></th>
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
			   <td><?php 
			   
			   //select * from education_type where id='$row['education_name']';
			   
			  /* $ghh=$row['Packagetype'];
				$query_s=mysql_query("select * from education_type");
				if($rg=mysql_fetch_array($query_s))
				{
					echo($rg['education_name']);
				}
				*/
				
				
			   
			   
			   
			 
			if($row['Packagetype']!="101" && $row['Packagetype']!="102")
			   {
				  // echo($row['Packagetype']);
				  $ghh=$row['Packagetype'];
				   $query_s=mysql_query("select * from education_type where id='".$ghh."'");
				if($rg=mysql_fetch_array($query_s))
				{
					echo($rg['education_name']);
				}
			   }
			     else if($row['Packagetype']=="101") 
			   {
				   echo"Student";
			   }
			   else if($row['Packagetype']=="102")
			   {
				   echo"Staff";
			   }
			   
			   
			   ?></td>
			   <td><?php echo($row['Packageprice']); ?></td>
               <td><?php echo($row['Priceduration']); ?></td>
			   <td><a href="view_edu_package.php?edit=<?php echo $row['SNO'];?>"><span class="glyphicon glyphicon-pencil" data-toggle="modal" role="dialog" data-target="#myModal"></span></a></td>
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



<!----------------DELETE--------------------->
<?php

//$sql1="select * from country";
 //$link1=mysql_query($sql1);
 //$count=mysql_num_rows($link1);
?>
<!--
<input type="hidden" value="<?php echo($count)?>" name="hidea">-->
</form>

 	<?php
	
    if(isset($_POST['delete']))
	{
		
		error_reporting(0);

		//$coau=$_POST['hidea'];
		$cheboxa=$_POST['case'];
		$r=0;
		foreach($cheboxa as $qwerty)
		{
			
			
			
	    		
        $que = "DELETE FROM package WHERE SNO='$qwerty'";
        $exe = mysql_query($que);
		
	if($exe)
	{
		$r=1;
	}
		
		}
	
	if($r==1)
	{
 echo"
	<script>
	alert('Successfully Deleted');
	window.location.href='view_edu_package.php';
	</script>
	";
	exit;
	}
	else
	{
		echo"
	<script>
	
	alert('Unable to Deleted');
	window.location.href='view_edu_package.php';
	</script>
	";
	exit;
	}
}
	?>		




				 
	         <!-- Edit Button -->
<?php



if(isset($_GET['edit']))
{
	$edit1=$_GET['edit'];

$sql2="select * from package where SNO='".$edit1."'";
$data=mysql_query($sql2);
if($row=mysql_fetch_array($data))
{
	$lg=$row['SNO'];
	$cd=$row['Packageprice'];
	
?>		
<script>

$(document).ready(function(){
	
	$("#myModal").modal("show");
	
});


</script>
   
  
<?php
}
}
?>				 
				 
				 
<form action="view_edu_package.php" method="POST" >

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#4d4dff;color:white;border-radius:2px;height:50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Package</h4>
        </div>
          <div class="modal-body" style="overflow-y:scroll;height:220px;">
          <div class="form-group">
		   <div class="row">
             <div class="col-sm-12" style="margin:0px;padding:0px;">
			   <div class="form-group" style="padding:10px 10px 0px 100px;width:80%;">
                   <input type="hidden"  name="sno" id="s_no" value="<?php echo($lg);?>">
               </div>
			   
			   
			  
			   		
			   <!--<div class="col-sm-6" style="border:0px solid yellow;margin:0px;padding:0px;width:80%;">-->
			     <div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
                         <label>Package Price:</label>
                        <input type="text" class="form-control" name="popvalue" id="poptvalue" placeholder="Enter Parking Name" value="<?php echo($cd);?>" required />
                        <p id="correctname" ></p>
	         
			   </div>
			  
		     
	 
	 
			</div>
		  </div>
		 </div>
        </div>
        <div class="modal-footer" style="padding:10px;">
          <center><button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;">Cancel</button>
         <input type="submit" name="update" value="Update"  style="width:100px;height:33px;border-radius:3px;border:1px solid red;background-color:red;color:white;"></center>
        </div>
		
      </div>
    </div>
</div>
</form>	

    <?php
	
	 if(isset($_POST['update']))
{
	$serial=$_POST['sno'];
	
	$val=$_POST['popvalue'];

	$var="UPDATE package SET Packageprice='".$val."' WHERE SNO='".$serial."'";
    $res=mysql_query($var);
	if($res)
	{
	?>
   <script>
   alert('updated Successfully');
   window.location.href='view_edu_package.php';
   </script>
  <?php
	}
	
	}
   ?>
   				 
				 


				 
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        
					
						<?php   require_once("includes/footer.php"); ?>
						
						
						
                    </div>         
                </div>
            </div>
        </div>
            


</body>
</html>
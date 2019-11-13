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
	
	
	
	$pduration=$_POST['pdur'];
	$pknumber=$_POST['pnum'];
	
	$table="fra_package";
	$columns="Priceduration,Packageprice";
	$column_values="'".$pduration."','".$pknumber."'";
	
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
//echo("Inserted Sucessfully");
echo"<script>
			alert('Successfully Inserted');
			window.location.href='add_fra_package.php?succ=".$suc."';
			</script>";
			exit;
}
else
{
//echo"Not inserted".mysql_error();	

echo"<script>
			alert('Not inserted');
			window.location.href='add_fra_package.php?notsucc=".$fail."';
			</script>";
			exit;

}	
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Franchise Package</title>
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
	<div class="col-sm-12" id="edu_type_label"> Add Package</div>
	
	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
			
			<div class="form-group">
            <label for="usr" id="field_label">Package Duration<span style="color:red;">*</span></label>
            <input type="text" class="form-control" id="usr" name="pdur" placeholder="Please package duration (Years)" pattern="[a-zA-Z+ ][0-9]{1,30}{1,50}" title="Please enter package duration" required>
	  	 
            </div>
	
	
			
      <div class="form-group">
      <label for="usr" id="field_label">Enter Price<span style="color:red;">*</span></label>
      <input type="number" class="form-control" id="usr" name="pnum" placeholder="Please Enter Price" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Price" required>
	  	 
      </div>
	
		
	
		
	  <div class="form-group">

      <input type="submit" class="edu_btn"  name="Submit" value="Submit">
    </div>	
			
			
			
			
			
			
			
			</form>
			</div>
			<div class="col-sm-3"></div>
	
	
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
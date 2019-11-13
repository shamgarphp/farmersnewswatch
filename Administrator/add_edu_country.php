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
	
	
	$cname=$_POST['conname'];
	$ccode=$_POST['concode'];
	
	
	$table="country";
	$columns="Countryname,Countrycode";
	$column_values="'".$cname."','".$ccode."'";
	
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
<!-- Latest compiled and minified CSS -->
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
	<div class="col-sm-12" id="edu_type_label"> Add Country</div>
	
	<div class="col-sm-12" id="b_content">

	
			<div class="col-sm-3"></div>
			<div class="col-sm-6" id="fields_edu">
			<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	      
		  <!--
		  <?php
            
            if(isset($_GET['succ']))
            {
                if(base64_decode($_GET['succ'])=="succ")
                {
                ?>
            <div class="alert alert-success" id="alert_label_succ">Successfully Inserted. !</div>
                
            <?php
                }
                }
            if(isset($_GET['notsucc']))
            {    if(base64_decode($_GET['notsucc'])=="wrong")
                {
                
                ?>
            <div class="alert alert-danger" id="alert_label_fail">Unable to process your request. Please try again. !</div>
            <?php
                }
                }
            
            ?>-->
	
	<div class="form-group">
      <label for="usr" id="field_label">Country Name</label>
      <input type="text" class="form-control" id="usr" name="conname" placeholder="Country Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Country Name" required>
	  	 
    </div>
	
	
	<div class="form-group">
      <label for="usr" id="field_label">Country Code</label>
      <input type="text" class="form-control" id="usr" name="concode" placeholder="Country Code" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Country Code" required>
	  	 
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
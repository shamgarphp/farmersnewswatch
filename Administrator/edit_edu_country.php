<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator</title>
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
    
	<div class="col-sm-6" id="b_content" style="border-radius:5px;padding:0px;">
	
	<div class="col-sm-4" id="edu_type_label"><a href="#" style="text-decoration:none;">&emsp; Edit Country</a></div>
	<div class="col-sm-4" id="edu_type_label"></div>
	<div class="col-sm-4" id="edu_type_label"><a href="#" style="text-decoration:none;text-align:right;"> View Country</a></div>
	
	<div class="col-sm-12" id="b_content" style="border 1px solid red;"></div>
	
	<div class="form-group">
      <label for="usr" id="field_label">Country Name<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="usr" name="conname" placeholder="Country Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Country Name" required>
	  	 
    </div>
	
	
	<div class="form-group">
      <label for="usr" id="field_label">Country Code<span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="usr" name="concode" placeholder="Country Code" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Country Code" required>
	  	 
    </div>
	
	<div class="form-group">
	<input type="submit" class="btn btn-success" name="update" value="Update"/>
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
            


</body></html>
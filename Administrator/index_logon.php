<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");

$getsignle = new Dbcon;
$getsignle->is_session();
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
    
	<div class="col-sm-12" style="padding:0px;border:1px solid grey;">
	
	
	
	body content
	
	
	<?php
	
	/*
	
	$table="testing";
	$conds="where ";
	
	
	$getsignle = new Dbcon;
	
	
	$as=$getsignle->getsinglerecord($table,$conds);
		$namea=$as['name'];
	
	$s=$as['as'];
	
	echo($s."<br/>");
	$ins=$getsignle->insertrecord($table,$columns,$column_values);
	$ups=$getsignle->updaterecord($table,$columns_value,$whr);
	$delt=$getsignle->deleterecord($table,$whr);
	$drp=$getsignle->droprecord($table);
	*/
	
	
	
	

	
	
	//}
	/*
	$query=mysql_query("select * from testing");
if($row=mysql_fetch_array($query))
{
	echo($row['name']);
}*/
	
	?>
	
	
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
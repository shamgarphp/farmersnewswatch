<?php

include("config/dbconnection.php");

include("config/dbconfig.php");
$config_class = new Dbcon;

$config_class->is_session();


if(isset($_GET['fac_name']))
{	
	$getvalu=$_GET['fac_name'];
//echo $getvalu;
	 
	?>
 
	<option value=""> --Select Subject -- </option>
	  <?php                                                                  
       $query=mysql_query("select * from add_subjects  where class='".$getvalu."' ");
//echo  "select * from add_subjects  where class='".$getvalu."' "   ;   
	   while($re=mysql_fetch_array($query))
        {
			
				
			$facu=$re['subjects'];	
			
			
        ?>
        <option value="<?php echo($re['id']); ?>"><?php echo($facu);?>    </option>
                                                                           
        <?php
		}
     
}
    ?>
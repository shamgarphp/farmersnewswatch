<?php

include("config/dbconfig.php");
include("config/dbconnection.php");

$config_class = new Dbcon;

if(isset($_GET['brd']))
{	
	$getvalu=$_GET['brd'];

	 
	?>
 
	<option value=""> --Select Class-- </option>
	  <?php                                                                  
       $query=mysql_query("select * from  ply_admin_class_ply  where boardtype='".$getvalu."'   ");
    
        while($re=mysql_fetch_array($query))
        {
			?>
			        <option value="<?php echo($re['sno']); ?>"><?php echo($re['Class']);?>    </option>

        <?php 
             	
		}
}
    ?>
<?php

include("config/dbconfig.php");
include("config/dbconnection.php");

if(isset($_GET['clsids']))
{	
	$id1=$_GET['clsids'];
	?>
 
	<option value="">-- Select Class --</option>
	<?php
	
	$query=mysql_query("select * from admin_class where BoardName='".$id1."'");
	while($row=mysql_fetch_array($query))
	{
		
		?>

		<option value="<?php echo($row['sno']); ?>"><?php echo($row['class']); ?></option>
	
		<?php
	
	}	

}
?>

 
	   









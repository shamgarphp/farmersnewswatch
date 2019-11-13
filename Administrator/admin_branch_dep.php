<?php

include("config/dbconfig.php");
include("config/dbconnection.php");
error_reporting(0);
if(isset($_GET['crseids']))
{
	
	$id2=$_GET['crseids'];

	?>
	<option value="">  Select Branch </option>

	<?php
	
	$query=mysql_query("select * from admin_branch where course_name='".$id2."'   ");
	while($row=mysql_fetch_array($query))
	{
	
		?>

		<option value="<?php echo($row['sno']); ?>"><?php echo($row['admin_branch_name']);  ?></option>
	
		<?php
	
	}	
}

?>
<?php

if(isset($_GET['yearids']))
{
	
	$id2=$_GET['year'];
	$id3=$_GET['crs'];

	?>
	<option value="">  Select Year  </option>

	<?php
	
	$query=mysql_query("select * from admin_year where branch_name='".$id2."' and course_name='".$id3."'  ");
	
	while($row=mysql_fetch_array($query))
	{
	
		?>

		<option value="<?php echo($row['sno']); ?>"><?php echo($row['admin_year']);  ?></option>
	
		<?php
	
	}	
}
if(isset($_GET['semids']))
{
	
	$id2=$_GET['semids'];

	?>
	<option value="">-- Select Semister--</option>

	<?php
	
	$query=mysql_query("select * from admin_semister where year='".$id2."'");
	while($row=mysql_fetch_array($query))
	{
	
		?>

		<option value="<?php echo($row['sno']); ?>"><?php echo($row['admin_semister_name']);  ?></option>
	
		<?php
	
	}	
}
?>
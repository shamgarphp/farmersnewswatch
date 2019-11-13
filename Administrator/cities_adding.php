<?php
 
 include("config/dbconnection.php");

if(isset($_GET['stateids']))
{
	
	$id=$_GET['stateids'];

	
	?>
	<option value="">-- Select City --</option>

	<?php
	$query=mysql_query("select * from city where Statename='".$id."'");
	while($row=mysql_fetch_array($query))
	{

	?>

		<option value="<?php echo($row["SNO"]);  ?>"><?php echo($row["City"]);?></option>
	
		<?php
	
	}


	
}

?>


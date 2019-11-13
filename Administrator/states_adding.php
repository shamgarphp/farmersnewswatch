<?php
 
 include("config/dbconnection.php");

if(isset($_GET['countryids']))
{
	
	$id=$_GET['countryids'];

	
	echo"
	<option value=''>-- Select State --</option>
";
	
	$query=mysql_query("select * from state where Countryname='".$id."'");
	while($row=mysql_fetch_array($query))
	{

	
echo"
		<option value='".$row['SNO']."'>".$row['Statename']."</option>
	";
		
	}
echo"@";
	$queryc=mysql_query("select * from country where SNO='".$id."'");
	while($rowc=mysql_fetch_array($queryc))
	{
echo($rowc['Countrycode']);
	}
	
}

?>


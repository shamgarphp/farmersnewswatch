<?php
 
 include("config/dbconnection.php");

if(isset($_GET['eduids']))
{
	
	$id=$_GET['eduids'];


	$query=mysql_query("select * from package where Packagetype='".$id."'");
	while($row=mysql_fetch_array($query))
	{
echo($row['Packageprice']);
	
	
	}
	
	/*
echo("#");
	$querya=mysql_query("select * from package where Packagetype>='101' and Packagetype<='102' order by SNO asc ");
	while($rowa=mysql_fetch_array($querya))
	{
		
		$con=$rowa['Packagetype'];
		$tg=$rowa['Packageprice'];
		if($con=="101")
		{
			echo($tg."#");
		}
		if($con=="102")
		{
			echo($tg."#");
		}
		
//echo($row['Packageprice']);

	
	}
	
		
	
	$queryq=mysql_query("select * from education_type where id='".$id."'");
	while($rowq=mysql_fetch_array($queryq))
	{
echo($rowq['education_name']);
	
	
	}
	*/
}

?>


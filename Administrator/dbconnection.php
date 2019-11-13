  <?php  
// $dbc = @mysql_connect("localhost","bslatecoin_bteam_user","bteam_edu$243");
$dbc = @mysql_connect("localhost","rpfdscoi_farmnw","rpfdscoi_farmnw");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
@mysql_select_db("rpfdscoi_farmnw") or
die('Could not select the database: '. mysql_error());


/*

$query=mysql_query("select * from testing");
if($row=mysql_fetch_array($query))
{
	echo($row['name']);
}
*/



?>
  <?php  
  session_start();
  error_reporting(0);
  $dbc=mysqli_connect("localhost","root","","rpfdscoi_farmnw");
// $dbc = @mysqli_connect("localhost",'rpfdscoi_farmnw', 'rpfdscoi_farmnw');
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
  
  
// @mysqli_select_db("rpfdscoi_farmnw") or
// die('Could not select the database: '. mysqli_error());

/*
$query=mysql_query("select * from testing");
if($row=mysql_fetch_array($query))
{
	echo($row['name']);
}
*/
?>
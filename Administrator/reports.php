<?php
error_reporting(0);
require_once("dbconnection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  .st
  {
	  padding:80px;
  }
  
  </style>
</head>
<body style="background-color:#F8F8F8;">

<div class="container">




<!--   Invidual reports viewing using modal   -->

<?php
if(isset($_GET['view']))
{

echo"
<script>
$(document).ready(function(){
    $('#myModal').modal('show');
});
</script>
";

$view_sql="select * from users where id='".$_GET['view']."'";


$view_query=mysqli_query($con,$view_sql);
if($vrow=mysqli_fetch_assoc($view_query))
{


?>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#3399FF;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Details</h4>
        </div>
        <div class="modal-body">
		
		<table border="0" style="width:100%;">
		<tr>
		<th style="padding:5px;">Name</th>
		<td><?php echo($vrow['fname']." ".$vrow['lname']); ?></td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Gender</th>
		<td><?php 
			if($vrow['gender']==1)
		{
			echo"Male";
		}
		else if($vrow['gender']==2)
		{
			echo"Female";
		}

		?></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Mail</th>
		<td><?php echo($vrow['mail']); ?></td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Mobile</th>
		<td><?php echo($vrow['mobile']); ?></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Qualification</th>
		<td><?php 

		if($vrow['qualification']==1)
		{
			echo"B.Tech";
		}
		else if($vrow['qualification']==2)
		{
			echo"M.Tech";
		}
		else if($vrow['qualification']==3)
		{
			echo"MCA";
		}

		?></td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Address</th>
		<td><?php echo($vrow['address']); ?></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Languages</th>
		<td>
		<?php 

		$res=explode(",",$vrow['languages']);
		
		if(in_array("1",$res))
		{
			echo"English ";
		}
		if(in_array("2",$res))
		{
			echo"Hindi ";
		}
		if(in_array("3",$res))
		{
			echo"Telugu ";
		}
		if(in_array("4",$res))
		{
			echo"Tamil ";
		}
		



		?>
		
		
		</td>
		<td>&nbsp;</td>
		<th></th>
		<td></td>		
		</tr>
		
		</table>

		
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php
}
}
?>




<!--  View Modal End here  -->



<!-- Update single record by using modal  --->



<?php
if(isset($_GET['edit']))
{

echo"
<script>
$(document).ready(function(){
    $('#myModal_edit').modal('show');
});
</script>
";

$view_sql="select * from users where id='".$_GET['edit']."'";


$view_query=mysqli_query($con,$view_sql);
if($vrow=mysqli_fetch_assoc($view_query))
{


?>
 <div class="modal fade" id="myModal_edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#3399FF;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update User Details</h4>
        </div>
        <div class="modal-body">
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
		
		<input type="text" name="uid" value="<?php echo($_GET['edit']); ?>" />
		<table border="0" style="width:100%;">
		<tr>
		<th style="padding:5px;">Name</th>
		<td>
		
		<input type="text" name="fname" value="<?php echo($vrow['fname']); ?>" /> 
		<input type="text" name="lname" value="<?php echo($vrow['lname']); ?>" /> 
		</td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Gender</th>
		<td><?php 
			if($vrow['gender']==1)
		{
			?>
			<input type="radio" name="gender" value="1" checked /> Male 
			<input type="radio" name="gender" value="2"  /> FeMale 
			
			
			<?php
			
		}
		else if($vrow['gender']==2)
		{
			?>
			<input type="radio" name="gender" value="1" /> Male 
			<input type="radio" name="gender" value="2"  checked /> FeMale 
			
			<?php
		}

		?></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Mail</th>
		<td>
		<input type="email" name="mail" value="<?php echo($vrow['mail']); ?>" /></td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Mobile</th>
		<td>
		
		<input type="text" name="mobile" value="<?php echo($vrow['mobile']); ?>" /></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Qualification</th>
		<td>
		
		<select name="qualification">
		<option value="">-- Select --</option>
		
		
		
		<?php 

		if($vrow['qualification']==1)
		{
			$sdata="selected";
		}
		else if($vrow['qualification']==2)
		{
			$sdata1="selected";
		}
		else if($vrow['qualification']==3)
		{
			$sdata2="selected";
		}

		?>
		<option value="1" <?php echo($sdata); ?> > B.Tech </option>
		<option value="2" <?php echo($sdata1); ?> > M.Tech </option>
		<option value="3" <?php echo($sdata2); ?> > MCA </option>
		
		
		</td>
		<td>&nbsp;</td>
		<th style="padding:5px;">Address</th>
		<td>
		
		<textarea name="address"><?php echo($vrow['address']); ?></textarea></td>		
		</tr>
		
		<tr>
		<th style="padding:5px;">Languages</th>
		<td>
		<?php 

		$res=explode(",",$vrow['languages']);
		
		
		?>
		
		<input type="checkbox" name="lang[]"  value="1"
		<?php
		if(in_array("1",$res))
		{
			echo"checked";
		}
		?> /> English
		<input type="checkbox" name="lang[]" value="2"
		<?php
		if(in_array("2",$res))
		{
			echo"checked";
		}
		?> /> Hindi
		<input type="checkbox" name="lang[]" value="3"
		<?php
		if(in_array("3",$res))
		{
			echo"checked";
		}
		?> /> Telugu
		<input type="checkbox" name="lang[]" value="4"
		<?php
		if(in_array("4",$res))
		{
			echo"checked";
		}
		?> /> Tamil
		
		



		
		
		</td>
		<td>&nbsp;</td>
		<th></th>
		<td>
		
		<input type="submit" name="update" value="update" class="btn btn-primary" />
		</td>		
		</tr>
		
		</table>
</form>
		
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php
}
}
?>




<!-- updation code end here  -->


<div class="col-sm-12" style="margin-top:30px;margin-bottom:60px;border:0px solid red;">

<?php
if(isset($_GET['succ']))
{

?>

<div class="col-sm-12">

<div class="col-sm-3"></div>
<div class="col-sm-6 alert alert-success alert-dismissible">

<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

<?php  echo(base64_decode($_GET['succ'])); ?>
</div>
<div class="col-sm-3"></div>
</div>
<?php
}
if(isset($_GET['error']))
{

?>

<div class="col-sm-12">

<div class="col-sm-3"></div>
<div class="col-sm-6 alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

<?php  echo(base64_decode($_GET['error'])); ?>
</div>
<div class="col-sm-3"></div>
</div>
<?php
}
?>
<div class="col-sm-12" >

	<div class="col-sm-12" style="text-align:center;font-weight:bolder;font-size:24px;text-decoration:underline;color:blue;text-shadow:0px 0px 2px black;">
		User Reports
	</div>
	<div class="col-sm-12" style="text-align:right;"> <a href="index.php" style="text-decoration:underline;">Add User</a>  </div>
	 <table class="table table-striped" style="border:1px solid lightgrey;">
    <thead>
      <tr style="background-color:#606060;color:white;">
        <th>S.No</th>
        <th>Date & Time</th>
        <th>Name</th>
		<th>Gender</th>
		<th>Mail</th>
		<th>Mobile</th>
		<th>Qualification</th>
		<th>Address</th>
		<th>Languages</th>
		<th>Actions</th>
		
      </tr>
    </thead>
    <tbody>
	<?php
	
	$i=0;
	
	$sql="select * from users";
	$query=mysqli_query($con,$sql);
	
	while($row=mysqli_fetch_assoc($query))
	{
		$i++;
		if($i%2==0)
		{
			$color="background-color:white;";
		}
		else
		{
			$color="background-color:lightgrey;";			
		}
	?>
      <tr  style="<?php echo($color); ?>">
        <td><?php echo($i); ?></td>
       
        <td><?php echo($row['created_date']." ".$row['created_time']); ?></td>
		 <td><?php echo($row['fname']." ".$row['lname']); ?></td>
        <td><?php 
		if($row['gender']==1)
		{
			echo"Male";
		}
		else if($row['gender']==2)
		{
			echo"Female";
		}
	 ?></td>
        <td><?php echo($row['mail']); ?></td>
		 <td><?php echo($row['mobile']); ?></td>
        <td><?php 
		
		if($row['qualification']==1)
		{
			echo"B.Tech";
		}
		else if($row['qualification']==2)
		{
			echo"M.Tech";
		}
		else if($row['qualification']==3)
		{
			echo"MCA";
		}
		
 ?></td>
        <td><?php echo($row['address']); ?></td>
		<td><?php 
		
		$res=explode(",",$row['languages']);
		
		if(in_array("1",$res))
		{
			echo"English ";
		}
		if(in_array("2",$res))
		{
			echo"Hindi ";
		}
		if(in_array("3",$res))
		{
			echo"Telugu ";
		}
		if(in_array("4",$res))
		{
			echo"Tamil ";
		}
		
		
 ?></td>
		<td>
		
		<a href="reports.php?view=<?php echo($row['id']); ?>" ><i class="glyphicon glyphicon-eye-open"></i></a>
		<a href="reports.php?edit=<?php echo($row['id']); ?>" ><i class="glyphicon glyphicon-edit"></i></a>
		<a href="reports.php?remove=<?php echo($row['id']); ?>" onclick="javascript:if(confirm('Do you want delete this record')==true){return true}else{ return false;}"><i class="glyphicon glyphicon-trash"></i></a>
		
		</td>
		
      </tr>
	  <?php
	  
	}
	?>
    
     
    </tbody>
  </table>



</div>


</div>


</div>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$mails=$_POST['mail'];
	$mobileno=$_POST['mobile'];
	$addr=$_POST['address'];
	$qual=$_POST['qualification'];
	$lang=$_POST['lang'];
	
	
	/*echo("Fname : ".$fname."<br/>");
	echo("Lname : ".$lname."<br/>");
	echo("Gender : ".$gender."<br/>");
	echo("Mail ID : ".$mails."<br/>");
	echo("Mobile : ".$mobileno."<br/>");
	echo("Address : ".$addr."<br/>");
	echo("Qualification : ".$qual."<br/>");
	//echo("Language : ".$lang."<br/>");
	//print_r($lang);
	*/
	$ln="";
	foreach($lang as $value)
	{
		$ln.=$value.",";
	}
	//echo("Language : ".$ln."<br/>");
	
	
	
	$sql="update users set fname='".$fname."',lname='".$lname."',gender='".$gender."',mail='".$mails."',mobile='".$mobileno."',qualification='".$qual."',address='".$addr."',languages='".$ln."'  where id='".$_POST['uid']."' ";
	//echo($sql);
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo"
		<script>
		//alert('Successfully Registered.!');
		window.location.href='reports.php?succ=".base64_encode('Successfully updated.!')."';
		</script>
		";
		exit;
		
	}
	else
	{
		echo"
		<script>
		//alert('Unable to process your request. Please try again.!');
		 window.location.href='reports.php?error=".base64_encode('Unable to process your request. Please try again.!')."';
		</script>
		";
		exit;
		
	}
	
	
	
}
if(isset($_GET['remove']))
{
	$sql="delete from users  where id='".$_GET['remove']."' ";
	//echo($sql);
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo"
		<script>
		//alert('Successfully Registered.!');
		window.location.href='reports.php?succ=".base64_encode('Successfully Removed.!')."';
		</script>
		";
		exit;
		
	}
	else
	{
		echo"
		<script>
		//alert('Unable to process your request. Please try again.!');
		 window.location.href='reports.php?error=".base64_encode('Unable to process your request. Please try again.!')."';
		</script>
		";
		exit;
		
	}
	
}
mysqli_close($con);
?>

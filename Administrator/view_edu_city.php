<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
	$getsignle = new Dbcon;
	
	
?>

<?php
if(isset($_REQUEST['Submit']))
{
	
	
	$getsignle = new Dbcon;
	
	
	$cname=$_POST['Countryname'];
	$sname=$_POST['sname'];
	$ciname=$_POST['cname'];
	
	$table="city";
	$columns="Countryname,Statename,City";
	$column_values="'".$cname."','".$sname."','".$ciname."'";
	
	$ins=$getsignle->insertrecord($table,$columns,$column_values);

if($ins)
{
echo("Inserted Sucessfully");
}
else
{
echo"Not inserted".mysql_error();	
}	
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Bslate Education - Administrator</title>
<link rel="shortcut icon" type="image/png" href="supporting/B.png" />


<script>
function getstates(countryid) {	
//alert(countryid);
	
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
			
				var  somex2=xmlhttp.responseText;
	//alert(somex2);
     document.getElementById("usr_state").innerHTML=somex2;


																
            }
        }
        xmlhttp.open("GET", "states_adding.php?countryids="+ countryid, true);
        xmlhttp.send();
			
	}
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">

	<?php require_once("includes/mainheader.php"); ?>
	
	</div>


<!--  page header   -->
        <div class="navbar navbar-default header-highlight">
            
			
			
			<?php  require_once("includes/main_header.php");  ?>
			
			
			
        </div>
		
		
		<!--  page header stop   -->
		
		
		<!-- page overall content start here -->
		
        <div class="page-container" style="min-height:567px">
            <div class="page-content">
			
			
			<!-- page sidemenu start here     -->
			
<?php  require_once("includes/leftsidemenu.php");  ?>

				
				<!--  page sidemenu stop here   -->
				
				
				
				
				
				
                <div class="content-wrapper">
                    <div class="content">
<script src="./supporting/Chart.js"></script>
<script src="./supporting/Chart.StackedBar.js"></script>
<!--<script type="text/javascript" src="/css/assets/js/plugins/visualization/echarts/echarts.js"></script>-->                        






<div class="page-header">
    <div class="row">
       
	   
	   
	   
	   <?php  require_once("includes/main_header1.php");  ?>
		
		
		
    </div>
</div>

<!-- header -->

<!-- body content  -->
<div class="content" style="padding:0px;">
    
	<div class="col-sm-12" id="divider_label"></div>
	<div class="col-sm-12" id="b_content" style="border-radius:5px;padding:0px;">
	<div class="col-sm-4" id="edu_type_label" style="padding:10px;"><a href="#" style="text-decoration:none;">View City</a></div>
	<div class="col-sm-1" id="edu_type_label"></div>
	<div class="col-sm-3" id="edu_type_label" style="padding:10px;"><a href="#" style="text-decoration:none;text-align:right;"> Export CityList</a></div>
	<div class="col-sm-2" id="edu_type_label"></div>
	<div class="col-sm-2" id="edu_type_label" style="padding:10px;"><a href="add_edu_city.php" style="text-decoration:none;text-align:right;"> Add City</a></div>
	
	




<SCRIPT language="javascript">
$(function(){
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});
	$(".case").click(function(){
		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}
	});
});
</SCRIPT>
	

	
<?php
$query=mysql_query("select * from city");
//if($row=mysql_fetch_array($query))
?>

<form action="" method="post">
<table class="table table-hover">
<thead>
   <tr style="border-bottom:1px solid lightgrey;text-weight:bold;text-size:22px;background-color:#606060;">
       <th><b>&emsp;<input type="checkbox" id="selectall" style="width:15px;height:15px;"></b></th>
      <th style="color:white;"><b>SNO</b></th>
	  <th style="color:white;"><b>Country Name</b></th>
      <th style="color:white;"><b>State Name</b></th>
      <th style="color:white;"><b>City Name</b></th>
      <th style="color:white;"><b>Action</b></th>	  
    </tr>
</thead>
	<tbody>
	<?php
	
	$a=1;
 while ($row = mysql_fetch_array($query))
    {
		?>
           <tr style="border-bottom:1px solid lightgrey;">
		       <td>&emsp;<input type="checkbox" class="case" name="case[]" value="<?php echo $row['SNO']; ?>"  id="case" style="width:15px;height:15px;"></td>	 	   	 	   
			   <td><?php echo($a++); ?></td>
			   <td><?php //echo($row['ConId']);

                $ghh=$row['Countryname'];
				$query_s=mysql_query("select * from country where SNO='".$ghh."' ORDER By Countryname ASC ");
				if($rg=mysql_fetch_array($query_s))
				{
					echo($rg['Countryname']);
				}
				
				?></td>
			   <td><?php

				$gjj=$row['Statename'];
				$query_s=mysql_query("select * from state  where SNO='".$gjj."'");
				if($rg=mysql_fetch_array($query_s))
				{
					echo($rg['Statename']);
				}
				
				?>
	
				</td>
               <td><?php echo($row['City']); ?></td>
			   <td><a href="view_edu_city.php?edit=<?php echo $row['SNO'];?>"><span class="glyphicon glyphicon-pencil" data-toggle="modal" role="dialog" data-target="#myModal"></span></a></td>
		   </tr>
			   <?php
	             }
                ?>
  </tbody> 
</table>	
			
<div class="row" style="padding:10px;margin:0px;">			

<input type="submit" class="btn btn-danger" name="delete" value="Remove" style="width:100px;height:35px;border-radius:5px;color:white;outline:none;"/>
</div>	
	
	
</div>
<!-- body content end -->

</div>
				 

<!----------------DELETE--------------------->
<?php

//$sql1="select * from country";
 //$link1=mysql_query($sql1);
 //$count=mysql_num_rows($link1);
?>
<!--
<input type="hidden" value="<?php echo($count)?>" name="hidea">-->
</form>

 	<?php
	
    if(isset($_POST['delete']))
	{
		
		error_reporting(0);

		//$coau=$_POST['hidea'];
		$cheboxa=$_POST['case'];
		$r=0;
		foreach($cheboxa as $qwerty)
		{
			
			
			
	    		
        $que = "DELETE FROM city WHERE SNO='$qwerty'";
        $exe = mysql_query($que);
		
	if($exe)
	{
		$r=1;
	}
		
		}
	
	if($r==1)
	{
 echo"
	<script>
	alert('Successfully Deleted');
	window.location.href='view_edu_city.php';
	</script>
	";
	exit;
	}
	else
	{
		echo"
	<script>
	
	alert('Unable to Deleted');
	window.location.href='view_edu_city.php';
	</script>
	";
	exit;
	}
}
	?>		





				 
				 
	         <!-- Edit Button -->
<?php



if(isset($_GET['edit']))
{
	$edit1=$_GET['edit'];

$sql2="select * from city where SNO='".$edit1."'";
$data=mysql_query($sql2);
if($row=mysql_fetch_array($data))
{
	$lg=$row['SNO'];
	$cd=$row['Countryname'];
	$ef=$row['Statename'];
	$gh=$row['City'];

?>

<script>

$(document).ready(function(){
	
	$("#myModal").modal("show");
	
});


</script>

<?php	   
  }



				 
?>				 
				 
<form action="view_edu_city.php" method="POST" >



</script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md" >
      <div class="modal-content">
        <div class="modal-header" style="background-color:#4d4dff;color:white;border-radius:2px;height:50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit And Update</h4>
        </div>
          <div class="modal-body" style="overflow-y:scroll;height:220px;">
          <div class="form-group">
		   <div class="row">
             <div class="col-sm-12" style="margin:0px;padding:0px;">
			   <div class="form-group" style="padding:10px 10px 0px 100px;width:80%;">
                   <input type="hidden"  name="sno" id="s_no" value="<?php echo($lg);?>">
               </div>
			   
			   
			   
			   
	  <div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
      <label for="usr" id="field_label">Country Name</label>
      
	  
	  
	 <?php                                                                  
       //$as=mysqli_query("select * from country ORDER By Countryname ASC");
	   
	   $tab_name="country";
	   $whrs="where SNO='".$cd."'";
	   $ords="ORDER By Countryname ASC";
	
	   $ns=$getsignle->select_query($tab_name,$whrs,$ords);
	   
	   

         while($re=mysql_fetch_array($ns))
           {
            ?>
           <input type="text" class="form-control" id="usr" name="Countryname" placeholder="Country Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter Country Name" value=<?php echo($re['Countryname']);?>  required> 
                                                                            
           <?php
            }
        ?>
	  
	  
	  
	  
     
    </div>
			 




             <!-- <div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
                <label for="usr" id="field_label">State Name</label>
                <input type="text" class="form-control" id="usr" name="sname" value="<?php echo($ef);?>" placeholder="State Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter State Code" required>
	  	 
                </div>	-->		 
			   
      <div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
      <label for="usr" id="field_label">State Name</label>
      
	  


      <?php                                                                  
       //$as=mysqli_query("select * from country ORDER By Countryname ASC");
	   
	   $tab_name="state";
	   $whrs="where SNO='".$ef."'";
	   $ords="ORDER By Statename ASC";
	
	   $ns=$getsignle->select_query($tab_name,$whrs,$ords);
	   
	   

         while($re=mysql_fetch_array($ns))
           {
            ?>
           <input type="text" class="form-control" id="usr" name="sname" value="<?php echo($re["Statename"]);?>" placeholder="State Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter City Name" required/> 
                                                                            
           <?php
            }
        ?>
   

	  
    </div>	

	
	
	<!--
	<div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
      <label for="usr" id="field_label">State Name</label>
      <select class="form-control" id="usr_state" name="sname" value="<?php echo($ef);?>" placeholder="State Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter State Code" required>
	      	  
	  </select>
    </div> -->	

	<div class="form-group" style="padding:0px 10px 0px 100px;width:80%;">
      <label for="usr" id="field_label">City Name</label>
      <input type="text" class="form-control" id="usr" name="cname" value="<?php echo($gh);?>" placeholder="City Name" pattern="[a-zA-Z+ ]{3,30}" title="Please Enter City Name" required>
	  	 
    </div>
	
	
							   					   
	 	 
			</div>
		  </div>
		 </div>
        </div>
        <div class="modal-footer" style="padding:10px;">
          <center><button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;">Cancel</button>
         <input type="submit" name="update" value="Update"  style="width:100px;height:33px;border-radius:3px;border:1px solid red;background-color:red;color:white;"></center>
        </div>
		
      </div>
    </div>
</div>
</form>	

    <?php
}
	 if(isset($_POST['update']))
{
	$serial=$_POST['sno'];
	
	$val1=$_POST['Countryname'];
	
	$val2=$_POST['sname'];
	
	$val3=$_POST['cname'];

	$var="UPDATE city SET Countryname='".$val1."',Statename='".$val2."',City='".$val3."' WHERE SNO='".$serial."'";
    $res=mysql_query($var);
	if($res)
	{
	?>
   <script>
   alert('updated Successfully');
   window.location.href='view_edu_package.php';
   </script>
  <?php
	}
	
	}
   ?>
   				 
					 
				 
				 
				 
				 
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        
					
						<?php   require_once("includes/footer.php"); ?>
						
						
						
                    </div>         
                </div>
            </div>
        </div>
            


</body>
</html>
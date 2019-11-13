<?php




require_once("config/dbconnection.php");

require_once("config/dbconfig.php");

$site_url = "http://localhost/farmers_news_watch";


$getsignle = new Dbcon;
$getsignle->is_session();


if(isset($_GET['unap']))
{
    $id=base64_decode($_GET['unap']);
    
    $qry=mysql_query("update phone_direct set status='0' where id='".$id."' ");
    
    	if($qry)
	{
		echo"<script>
      alert('successfully changed display status into UnApproved');
		window.location.href='phone_directoryreports.php';
		</script>";

		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
	}
}


if(isset($_GET['ap']))
{
    $id=base64_decode($_GET['ap']);
    
    $qry=mysql_query("update phone_direct set status='1' where id='".$id."' ");
    
    	if($qry)
	{
		echo"<script>
      alert('successfully changed display status into Approved');
		window.location.href='phone_directoryreports.php'; 
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
	}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>FarmerWatcher -Administrator </title>

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<style type="text/css">

tr:nth-child(even) {
    background-color: #F0F0F0;
}


tr:nth-child(odd) {
    background-color: white;
}
#rg:hover
{
    background-color: lightgrey;
	
}
#ths th
{
font-weight:bold;color:#606060;
text-align:center;
}
a:hover, a:focus{
    text-decoration: none;
    outline: none;
}


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
License Terms
</style>
<SCRIPT language="javascript">
			
$(function()
{
	// add multiple select / deselect functionality
	$("#selectall").click(function () 
	{
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function()
	{

		if($(".case").length == $(".case:checked").length) 
		{
			$("#selectall").attr("checked", "checked");
		} 
		else
		{
			$("#selectall").removeAttr("checked");
		}

	});
});

</script>
	
</head>
    <body class="pace-done">
	<div class="pace  pace-inactive">
	<?php require_once("includes/mainheader.php"); ?>	
	</div>
    <div class="navbar navbar-default header-highlight">
            						
			<?php  require_once("includes/main_header.php");  ?>
								
        </div>
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
  
       
 
	
	<!-------- ------------>
	
 	<div class="content" style="padding:0px;">
	
	
	<?php
if(isset($_GET['view']))
{
	$id_modal=base64_decode($_GET['view']);
	
	echo"
	<script>
	
		$(document).ready(function(){
		//	alert('dfgd');
        $('#myModal').modal('show');
    });
	
	</script>
	";

?>

<div class="modal fade" id="myModal" role="dialog" style=" ">
    <div class="modal-dialog" style="width:60%" style="overflow-x:hidden;overflow-y:hidden;">  
      <!-- Modal content-->
	<div class="modal-content" style="">
	
    <div class="modal-header" style="background-color:#0066CC;color:white;padding-bottom:8px;">         
	<span class="modal-title" style="font-weight:bold;font-size:18px;color:#f8f8f8;">Edit Details</span>
	<button type="button" class="close" data-dismiss="modal" style="color:white;font-weight:bold;margin-top:-10px;font-size:25px;">&times;</button>
    </div>
	
    <div class="modal-body" style=" ">
 
	

	
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" >
        <div class="modal-body" style="">
 			<div class="row" style="border-radius:5px;border:1px solid lightgrey;padding:10px;">
						<?php		
							if(isset($_GET['view']) && !empty($_GET['view'])){
								$id_modal=base64_decode($_GET['view']);
								$query = "SELECT * FROM phone_direct WHERE id = '".$id_modal."'";
								$res = mysql_query($query);

							?>
				<div class="form-group">
						<?php
						while($row = mysql_fetch_assoc($res)){
						?>

					  <label for="usr" id="field_label">Choose Category<span style="color:red;"></span></label>
					  <select class="form-control" id="usr" name="category"  required> 
						<?php
						//Do the query
						$query = "SELECT * FROM phone_category";
						$result = mysql_query($query);
						//iterate over all the rows
						while($rowss = mysql_fetch_assoc($result)){ ?>  
					        <option <?php if($row['category'] == $rowss['id']){ ?> selected="selected" <?php } ?> value="<?php echo $rowss['id']; ?>"> <?php echo $rowss['phone_cate']; ?> </option>
						     <?php } ?>
				         ?>
					   </select>
					  </div>	

					  <div class="form-group">
					  <label for="usr" id="field_label">Name<span style="color:red;"></span></label>
					  <input type="text" class="form-control" id="usr" name="con_name" placeholder="Please Enter Name"  title="Please Enter Name" value="<?php echo $row['con_name']; ?>" required>
					  </div>

					  <div class="form-group">
					  <label for="usr" id="field_label">Mobile Number<span style="color:red;"></span></label>
					  <input type="number" pattern="[0-9]" class="form-control" id="usr" name="phone_number" placeholder="Please Enter Mobile Number"  title="Please Enter Mobile Number" value="<?php echo $row['number']; ?>" required>
					  	 
					  </div>

<!-- 					  <div class="form-group">
					  	<label for="usr" id="field_label">Select City <span style="color:red;"></span></label>
					  	<select class="form-control" id="usr" name="city_id">
					  		<option value=""> --Choose City-- </option>
							<?php
							//Do the query
							$query = "SELECT * FROM city order by name asc";
							$result = mysql_query($query);
							//iterate over all the rows
 
							while($rows = mysql_fetch_assoc($result)){ ?>  
					            <option <?php if($row['city_id'] == $rows['id']){ ?> selected="selected" <?php } ?> value="<?php echo $rows['id']; ?>"> <?php echo $rows['name']; ?> </option>
							     <?php } ?>
					         ?>
					  	</select>
					  </div> -->

       <?php 
      	$state_array = array();
      	$sql_services = mysql_query("SELECT * FROM `state` ");
		    while ($services = mysql_fetch_assoc($sql_services)) {
            $state_array[] = $services;
        }
      ?>	

	<div class="form-group">
          <?php 
           $city= "SELECT phone_direct.state, state.state_name FROM phone_direct INNER JOIN state ON phone_direct.state = state.state_id where phone_direct.id = '".$id_modal."' ";
           // echo $city ;exit;
           $state_val= mysql_query($city);
           $row=mysql_fetch_array($state_val);
           // print_r($row);exit;
          ?>
        <label for="state" id="field_label">Select State <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="state" name="state" onchange="getDistrict(this.value);">
          <option value=""> --Choose State-- </option> 
            <?php foreach ($state_array as $key => $value) { ?>
                <option  value="<?php echo $value['state_id']; ?>" <?php if($row['state'] == $value['state_id'] ){ echo "selected";} ?> ><?php echo $value['state_name']; ?></option>
            <?php } ?>
        </select>
      </div>


      <div class="form-group districtdiv" id="districtdiv">
        <label for="district" id="field_label">Select District <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="district" name="district">
          <option value=""> --Choose District-- </option>
        </select>

      </div>

      <div class="form-group mandaldiv" id="mandaldiv">
        <label for="mandal" id="field_label">Select Mandal <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="mandal" name="mandal">
          <option value=""> --Choose Mandal-- </option>
        </select>
      </div>

      <div class="form-group villagediv" id="villagediv">
        <label for="village" id="field_label">Select Village <span style="color:red;"></span></label>
        <select class="form-control selectClass" id="village" name="village">
          <option value=""> --Choose Village-- </option>
        </select>
      </div>







				    <input type="hidden" name="model_id" id="modal_id" value="<?php echo $id_modal; ?>">
				    <input type ="submit"  value ="Submit" name="submited" class="btn btn-success">
				    <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px;">Cancel</button>
					</div>
				<?php
					}
				}
				?>	
			</div>
   		</div>

	
	</form>

	</div>
    </div>
</div>
  

	
	</div>

<?php
} 
?>
	
	
    
    <div class="col-sm-12" style="margin:10px 0px 0px 0px;padding:15px;border:0px solid grey;">	
	<div class="col-sm-9" id="edu_type_label" style="padding:0px;font-size:16px;margin-top:30px;">View Phone Directory Reports</div>
	<div class="col-sm-3" id="edu_type_label" style="font-size:16px;padding-bottom:5px;">
	<span id="edu_view" style="float:right;font-size:12px;text-shadow:0px 0px 0px red;background-color:red;border-radius:3px;padding:2px 5px 2px 5px;">
	<a href="phone_directory.php" style="color:white;">  + Add   </a></span>
	</div>
	<div class="col-sm-12" id="b_contenta" style="background-color:#F8F8F8;padding:0px 0px 10px 0px;">

	<div class="table-responsive">
	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
	
	<table class="table table-hover" style="border:1px solid lightgrey;">
 
    <tr id="ths" style="background-color:#606060;font-size:14px;">
	<th><input type="checkbox" id="selectall"/></th>
    <!-- <th style="color:white;">S.NO</th> -->
	<!-- <th style="color:white;">Category</th> -->
	
    <th style="color:white;">Name</th>
	<th style="color:white;">Number</th>
	<th style="color:white;">District Name</th>
		 <!-- <th style="color:white;">Posted By</th>  -->
	<!-- <th style="color:white;">Display Status</th> -->
	
    <th style="color:white;">Action</th>
    </tr>

	<?php
		 		 if($_SESSION['client']=="Admin")
        {

            	// $tab_name="phone_direct";
		// $where="  order by category  asc";
		// $sql = "SELECT city.name,* 
		//  FROM city LEFT JOIN phone_direct ON city.id = phone_direct.city_id where order by asc";

		 $sql = "SELECT phone_direct.id,phone_direct.category,phone_direct.con_name,phone_direct.phone_number,district.dist_name FROM phone_direct  INNER JOIN district ON phone_direct.district = district.dist_id ";
		 // echo $sql;exit;
		 
        }

        else

        {
		// $tab_name="phone_direct";
		// $where=" where posted_by='".$_SESSION['client']."' order by category  asc";
		 $sql = "SELECT phone_direct.id,phone_direct.category,phone_direct.con_name,phone_direct.phone_number,district.dist_name FROM phone_direct  INNER JOIN district ON phone_direct.district = district.dist_id where posted_by='".$_SESSION['client']."' ";
		 // echo $sql;exit;

        }

		$sele=mysql_query($sql);

		// $sele=$getsignle->select_query($tab_name,$where);
		// $sele=$getsignle->select_query($tab_name,$where);


		// $inc=0;

		while($row=mysql_fetch_array($sele))
		{
			// var_dump($row);
			// echo "hi";
			// exit;
			// $inc++;
			

			?>  
             <tr style="text-align:center;">	
                 <td>
				 <input type="checkbox" class="case" name="case[]" value="<?php echo($row['id']) ?>"/>
				 </td>
<!--                    <td><?php echo($inc); ?></td>
				                    <td><?php 
				                    
				                    if($row['category']=="Co-operative's")
				                    {
				                        echo"Coperative FPOs";
				                    }
				                    else if($row['category']=="Blogs")
				                    {
				                        echo"Distributer / Dealer";
				                    }
				                    else if($row['category']=="Health_and_Life_Style")
				                    {
				                        
				                        echo"Farmers world";
				                    }
				                    else
				                    {
				                       echo($row['category']); 
				                    }
				                     ?></td>  -->
                    <!-- <td> <?php echo ($row['id']) ; ?></td> -->
                    <!-- <td> <?php echo ($row['category']) ; ?></td> -->
                    <td> <?php echo ($row['con_name']) ; ?></td>
                    <td> <?php echo ($row['phone_number']) ; ?></td>
                    <td> <?php echo ($row['dist_name']) ; ?></td>
                     <!-- <td><?php echo($message); ?></td> -->
                    
                     <!-- <td><?php 
                    if($row['posted_by']=="Admin")
                    {
                        echo"Admin <br/> <span style='font-size:12px;'></span>";
                    }
                    else
                    {
                        $qry_sub=mysql_query("select * from create_login where id='".$row['posted_by']."' ");
                        if($row_sub=mysql_fetch_array($qry_sub))
                        {
                            if($row_sub['login_type']==1)
                            {
                                echo"District Head";
                            }
                            else if($row_sub['login_type']==2)
                            {
                                echo"State Head";
                            }
                            else if($row_sub['login_type']==3)
                            {
                                echo"Mandal Head";
                            }
                            else if($row_sub['login_type']==4)
                            {
                                echo"Village Head";
                            }
                            
                            // echo" - ".$row_sub['firstName']." ".$row_sub['lastName']." <br/> <span style='font-size:12px;'>".$row['created_date']." ".$row['created_time']."</span>";
                            
                        }
                    }
                    
                    ?></td>  -->
                     <!-- <td><?php 
                    if($_SESSION['client']=="Admin")
                    {
                    if($row['status']==0)
                    {
                        ?>
                        <a href="?unap=<?php echo(base64_encode($row['id'])); ?>" onclick="javascript:if(confirm('Do you want to UnApprove display status')==true){return true}else{ return false;}"><span class="label label-success">Approved</span></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a href="?ap=<?php echo(base64_encode($row['id'])); ?>" onclick="javascript:if(confirm('Do you want to Approve display status')==true){return true}else{ return false;}"><span class="label label-danger">Unpproved</span></a>
                        <?php
                    }
                    
                    }
                    else
                    {
                         if($row['status']==0)
                    {
                        ?>
                        <span class="label label-success">Approved</span>
                        <?php
                    }
                    else
                    {
                        ?>
                                               <span class="label label-danger">Unpproved</span>
                        <?php
                    }
                    }
                    ?></td> -->
                    
                   
                    
                   
                 <td>
		<a href="phone_directory_edit.php?edit_edu&edit==<?php echo(base64_encode($row['id'])) ?>" ><i class="glyphicon glyphicon glyphicon-edit"></i></a>
		<a href="phone_directoryreports.php?remove=<?php echo(base64_encode($row['id'])); ?>" onclick="javascript:if(confirm('Do you want remove')==true){return true}else{ return false;}" title="Remove"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
		</tr>
		
            <?php
            
        }
	
	if($inc=="0")
		{  	?>
	<tr>
		<td colspan="8" style="text-align:center;color:red;">No Results</td>
		</tr>
		<?php } ?>
  <tr>
  
  <td colspan="8">
	<input type="submit" onclick="javascript:if(confirm('Do you want remove')==true;){return true}else{ return false;}" class="btn btn-danger" style="height:30px;padding-top:4px;" value="Remove" name="remove_data" /> 
  </td>
  </tr>
		
	 </table>
	 
    </form>
			
	</div>
	</div>
	
	
	
</div>


    </div>
	</div>
            </div>
        </div>
    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        					
	<?php   require_once("includes/footer.php"); ?>
											
						
                    </div>         
                </div>
            </div>
			
</body>
</html>

<?php
	if(isset($_POST['submited']) && !empty($_POST['submited'])){
		// echo "hi";
		// exit;
		$categ = $_POST['category'];
		$contact_name = $_POST['con_name'];
		$numberr = $_POST['phone_number'];
		$cityy = $_POST['city_id'];
		$model_id = $_POST['model_id'];
		// print_r($model_id);
		// exit;
		
		$sql = "UPDATE phone_direct SET category='".$categ."',con_name='".$contact_name."',phone_number='".$numberr."',city_id='".$cityy."' WHERE id='".$model_id."' ";
		// print_r($sql);


		if( $sele=mysql_query($sql)){

		echo"<script>
      alert('successfully Record Updated');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
			}
	}

?>


<?php
if(isset($_POST['remove_data']))
{
	$datas=$_POST['case'];
	$table="phone_direct";
	$rv=0;
	foreach($datas as $item)
	{
		$ss=mysql_query("select * from phone_direct where id='".$item."' ");
		if($row=mysql_fetch_array($ss)){
			// $sr=$row['file_content'];
		}
		$wher="where id='".$item."' ";
	
		$dels=$getsignle->deleterecord($table,$wher);
		if($dels)
		{
			// unlink("News_Uploads/Worldnews/$sr");

			$rv=1;
		}
	}
	
	if($rv==1)
	{
		echo"<script>
      alert('successfully Deleted');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
	}
	else
	{
	echo"<script>
       alert('Unable to process Please try again');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
	}

}

if(isset($_GET['remove']))
{
	$datas1=base64_decode($_GET['remove']);
	// $datas2=base64_decode($_GET['file']);
	$table="phone_direct";
	$wher="where id='".$datas1."' ";

	$delsdata=$getsignle->deleterecord($table,$wher);
				
	if($delsdata)
	{
		//unlink("/News_Uploads/Worldnews/'".$datas2."'");
		
		
// unlink("News_Uploads/Worldnews/$datas2");
		
		echo"<script>
      alert('successfully Deleted');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
		
	}
	else
	{
		echo"<script>
       alert('Unable to process Please try again');
		window.location.href='phone_directoryreports.php';
		</script>";
		exit;
	}
}

/*-------------------------------------------------Update code-------------------------------------------*/
?>


<script>

    // function getState(countryId) {
    //     countryId = countryId.split(',')[0];
    //     $.ajax({
    //         type: "POST",
    //         dataType: 'html',
    //         url: "<?php echo $site_url ?>/Administrator/location_search_ajax_edit.php",
    //         data: {
    //             "parameter": countryId,
    //             "method": "state_ajax",
    //         },
    //         cache: false,
    //         success: function (data) {
    //             $('#statediv').html(data);
    //         }
    //     });
    // }

    function getDistrict(stateId) {
      var id_modal = $('#modal_id').val();
        stateId = stateId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url; ?>/Administrator/location_search_ajax_phone_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": stateId,
                "method": "district_ajax",
            },
            cache: false,
            success: function (data) {
            	console.log(data);
                $('#districtdiv').html(data);
                 // if( disval != '' ){
                  var districtId= $('#district').val();
                  getMandal(districtId);
                // }
            }
        });
    }



    function getMandal(districtId) {
      var id_modal = $('#modal_id').val();
        districtId = districtId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax_phone_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": districtId,
                "method": "mandal_ajax",
            },
            cache: false,
            success: function (data) {

                $('#mandaldiv').html(data);
                var mandalId = $('#mandal').val();
                 // alert(mandalId);
                getVillage(mandalId);
            }
        });
    }


    function getVillage(mandalId) {
      var id_modal = $('#modal_id').val();
        mandalId = mandalId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>/Administrator/location_search_ajax_phone_edit.php",
            data: {
                id_modal : id_modal,
                "parameter": mandalId,
                "method": "village_ajax",
            },
            cache: false,
            success: function (data) {
                $('#villagediv').html(data);
                // var village = $('#village').val();
            }
        });
    }


  $(document).ready(function(){


  if($('#state').val() != ''){
    var stateId = $('#state').val();
     getDistrict(stateId);
  }









  // if($('#district').val() != ''){
  //   var districtId = $('#district').val();
  //    getMandal(districtId);
  // }


  // if($('#mandal').val() != ''){
  //   var mandalId = $('#mandal').val();
  //    getVillage(mandalId);
  // }


});
</script>
<?php

require_once("config/dbconnection.php");
require_once("config/dbconfig.php");
$getsignle = new Dbcon;
$getsignle->is_session();
?>

<?php
if (isset($_POST["method"]) && $_POST["method"] == "state_ajax") {
    $countryid = intval($_POST['parameter']);
    $query = "SELECT state_id,state_name FROM state WHERE coun_id='$countryid'";
    $result = mysql_query($query);
    $check = mysql_affected_rows();
    if ($check > 0) {
        ?>
        <div id="statediv">
            <select class="selectClass" name="state" id="state"  onchange="getDistrict(this.value)" >
                <option selected="" value="">Select State</option>
                <?php while ($row = mysql_fetch_array($result)) { ?>
                    <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div id="statediv">
            <select class="selectClass" name="state" id="state"  >
                <option selected="" value="">Select State</option>
            </select>
        </div>
    <?php } ?>
<?php } ?>



<?php
if (isset($_POST["method"]) && $_POST["method"] == "district_ajax") {
    // echo "hi";exit;

    $stateId = $_POST['parameter'];
    $id_modal  = $_POST['id_modal'];

    $query = "SELECT dist_id,dist_name FROM district WHERE state_id='$stateId' ORDER BY `dist_name` ASC";
    // $query = "SELECT news_world_news.district, district.dist_name FROM news_world_news INNER JOIN district ON news_world_news.district = district.dist_id where news_world_news.id = '".$id_modal."' ";
    // echo $query ; exit;

    $result = mysql_query($query);
    $check = mysql_affected_rows();

    // print_r($check);
    if ($check > 0) {?>
          <?php 
           $dist= "SELECT news_world_news.district, district.dist_name FROM news_world_news INNER JOIN district ON news_world_news.district = district.dist_id where news_world_news.id = '".$id_modal."' ";
           // echo $dist ;exit;
           $dist_val= mysql_query($dist);
           $dist_res=mysql_fetch_array($dist_val);
           // print_r($dist_val);exit;
          ?>
        <div class="form-group districtdiv" id="districtdiv">
            <label for="district" id="field_label">Select District <span style="color:red;"></span></label>
            <select class="form-control selectClass district" name="district" id="district"  onchange="getMandal(this.value)" >
                <option selected="" value="">Select Districts</option>
                <?php while ($row = mysql_fetch_array($result)) {?>
                    <option value="<?php echo $row['dist_id']; ?>" <?php if($row['dist_id'] == $dist_res['district'] ){ echo "selected";} ?> ><?php echo $row['dist_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else {
     ?>
        <div  id="districtdiv">
            <label for="district" id="field_label">Select District <span style="color:red;"></span></label>
            <select class="form-control selectClass" name="district" id="district"  >
                <option selected="" value="">Select District</option>
            </select>
        </div>
    <?php } ?>
<?php } ?>


<?php
if (isset($_POST["method"]) && $_POST["method"] == "mandal_ajax") {
    $districtId = $_POST['parameter'];
    $id_modal  = $_POST['id_modal'];
    $query = "SELECT mandal_id,mandal_name FROM mandal WHERE dist_id='$districtId' ORDER BY `mandal_name` ASC";
    $result = mysql_query($query);
    $check = mysql_affected_rows();
    if ($check > 0) {
        ?>

          <?php 
           $mand= "SELECT news_world_news.mandal, mandal.mandal_name FROM news_world_news INNER JOIN mandal ON news_world_news.mandal = mandal.mandal_id where news_world_news.id = '".$id_modal."'  ";
           // echo $mand ;exit;
           $mand_val= mysql_query($mand);
           $mand_res=mysql_fetch_array($mand_val);
           // print_r($row);exit;
          ?>


        <div class="form-group mandaldiv" id="mandaldiv">
            <label for="mandal" id="field_label">Select Mandal <span style="color:red;"></span></label>
            <select class="form-control selectClass" name="mandal" id="mandal"  onchange="getVillage(this.value)" >
                <option selected="" value="">Select Mandal/Block</option>
                <?php while ($row = mysql_fetch_array($result)) { ?>
                    <option value="<?php echo $row['mandal_id']; ?>" <?php if($row['mandal_id'] == $mand_res['mandal'] ){ echo "selected";} ?>><?php echo $row['mandal_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div class="form-group mandaldiv" id="mandaldiv">
            <label for="mandal" id="field_label">Select Mandal <span style="color:red;"></span></label>
            <select class="form-control selectClass" name="mandal" id="mandal"  >
                <option selected="" value="">Select Mandal/Block</option>
            </select>
        </div>
    <?php } ?>
<?php } ?>


<?php
if (isset($_POST["method"]) && $_POST["method"] == "village_ajax") {
    $mandalId = $_POST['parameter'];
    $id_modal  = $_POST['id_modal'];
    $query = "SELECT villward_id,villward_name FROM villward WHERE mandal_id='$mandalId' ORDER BY `villward_name` ASC";
    // echo $query; exit;
    $result = mysql_query($query);
    // print_r($result);exit;
    $check = mysql_affected_rows();
    if ($check > 0) {
        ?>

          <?php 
           $village= "SELECT news_world_news.village, villward.villward_name FROM news_world_news INNER JOIN villward ON news_world_news.village = villward.villward_id where news_world_news.id = '".$id_modal."' ";
           // echo $village ;exit;
           $village_val= mysql_query($village);
           $village_res=mysql_fetch_array($village_val);
           // print_r($row);exit;
          ?>
        <div class="form-group villagediv" id="villagediv">
            <label for="village" id="field_label">Select Village <span style="color:red;"></span></label>
            <select class="form-control selectClass" name="village" id="village" >
                <option selected="" value="">Select Village</option>
                <?php while ($row = mysql_fetch_array($result)) { ?>
                    <option value="<?php echo $row['villward_id']; ?>" <?php if($row['villward_id'] == $village_res['village'] ){ echo "selected";} ?> ><?php echo $row['villward_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div class="form-control villagediv" id="villagediv">
            <label for="village" id="field_label">Select Village <span style="color:red;"></span></label>
            <select class="form-group selectClass" name="village" id="village"  >
                <option selected="" value="">Select Village</option>
            </select>
        </div>


    <?php } ?>
<?php } ?>



<script>
  $(document).ready(function(){
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
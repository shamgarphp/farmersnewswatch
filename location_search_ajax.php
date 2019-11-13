<?php

       require_once"conn.php";
?>



<?php
if (isset($_POST["method"]) && $_POST["method"] == "district_ajax") {
    // echo "hi";exit;
    $stateId = $_POST['parameter'];
    $query = "SELECT dist_id,dist_name FROM district WHERE state_id='$stateId' ORDER BY `dist_name` ASC";
    // print_r($query);exit;
    $result = mysqli_query($conn,$query);
    $check = mysqli_affected_rows($conn);

    // print_r($check);
    if ($check > 0) {
        ?>

        <div class="form-group districtdiv" id="districtdiv">
            <label for="district" id="field_label"><!-- Select District --> <span style="color:red;"></span></label>
            <select class="form-control selectClassed district" name="district" id="district"  onchange="getMandal(this.value)" >
                <option selected="" value="">District</option>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['dist_id']; ?>"><?php echo $row['dist_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div  id="districtdiv">
            <label for="district" id="field_label"><!-- Select District --> <span style="color:red;"></span></label>
            <select class="form-control selectClassed" name="district" id="district"  >
                <option selected="" value="">District</option>
            </select>
        </div>
    <?php } ?>
<?php } ?>


<?php
if (isset($_POST["method"]) && $_POST["method"] == "mandal_ajax") {
    $districtId = $_POST['parameter'];
    $query = "SELECT mandal_id,mandal_name FROM mandal WHERE dist_id='$districtId' ORDER BY `mandal_name` ASC";
    $result = mysqli_query($conn,$query);
    $check = mysqli_affected_rows($conn);
    if ($check > 0) {
        ?>
        <div class="form-group mandaldiv" id="mandaldiv">
            <label for="mandal" id="field_label"><!-- Select Mandal --> <span style="color:red;"></span></label>
            <select class="form-control selectClassed" name="mandal" id="mandal"  onchange="getVillage(this.value)" >
                <option selected="" value="">Mandal/Block</option>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['mandal_id']; ?>" ><?php echo $row['mandal_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div class="form-group mandaldiv" id="mandaldiv">
            <label for="mandal" id="field_label"><!-- Select Mandal --> <span style="color:red;"></span></label>
            <select class="selectClassed" name="mandal" id="mandal"  >
                <option selected="" value="">Mandal/Block</option>
            </select>
        </div>
    <?php } ?>
<?php } ?>


<?php
if (isset($_POST["method"]) && $_POST["method"] == "village_ajax") {
    $mandalId = $_POST['parameter'];
    $query = "SELECT villward_id,villward_name FROM villward WHERE mandal_id='$mandalId' ORDER BY `villward_name` ASC";
    $result = mysqli_query($conn,$query);
    $check = mysqli_affected_rows($conn);
    if ($check > 0) {
        ?>
        <div class="form-group villagediv" id="villagediv">
            <label for="village" id="field_label"><!-- Select Village --> <span style="color:red;"></span></label>
            <select class="form-control selectClassed" name="village" id="village" onchange="getAllLocations(this.value)">
                <option selected="" value="">Select Village</option>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['villward_id']; ?>"><?php echo $row['villward_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    <?php } else { ?>
        <div class="form-control villagediv" id="villagediv">
            <label for="village" id="field_label"><!-- Select Village --> <span style="color:red;"></span></label>
            <select class="form-group selectClassed" name="village" id="village"  >
                <option selected="" value="">Village</option>
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
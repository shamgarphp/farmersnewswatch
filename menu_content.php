<?php

require_once"conn.php";

?>
<!DOCTYPE html>
<!-- saved from url=(0025)https://krishijagran.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" labeng="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="assets/1.txt"></script>
<script type="text/javascript" src="assets/1(1).txt"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtoh=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <title>FarmerNewsWatch</title>
    <link rel="canonical" href="#">
    <?php
    require_once("header_n_menus.php");
    ?>
    <section class="home-section" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-md-9" >
                    <!--Corporate Cover-->

                        <div class="col-md-12">
                            <div class="col-md-2">
                            <h3 class="section-name" title="Corporate Cover">
                            <a href="javascript:void(0)" title="Corporate Cover">
                            <?php
                            echo(base64_decode($_GET['name']));
                            if(isset($_GET['data'])){
                            $categ  = base64_decode($_GET['data']);
                            }
                            ?>
                            <input type="hidden" id="cat_value" value="<?php echo $categ; ?>">
                            </a>
                            </h3>                                
                            </div>
                            <div class="col-md-10">
                            <?php 
                                $state_array = array();
                                $sql_services = mysqli_query($conn,"SELECT * FROM state");
                                while ($services = mysqli_fetch_assoc($sql_services)) {
                                    $state_array[] = $services;
                                }
                              ?>
                    <div class="col-md-12">
                        <div class="col-md-2 locatioin_filter">
                      <div class="form-group">
                        <label for="state" id="field_label"><!-- Select State --> <span style="color:red;"></span></label>
                        <select class="form-control selectClassed" id="state" name="state" onchange="getDistrict(this.value);">
                          <option value="">State </option> 
                            <?php foreach ($state_array as $key => $value) { ?>
                                <option  value="<?php echo $value['state_id']; ?>"><?php echo $value['state_name']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      </div>

                      <div class="col-md-2 locatioin_filter">
                      <div class="form-group districtdiv" id="districtdiv">
                        <label for="district" id="field_label"><!-- Select District --> <span style="color:red;"></span></label>
                        <select class="form-control selectClassed" id="district" name="district">
                          <option value=""> District </option>
                        </select>

                      </div>
                      </div>


                      <div class="col-md-2 locatioin_filter">
                      <div class="form-group mandaldiv" id="mandaldiv">
                        <label for="mandal" id="field_label"><!-- Select Mandal --> <span style="color:red;"></span></label>
                        <select class="form-control selectClassed" id="mandal" name="mandal">
                          <option value=""> Mandal </option>
                        </select>
                      </div>
                      </div>

                      <div class="col-md-2 locatioin_filter">
                      <div class="form-group villagediv" id="villagediv">
                        <label for="village" id="field_label"><!-- Select Village --> <span style="color:red;"></span></label>
                        <select class="form-control selectClassed" id="village" name="village">
                          <option value="">Village</option>
                        </select>
                      </div>
                      </div> 

                      <div class="col-md-2 locatioin_filter">
                        <label for="village" id="field_label"><!-- Select Village --> <span style="color:red;"></span></label>
                        <p>
                            <button type="button" class="btn btn-default">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </p> 
                      </div> 

                      </div>
                            </div>
                        </div>
                    <div class="row" id="citydata">

                        <?php

                        $qry=mysqli_query($conn,"select * from news_world_news where category='".$categ."' and status='1' order by id desc ");
                        // print_r("select * from news_world_news where category='".$categ."' and status='1' and cityid='".$city."' order by id desc ");
                        while($row=mysqli_fetch_array($qry))
                        {    
                        if($row['category']=="Magazines")
                        {
                            ?>
                                <div class="col-md-6">
                                    <div class="home-news-block">
                                        <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['name']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                                            <figure>
                                                <img class="lazy"  src="Administrator/News_Uploads/Worldnews/<?php echo($row['file_content_pdf']); ?>">
                                            </figure>
                                        </a>
                                        <h4 title="<?php echo($row['news_title']); ?>">
                                            <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['name']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                                            <?php echo($row['news_title']); ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                        <?php  
                            
                        }
                        else
                        {
                        ?>

                        <div class="col-md-6">
                            <div class="home-news-block">
                                <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['name']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                                    <figure>
                                        <img class="lazy"  src="Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>">
                                    </figure>
                                </a>
                                <h4 title="<?php echo($row['news_title']); ?>">
                                    <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['name']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                                    <?php echo($row['news_title']); ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <?php
                        }

                            }
                        ?>  
                        </div>
                                            <!--Corporate Cover Ends Here-->
                    <!-- Interviews Comes Here -->
                    <!-- Interviews Ends Here-->
<!--  <div class="form-group input-lg" >
    <label for="exampleInputEmail1" class="text-primary">Comments on posts</label>
    <input type="text" class="form-control input-lg" id="comment" name="comment" >
 </div> -->
                </div>
                <div class="col-md-3" >
                <!--
                    <div class="ad ad-max-250">
                        <script async="" src="assets/f(11).txt"></script>
                        
                        <ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 250px;" data-ad-client="ca-pub-3463764223457257" data-ad-slot="5164099219" data-adsbygoogle-status="done"><ins id="aswift_3_expand" style="display:inline-table;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;"><ins id="aswift_3_anchor" style="display:block;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;"><iframe width="300" height="250" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_3" name="aswift_3" style="left:0;position:absolute;top:0;border:0px;width:300px;height:250px;" src="assets/saved_resource(5).html"></iframe></ins></ins></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div> 


                    <div class="clearfix"></div>-->
                        <?php
                            $qryp=mysqli_query($conn,"select * from  promotions order by priority asc,id desc ");
                            while($row_p=mysqli_fetch_array($qryp))
                            {
                            ?>          
                            <div class="ad">
                            <a href="<?php echo($row_p['url']); ?>"  target="_blank">
                            <img src="Administrator/Admin_Promotions/<?php echo($row_p['file_content']); ?>"  >
                            </a>
                            </div>
                            <div class="clearfix"></div>
                            <?php
                            }
                            ?>
    <!--
                    <div class="ad">
                        <a href="http://agromosreg.ru/eng/" rel="noopener noreferrer nofollow" target="_blank" title="V INTERNATIONAL AGRICULTURAL DAIRY FORUM">
                            <img src="assets/1_krishi_jagran_300x250_2.gif" alt="V INTERNATIONAL AGRICULTURAL DAIRY FORUM">
                        </a>
                    </div>-->

                </div>
            </div>
        </div>
    </section>
</section> 
<?php
require_once("footer.php");
?>


<script>
    function getDistrict(stateId) {
         //alert('hi');
        stateId = stateId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>location_search_ajax.php",
            data: {
                "parameter": stateId,
                "method": "district_ajax",
            },
            cache: false,
            success: function (data) {
               
                $('#districtdiv').html(data);
                getAllLocations();
            }
        });
    }
    function getMandal(districtId) {
        districtId = districtId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>location_search_ajax.php",
            data: {
                "parameter": districtId,
                "method": "mandal_ajax",
            },
            cache: false,
            success: function (data) {
                 // alert(data);
                $('#mandaldiv').html(data);
                getAllLocations();
            }
        });
    }
    function getVillage(mandalId) {
        // alert('hi');
        mandalId = mandalId.split(',')[0];
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "<?php echo $site_url ?>location_search_ajax.php",
            data: {
                "parameter": mandalId,
                "method": "village_ajax",
            },
            cache: false,
            success: function (data) {
            //   alert(data);
                $('#villagediv').html(data);
                getAllLocations();
            }
        });
    }
</script>


<script type="text/javascript">
function getAllLocations(){
    var stateid = $('#state').val();
    var districtid = $('#district').val();
    var mandalid = $('#mandal').val();
    var villageid = $('#village').val();
    var category_name = $('#cat_value').val();

    // alert(villageid);
   
    if(stateid != '' && category_name != '')
    {
           $.ajax({ 
            url:"get_citydata.php",
            type:"POST",
            data:{stateid:stateid,category_name:category_name,districtid:districtid,mandalid:mandalid,villageid:villageid},
            success:function(data)
            {
                 if(data)
                 {
                  // alert(data);
                     $('#citydata').html(data);
                 }
                 else
                 {
                    $('#citydata').html("No data Found");
                 } 
            }
           });

    }       else
      {
           alert('failed');
      }   
    }

</script>
 
<!--  <script type="text/javascript">
 $('#cityid').on('change', function(event){

  event.preventDefault();
  // alert('hi');

      var cityid = $('#cityid').val();
      var category_name = $('#cat_value').val();
      
      if(cityid != '' && category_name != '')
      {
           // alert('yyyyy'); 

           $.ajax({ 
            url:"get_citydata.php",
            type:"POST",
            data:{cityid:cityid,category_name:category_name},
            success:function(data)
            {
                  // alert(data); 
                  // console.log(data);
                 if(data)
                 {
                     $('#citydata').html(data);
                 }
                 else
                 {
                    $('#citydata').html("No data Found");
                 } 
            }
           });
           
      }
      else
      {
           alert('failed');
           // $('#action_alert').html('<p>Please Add atleast one data</p>');
           // $('#action_alert').dialog('open');
      }
 });
</script> --> 

</body> 
 </html>
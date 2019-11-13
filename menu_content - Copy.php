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
    <title>FarmerWatch</title>
    <link rel="canonical" href="#">
    <?php
    require_once("header_n_menus.php");
    ?>
    <section class="home-section" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-md-9" >
                    <!--Corporate Cover-->
                    <div class="row" id="citydata">
                        <div class="col-md-12">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="search-box" id="city_details">
                                    <form name="frmSearch" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <p><select class="demoInputBox" id="city_id" name="city_id">
                                            <option value=""> --Choose City-- </option>
                                                <?php
                                                //Do the query
                                                $query = "SELECT * FROM city order by name asc";
                                                $result = mysql_query($query);
                                                //iterate over all the rows
                                                while($row = mysql_fetch_assoc($result)){ ?>  
                                                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                                                     <?php } ?>
                                        </select>
                                        <!-- <input type="hidden" name="category" id="category" value="base64_decode($_GET['data'])"> -->
                                        <input type="submit" name="go" id="submit" class="btnSearch" value="Search"></p>
                                        </form>
                                </div>   
                            </div>
                        </div>
                        <?php

                        $qry=mysql_query("select * from news_world_news where category='".$categ."' and status='1' order by id desc ");
                        // print_r("select * from news_world_news where category='".$categ."' and status='1' and cityid='".$city."' order by id desc ");
                        while($row=mysql_fetch_array($qry))
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
                        elseif($row['category'] == "agri_horti_officers")
                        {
                        ?>
    
                        <div class="col-md-6">
                            <div class="home-news-block">
                                <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['name']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>">
                                </a>
                                <p title="<?php echo($row['name']); ?>">
                                    <b> Name :  </b><?php echo($row['name']); ?></p>
                                
                                <p title="<?php echo($row['number']); ?>">
                                    <b> Number :  </b><?php echo($row['number']); ?></p>
<!--                                 <p title="<?php echo($row['cityid']); ?>">
                                    <b> City :  </b><?php echo($row['cityid']); ?></p> -->
                            </div><br><br>
                        </div>

                        <?php
                        }
                        elseif($row['category'] == "police_officers")
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
                        elseif($row['category'] == "revenue_officers")
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
                        elseif($row['category'] == "press_journalists")
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
                        elseif($row['category'] == "political_leaders")
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
                            $qryp=mysql_query("select * from  promotions order by priority asc,id desc ");
                            while($row_p=mysql_fetch_array($qryp))
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

 <script type="text/javascript">
   

 $('#city_id').on('change', function(event){

  event.preventDefault();
  alert('hi');

      var city_id = $('#city_id').val();
      var category_name = $('#cat_value').val();
      
      if(city_id != '' && category_name != '')
      {
          alert('yyyyy'); 

           $.ajax({ 
            url:"get_citydata.php",
            type:"POST",
            data:{city_id:city_id,category_name:category_name},
            success:function(data)
            {
                  alert(data);
                 // console.log(data);
                 // if(data)
                 // {
                 //     $('#citydata').html(data);
                 // }
                 // else
                 // {
                 //    $('#citydata').html("No data Found");
                 // }
                
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







</script> 





</body> 
 </html>
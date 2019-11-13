<?php
require_once"conn.php";

session_start();

// print_r($_SESSION);


?>

<!DOCTYPE html>
<!-- saved from url=(0025)https://krishijagran.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" labeng="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="assets/1.txt"></script>
<script type="text/javascript" src="assets/1(1).txt"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtoh=device-width, initial-scale=1">
    <title>FarmerNewsWatch</title>
    <link rel="canonical" href="#">
    <?php
	require_once("header_n_menus.php");
	?>
<section id="main">
    <section class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-9 " style="border:0px solid red; padding-top: 0%;">
                <div class="home-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2745px, 0px, 0px); transition: all 0.25s ease 0s; width: 5033px;">
                    <?php
                    	$qry=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and status='1' order by id desc limit 0,8 ");
                    	while($row=mysql_fetch_array($qry))
                    	{
                    		$category=str_replace("_"," ",$row['category']);
                    		 // echo($row['file_content']."<br/>");
                    	?>
                    <div class="owl-item" style="width: 457.5px;height:340px;"><div>
                                <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                                    <img src="Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>" style="width:100%;height:100%;" alt="<?php echo($row['news_title']); ?>">
                                    <div class="flex-caption l-burn">
                                        <h3>
                    					<?php echo($row['news_title']); ?>
                    					</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    		<?php
                    	}
                    	?>
                		</div>
                    </div>
                		<!--<div class="owl-nav disabled">
                		<button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                		<button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                		</div>
                		<div class="owl-dots"><button role="button" class="owl-dot"><span></span></button>
                		<button role="button" class="owl-dot"><span></span></button>
                		<button role="button" class="owl-dot"><span></span></button>
                		<button role="button" class="owl-dot active"><span></span></button>
                		<button role="button" class="owl-dot"><span></span></button></div>
                		-->
                		</div>
                </div>
				<!-- Top news    -->
               <!--  <div class="col-sm-6 col-md-4 col-lg-4 home-news-feed" style="border:0px solid red;">
                    <table data-id="0">
                        <tbody>
                            <?php
                        		$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and status='1' order by id desc limit 0,4 ");
                                while($rowa=mysql_fetch_array($qrya))
                        	       {
                        		      $category=str_replace("_"," ",$rowa['category']);
                        	
                        			 ?>
                        			 <tr>
                                        <td width="25%">
                                            <img src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>" alt="<?php echo($rowa['news_title']); ?>">
                                        </td>
                                        <td>
                                            <h3 title="<?php echo($rowa['news_title']); ?>">
                                                <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>"><?php echo($rowa['news_title']); ?></a>
                                            </h3>
                                        </td>
                                    </tr>
                                    <?php
                                    	}
                                    	?>
                                     <tr>
                                        <td colspan="2" class="text-center">
                                        <div class="more-news-btn-wrap">
                                            <a href="menu_content.php?News-Latest-Stories&data=<?php echo(base64_encode("Latest_News")); ?>&name=<?php echo(base64_encode("Latest Stories")); ?>" class="btn-more-news">More news <i class="fa fa-arrow-right"></i> </a>
                                        </div>
                                    </td>
                                </tr> 
                        </tbody>
                    </table>
                </div> -->
                <div class="col-md-3" style="border:0px solid green;">
                   <?php
                	   $qryp=mysql_query("select * from  promotions order by priority asc,id desc ");
                	   if($row_p=mysql_fetch_array($qryp))
                	{
	                   ?>
                    <div class="ad">
                       <a href="<?php echo($row_p['url']); ?>"  target="_blank">
                        <img src="Administrator/Admin_Promotions/<?php echo($row_p['file_content']); ?>" style="width: 100%; height: 330px !important;" >
                        </a>
                    </div>
					<?php
                	}
                	?>
                </div>
            </div>
        </div>
    </section>
    <!-- Agriculture World -->
    <section class="home-section" style="border:0px solid blue;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    <h3 class="section-name" title="Agriculture World">
        <a href="menu_content.php?News-Agriculture-World&data=<?php echo(base64_encode("Agri_World")); ?>&name=<?php echo(base64_encode("Agriculture World")); ?>" title="Agriculture World">Agriculture World </a>
    </h3>
</div>
            <?php
				$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Agri_World' and status='1' order by id desc limit 0,4 ");
            	while($rowa=mysql_fetch_array($qrya))
            	{
		          $category=str_replace("_"," ",$rowa['category']);
		      ?>
        <div class="col-md-3">
            <div class="home-news-block">
                <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                    <figure>
                        <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                    </figure>
                </a>
                <h4 title="<?php echo($rowa['news_title']); ?>">
                    <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                    <?php echo($rowa['news_title']); ?>
                    </a></h4>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>


    <section class="home-section" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!--Corporate Cover-->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-name" title="Corporate Cover">
                                <a href="menu_content.php?News-Industry&data=<?php echo(base64_encode("Industry_News")); ?>&name=<?php echo(base64_encode("Industry News")); ?>" title="Industry News">Industry News</a>
                            </h3>
                        </div>
                <?php
				    $qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Industry_News' and status='1' order by id desc limit 0,3 ");
	               while($rowa=mysql_fetch_array($qrya))
	               {
		              $category=str_replace("_"," ",$rowa['category']);
		        ?>
                <div class="col-md-4">
                    <div class="home-news-block">
                        <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                            <figure>
                                <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                            </figure>
                        </a>
                        <h4 title="<?php echo($rowa['news_title']); ?>">
                            <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                            <?php echo($rowa['news_title']); ?>
                            </a>
                        </h4>
                    </div>
                </div>
		      <?php
	               }
	           ?>
            </div>
                    <!--Corporate Cover Ends Here-->
                    <!-- Interviews Comes Here -->
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-name" title="Interviews">
                        <a href="menu_content.php?Interrviews&data=<?php echo(base64_encode("Interviews")); ?>&name=<?php echo(base64_encode("Interviews")); ?>" title="Interviews">Interviews</a>
                    </h3>
                </div>	 
            <?php
				$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Interviews' and status='1' order by id desc limit 0,3 ");
            	while($rowa=mysql_fetch_array($qrya))
            	{
            		
            		$category=str_replace("_"," ",$rowa['category']);
            		?>
                    <div class="col-md-4">
                        <div class="home-news-block">
                            <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                                <figure>
                                    <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                                </figure>
                            </a>
                            <h4 title="<?php echo($rowa['news_title']); ?>">
                                <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                                <?php echo($rowa['news_title']); ?>
                                </a>
                            </h4>
                        </div>
                    </div>
            		<?php
            	       }
            	   ?>
            </div>
                    <!-- Interviews Ends Here-->
                </div>
                <div class="col-md-3">
                   <?php
	                   $qryp=mysql_query("select * from  promotions order by priority desc,id desc ");
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
                </div>
            </div>
        </div>
    </section>
    <!-- Health & LifeStyle -->
    <section class="home-section" style="border:0px solid blue;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <h3 class="section-name" title="Health & LifeStyle">
                <a href="menu_content.php?News-Agriculture-World&data=<?php echo(base64_encode("Health_and_Life_Style")); ?>&name=<?php echo(base64_encode("Health and Lifestyle")); ?>" title="Agriculture World">Farmers Club</a> </a>
            </h3>
        </div>
        <?php
			$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Health_and_Life_Style' and status='1' order by id desc limit 0,4 ");
        	while($rowa=mysql_fetch_array($qrya))
        	{
        		$category=str_replace("_"," ",$rowa['category']);
        		?>
                <div class="col-md-3">
                    <div class="home-news-block">
                        <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                            <figure>
                                <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                            </figure>
                        </a>
                        <h4 title="<?php echo($rowa['news_title']); ?>">
                            <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                            <?php echo($rowa['news_title']); ?>
                            </a>
                        </h4>
                    </div>
                </div>
        		<?php
        	}
        	?>
            </div>
        </div>
    </section>
    <!-- Agripedia -->
    <section class="home-section" style="border:0px solid blue;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h3 class="section-name" title="Agripedia">
                    <a href="menu_content.php?News-Agriculture-World&data=<?php echo(base64_encode("Agripedia")); ?>&name=<?php echo(base64_encode("Cooperative Society")); ?>" title="Agripedia">Cooperative Society </a>
                </h3>
            </div>
        <?php
				$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Agripedia' and status='1' order by id desc limit 0,4 ");
        	   while($rowa=mysql_fetch_array($qrya))
        	{
        		
        		$category=str_replace("_"," ",$rowa['category']);
        		?>
                <div class="col-md-3">
                    <div class="home-news-block">
                        <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                            <figure>
                                <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                            </figure>
                        </a>
                        <h4 title="<?php echo($rowa['news_title']); ?>">
                            <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                            <?php echo($rowa['news_title']); ?>
                            </a>
                        </h4>
                    </div>
                </div>
        		<?php
        	       }
        	   ?>
            </div>
        </div>
    </section>
    <!-- Success Stories -->
    <section class="home-section" style="border:0px solid blue;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <h3 class="section-name" title="Agripedia">
                <a href="menu_content.php?Success-Stories&data=<?php echo(base64_encode("Success_Stories")); ?>&name=<?php echo(base64_encode("Success Stories")); ?>" title="Success Stories">Success Stories </a>
            </h3>
        </div>
        <?php
				$qrya=mysql_query("select * from news_world_news where file_content!='' and category!='Magazines' and category='Success_Stories' and status='1' order by id desc limit 0,4 ");
        	while($rowa=mysql_fetch_array($qrya))
        	{
        		
        		$category=str_replace("_"," ",$rowa['category']);
        		
        		
        		?>
                <div class="col-md-3">
                    <div class="home-news-block">
                        <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa["news_title"]); ?>">
                            <figure>
                                <img class="lazy"   src="Administrator/News_Uploads/Worldnews/<?php echo($rowa['file_content']); ?>">
                            </figure>
                        </a>
                        <h4 title="<?php echo($rowa['news_title']); ?>">
                            <a href="content_data.php?id=<?php echo(base64_encode($rowa['id'])); ?>&category=<?php echo(base64_encode($category)); ?>&date_time=<?php echo($rowa['created_date']." ".$rowa['created_time']); ?>&title=<?php echo(base64_encode($rowa['news_title'])); ?>" title="<?php echo($rowa['news_title']); ?>">
                            <?php echo($rowa['news_title']); ?>
                            </a>
                        </h4>
                    </div>
                </div>
        		<?php
        	}
        	?>
            </div>
        </div>
    </section>
</section> 	

<?php
require_once("footer.php");
?>
</body> 
 </html>
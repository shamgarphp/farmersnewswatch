<?php
require_once"conn.php";
?>
<!DOCTYPE html>
<head>
<!-- saved from url=(0025)https://krishijagran.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" labeng="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="assets/1.txt"></script>
<script type="text/javascript" src="assets/1(1).txt"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtoh=device-width, initial-scale=1">
    <title>FarmerWatch</title>
    <link rel="canonical" href="#">

    <!-- flip-book css -->
	<!-- <link rel="stylesheet" type="text/css" href="min_version/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="min_version/ipages.min.css"> -->
	<!-- /end css -->


	</head>
    <body>
    <?php
	require_once("header_n_menus.php");
	?>
    <section class="home-section" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!--Corporate Cover-->
                    <div class="row">
    <div class="col-md-12">
	
	 <div class="story-head" style="border:0px solid red;margin-top:20px;">
        <a href="/health-lifestyle/" title="Health &amp; Lifestyle" class="story-section-name"><?php
			
			echo(base64_decode($_GET['category']));
			?></a>
		</div>
	
        <h3 class="section-name" title="Corporate Cover" style="border:0px solid red;padding:0px;margin-top:-20px;">
            <a href="javascript:void(0)" >
			<?php
			
			echo(base64_decode($_GET['title']));
			
			?>
			
			</a>
        </h3>
		<p>
		
		<?php
			
			echo($_GET['date_time']);
			
			?>
		
		</p>
    </div>

	<?php
	$category="";
	$qry=mysqli_query($conn,"select * from  news_world_news where id='".base64_decode($_GET['id'])."' and status='1' ");
	if($row=mysqli_fetch_array($qry))
	{
		$category=$row['category'];
		
		if($category=="Magazines")
		{
			?>
			
			 <div class="col-md-12"> 
                    <a href="javascript:void(0)" title="<?php echo($row['news_title']); ?>">
			            <figure>   
							<div class="col-sm-12" style="border:0px solid red;margin-top:10px;padding:0px;height:600px;">
<!-- 								<iframe src="http://flowpaper.com/flipbook/http://farmerwatcher.farmersnewswatch.com/Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>" height="100%" width="100%"></iframe>  -->
								<iframe src="http://flowpaper.com/flipbook/http://www.farmersnewswatch.com//Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>" height="100%" width="100%"></iframe> 
							
								<!-- flipbook markup -->
								<!-- <div class="ipgs-flipbook" src="Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>" height="100%" width="100%"></div> -->
								<!-- /end flipbook markup -->
							</div>
						</figure>
                    </a>
					<div class="col-sm-12" style="border:0px solid red;margin-top:10px;padding:0px;">
						<?php
						echo($row['content']);
						?>					
					</div>
            </div>
			
			
			<?php
		}
		else
		{
	?>
            <div class="col-md-12"> 
                    <a href="javascript:void(0)" title="<?php echo($row['news_title']); ?>">
                        <figure>
                            <img class="lazy" style="width:100%;height:200px;"  src="Administrator/News_Uploads/Worldnews/<?php echo($row['file_content']); ?>">
                        </figure>
                    </a>
                  
					<div class="col-sm-12" style="border:0px solid red;margin-top:10px;padding:0px;">
					
<?php


echo($row['content']);



?>					
					</div>
					 
            </div>
       <?php
	   
		}
	   
	   
	}
	?>
        

</div>
                    <!--Corporate Cover Ends Here-->
                    <!-- Interviews Comes Here -->
                   
<br><br>

<div id="disqus_thread"></div>


<!-- 					<div class="panel panel-default">
					<div class="panel-heading">Submit Your Comments</div>
					  <div class="panel-body">
					  	<form method="post" action="#">
					  	  <div class="form-group">
						    <label for="exampleInputEmail1">Name</label>
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Subject</label>
						    <textarea name="subject" class="form-control" rows="3"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
					  </div>
					</div> -->
 
                    <!-- Interviews Ends Here-->

                </div>
                <div class="col-md-3" >
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

                </div>
            </div>
        </div>
    </section>

	
	
	    <section class="home-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
    <h3 class="section-name" title="Product Launch">
        <a href="javascript:void(0)" title="Product Launch">Read Next</a>
    </h3>
</div>


<?php
 
	$qry=mysql_query("select * from news_world_news where category='".$category."' order by id desc limit 0,6");
	while($row=mysql_fetch_array($qry))
	{
		 $category=$row['category'];
		$name_name="";
		if($category=="Magazines")
		{
			$name_name=$row['file_content_pdf'];
		}
		else
		{
			$name_name=$row['file_content'];
		}
	
	?>


        <div class="col-md-3">
            <div class="home-news-block wide">
                <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['category']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                    <figure>
                        <img class="lazy" src="Administrator/News_Uploads/Worldnews/<?php echo($name_name); ?>">
                    </figure>
                </a>
                <h4 title="<?php echo($row['news_title']); ?>">
                    <a href="content_data.php?id=<?php echo(base64_encode($row['id'])); ?>&category=<?php echo($_GET['category']); ?>&date_time=<?php echo($row['created_date']." ".$row['created_time']); ?>&title=<?php echo(base64_encode($row['news_title'])); ?>" title="<?php echo($row['news_title']); ?>">
                   <?php echo($row['news_title']); ?>
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

<!-- scripts-section -->
<!-- <script type="text/javascript" src="min_version/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="min_version/pdf.min.js"></script> -->
<!-- <script type="text/javascript" src="min_version/jquery.ipages.min.js"></script> -->
<!-- /end scripts-section -->

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-farmerwatcher-farmersnewswatch-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</body> 
 </html>
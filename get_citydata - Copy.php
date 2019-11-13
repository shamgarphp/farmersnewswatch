 <?php
 print_r("ddsd");exit;
       $cityid = $_POST['city_id'];
       $category_name = $_POST['category_name'];

      if(isset($cityid,$category_name) && !empty($cityid) && !empty($category_name) )
      {
        // echo "hi";
        // $qry=mysql_query("select * from news_world_news where category='".$category_name."' and cityid='".$cityid."'  status='1' order by id desc ");
        $qry=mysql_query("SELECT * FROM `news_world_news` WHERE `category`='Health_and_Life_Style' and `cityid` = 1 and `status` = 1 order by id desc ");
       
     
        $row=mysql_fetch_array($qry);
        print_r($row);
          
 
        while($row=mysql_fetch_array($qry))
        { 


            if(isset($row) )
            {
               //
                
              $data ='<div class="col-md-6">
                    <div class="home-news-block">
                        <a href="content_data.php?id=<?php echo(base64_encode('.$row['id'].')); ?>&category=<?php echo('.$_GET['name'].'); ?>&date_time=<?php echo('.$row['created_date'].'" "'.$row['created_time'].'); ?>&title=<?php echo(base64_encode('.$row['news_title'].')); ?>" title="<?php echo('.$row['news_title'].'); ?>">
                            <figure>
                                <img class="lazy"  src="Administrator/News_Uploads/Worldnews/<?php echo('.$row['file_content'].'); ?>">
                            </figure>
                        </a>
                        <h4 title="<?php echo('.$row['news_title'].'); ?>">
                            <a href="content_data.php?id=<?php echo(base64_encode('.$row['id'].')); ?>&category=<?php echo('.$_GET['name'].'; ?>&date_time=<?php echo('.$row['created_date'].'" "'.$row['created_time'].'); ?>&title=<?php echo(base64_encode('.$row['news_title'].')); ?>" title="<?php echo('.$row['news_title'].'); ?>">
                            <?php echo('.$row['news_title'].'); ?>
                            </a>
                        </h4>
                    </div>
                </div>';





           } ?>

<?php  }  echo $data;  } ?>
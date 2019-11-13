 <?php
        require_once"conn.php";

       $stateid = $_POST['stateid'];
       $districtid = $_POST['districtid'];
       $mandalid = $_POST['mandalid'];
       $villageid = $_POST['villageid'];
       // echo $mandalid;exit;

       $category_name = $_POST['category_name'];
       // echo $category_name;exit;
      if(isset($stateid,$category_name) && !empty($stateid) && !empty($category_name))
      {
         // print_r($stateid);exit; 
         // $qry=mysql_query("select * from news_world_news where category='".$category_name."' and stateid='".$stateid."'  status='1' order by id desc ");
        // $query = ""

        $sql = "";



         if(isset($stateid) &&  $stateid != "")
        {    
          $sql .= " AND `state` =". $stateid; 
        }
         if(isset($districtid) &&  $districtid != "")
        {    
          $sql .= " AND `district` =". $districtid; 
        }

         if(isset($mandalid) &&  $mandalid != "")
        {    
          $sql .= " AND `mandal` =". $mandalid; 
        }

         if(isset($villageid) &&  $villageid != "" )
        {    
          $sql .= " AND `village` =". $villageid; 
        }

        if(isset($stateid) &&  $stateid != "" && isset($districtid) &&  $districtid != "" && isset($mandalid) &&  $mandalid != "" && isset($villageid) &&  $villageid != ""){
        // $result = "SELECT * FROM `news_world_news` WHERE `category`='".$category_name."' ".$sql." and `status` = 1 order by id desc";
        // echo $result;exit;
        

        
         $qry=mysqli_query($conn,"SELECT * FROM `news_world_news` WHERE `category`='".$category_name."' ".$sql." and `status` = 1 order by id desc");
         // echo $qry;exit;

        while($row=mysqli_fetch_array($qry)){
        

         // print_r($row);exit;
          if (isset($row) && !empty($row)) {
            $post_id = base64_encode($row['id']);
            $news_title = base64_encode($row['news_title']);
            // $heading = base64_decode($_GET['name']);
            // echo $heading;exit;

              $data ='<div class="col-md-6">
                    <div class="home-news-block">
                        <a href="content_data.php?id='.$post_id.'&category='.$row['category'].'&date_time='.$row['created_date'].'" "'.$row['created_time'].'&title='.$news_title.' title="'.$row['news_title'].'">
                            <figure>
                                <img class="lazy"  src="/Administrator/News_Uploads/Worldnews/'.$row['file_content'].' ">
                            </figure>
                        </a>
                        <h4 title="'.$row['news_title'].'">
                            <a href="content_data.php?id='.$post_id.'&category='.$row['category'].'&date_time='.$row['created_date'].'" "'.$row['created_time'].'&title='.$news_title.' title="<"'.$row['news_title'].'">
                            '.$row['news_title'].'
                            </a>
                        </h4>
                    </div>
                </div>';
          }

              if($row>0)
          {
                      echo $data;
          }            
          ?>

          <?php }
          // echo $data;
          }
          } ?>
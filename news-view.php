<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/news-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                
                <?php
                    $news_id = $_GET["id"];
                    if($news_id == "" || $news_id == NULL){
                        header("Location: news.php");
                    }
                    else{
                        $sql = "SELECT * FROM amd_news where news_id=".$news_id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                <h4>'.$row["news_title"].'</h4>
                                <h6>Posted on '.$row["news_date"].'</h6>
                                <div><img class="img-responsive detail-img" src="img/news/'.$row["news_image"].'" /></div>
                                <div>'.$row["news_desc"].'</div>';
                                if($row["news_source"] != "" || $row["news_source"] != NULL){
                                    echo '<div>Source: <a href="'.$row["news_source"].'" target="_blank">'.$row["news_source"].'</a></div>';
                                }
                            }
                        } 
                        else {
                            header("Location: news.php");
                        }
                    }
                ?>
                
                

                

            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
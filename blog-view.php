<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/blog-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                
                <?php
                    $blog_id = $_GET["id"];
                    $sql = "SELECT * FROM amd_blog where blog_id=".$blog_id;
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <h4>'.$row["blog_title"].'</h4>
                            <h6>Posted on '.$row["blog_date"].' in '.$row["blog_category"].' by admin</h6>
                            <div><img class="img-responsive detail-img" src="img/blog/'.$row["blog_image"].'" /></div>
                            <div>'.$row["blog_desc"].'</div>';
                        }
                    } 
                    else {
                        echo "Blogs coming soon";
                    }
                ?>
                
                

                

            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
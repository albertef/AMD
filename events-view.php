<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/news-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                
                <?php
                    $event_id = $_GET["id"];
                    if($event_id == "" || $event_id == NULL){
                        header("Location: events.php");
                    }
                    else{
                        $sql = "SELECT * FROM amd_events where event_id=".$event_id;
                        $result = mysqli_query($conn, $sql);
                        $sql1 = "SELECT * FROM amd_gallery where event_id=".$event_id;
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                <h4>'.$row["event_title"].'</h4>
                                <h6>Posted on '.$row["event_date"].'</h6>
                                <div><img class="img-responsive detail-img" src="img/events/'.$row["event_image"].'" /></div>
                                <div>'.$row["event_desc"].'</div>';
                            }
                        } 
                        else {
                            header("Location: events.php");
                        }

                        if (mysqli_num_rows($result1) > 0) {
                            echo '
                                <h4>EVENT GALLERY</h4>
                                <div id="gallery" style="display:none;">';
                                while($row1 = mysqli_fetch_assoc($result1)) {
                                    echo '
                                        <img alt="'.$row1["gallery_desc"].'" src="img/gallery/'.$row1["gallery_image"].'" data-image="img/gallery/'.$row1["gallery_image"].'" data-description="'.$row1["gallery_desc"].'">';          
                                }
                            echo '</div>';
                        } 
                    }
                ?>
               
            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
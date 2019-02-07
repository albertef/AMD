<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/campus-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-offset-1 col-lg-6 no-padding">
                <h4>THE CREATIVE HUB</h4>
                <P>Great commitment and effort has been put into designing our academic curriculums and have been backed up by our well equipped labs, to prepare and nurture students for a better learning experience. </P>

                <div class="owl-carousel owl-campus-inner" id="owl-campus-inner">
                    <?php
                        $sql = "SELECT * FROM amd_campus";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <div class="campus-item">
                                        <img class="img-responsive" src="img/campus/inner/'. $row["campus_image"] .'">
                                        <p>'.$row["campus_caption"].'</p>
                                    </div>';
                                }
                            } 
                            else {
                                echo "Campus page is coming soon!";
                            }
                    ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 no-padding">
                <div class="inner-right-bar">
                    <div class="campus-list">
                        <h5>AMENITIES AVAILABLE ON CAMPUS</h5>
                        <ul>
                            <li>Dedicated studios </li>
                            <li>Equipment for animation, video and photography </li>
                            <li>Photography studio </li>
                            <li>Shooting for VFX </li>
                            <li>Library and Digital library </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ("includes/footer.php"); ?>
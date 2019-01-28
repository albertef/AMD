<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/placements-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-offset-1 col-lg-6 no-padding">
                <h4>Placement Assistance</h4>
                <P>When all's done, walk out of the academy as a proud AMD graduate certified by Adobe and an employed artist.</P>

                
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 no-padding">
                <div class="placement-logos">
                    <?php
                        $sql = "SELECT * FROM amd_placements WHERE placements_status=1";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<img class="img-responsive" src="img/placements/'. $row["placements_image"] .'">';
                            }
                        } 
                        else {
                            echo "Placements page is coming soon!";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php include ("includes/footer.php"); ?>
<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/placements-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-offset-1 col-lg-6 no-padding">
                <h4>PLACEMENTS </h4>
                <P>With our placement program we envision to become the best talent provider for the creative industry. The program gives students a pre-placement training provision, which Is designed to work hand-in-hand with employers. </P>
                <P>We approach and understand the real-time industry requirements as specified by the employers. With the help of these specifications and requirements, we prepare students with the right skills essential for the position required by them, thereby creating 'Ready to Work Professionals'. </P>
                <P>We have already signed up with a couple of companies to organise Recruitment Drives for vacancies, within our campus. </P>
                <P>When all's done, our students get to walk out of the academy as a proud AMD graduate, certified by Adobe and Media and Entertainment Skills Council, and an employed creative professional. </P>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 no-padding">
                <div class="inner-right-bar">
                    <div class="course-image placements"><img src="img/placements/side-image.png"/></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 no-padding hide">
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
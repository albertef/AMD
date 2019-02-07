<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/powerhouse-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>THE AMD POWERHOUSE </h4>
                <P>Sometimes it really helps to have someone around who already knows the turf. Our students will be supported by our Advisory Board, consisting of experts who have proven their mettle in the creative industry. This team, a set of select experts, are professionals who have bagged international awards including the Cannes, VFX experts who have worked in major Hollywood titles including Oscar award-winning movies, animation experts with international exposure who have worked in big brands: both national and international, talented artists who have won international scholarships, NID alumni, and more. </P>

                <P>Their skills and expertise have been used to curate our academic curriculum and are here to advise the students about everything. Right from inspiring them, making sure they get the right skills, experience and knowledge, to preparing them for interviews, they'll be guided by our Advisory Board. Through the boards network of contacts with companies and artists, students will gain valuable industry insight as well.</P>

                <div class="powerhouse-list">

                            <?php
                                $sql = "SELECT * FROM amd_powerhouse WHERE powerhouse_status=1";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                        <div class="powerhouse-list-item">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding">
                                            
                                                <div class="powerhouse-image">
                                                    <img src="img/powerhouse/'. $row["powerhouse_image"] .'" class="img-responsive">
                                                </div>
                                                
                                            
                                        </div> 
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                            <div class="powerhouse-desc '. $row["powerhouse_color"] .'">
                                                <h5>'. $row["powerhouse_name"] .'
                                                    <span>'. $row["powerhouse_designation"] .'</span>
                                                </h5>
                                                <span class="desc">
                                                '. $row["powerhouse_desc"] .'
                                                </span>
                                                
                                            </div>
                                        </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No Powerhouse details available";
                                }
                            ?>

                            
                            
                        
                </div>
            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
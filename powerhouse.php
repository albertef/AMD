<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/powerhouse-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>AMD POWER HOUSE</h4>
                <P>Our advisory board consists of experts who have proven their mettle in the industry. Their skills and expertise have been put to use to design our academic curriculum, which has been constructed to inspire and guide individual talent and mould them into professionals, ready to compete in the industry.</P>

                <div class="powerhouse-list">

                            <?php
                                $sql = "SELECT * FROM amd_powerhouse";
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
<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/faculty-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>YOUR MENTORS</h4>
                <P>You will be guided through every phase of your programme by our highly trained and skilled faculty in both traditional and digital fields who have earned gold standard expertise in their respective fields. Our team of academic staff includes artists, writers, illustrators, graphic designers, performers and researchers many of whom have showcased their work and shared their knowledge on various platforms. You’ll also be supported by skilled technical specialists in print making and digital media. </P>

                <div class="mentor-list">
                    

                            <?php
                                $sql = "SELECT * FROM amd_faculty";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="mentor-list-item">
                                        <div class="mentor-image">
                                            <img src="img/faculty/'. $row["faculty_image"] .'" class="img-responsive">
                                        </div>
                                        <div class="mentor-desc '. $row["faculty_color"] .'">
                                            <h5>'. $row["faculty_name"] .'
                                                <span>'. $row["faculty_qualification"] .'</span>
                                            </h5>
                                            <span class="desc">
                                            '. $row["faculty_desc"] .'
                                            </span>
                                            <div class="social-icons">';
                                                if($row["faculty_facebook"]){
                                                    echo '<a href="https://www.facebook.com/'. $row["faculty_facebook"] .'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
                                                }
                                                if($row["faculty_instagram"]){
                                                    echo '<a href="https://www.instagram.com/'. $row["faculty_instagram"] .'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
                                                }
                                                if($row["faculty_twitter"]){
                                                    echo '<a href="https://www.twitter.com/'. $row["faculty_twitter"] .'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
                                                }
                                                if($row["faculty_linkedin"]){
                                                    echo '<a href="https://www.linkedin.com/'. $row["faculty_linkedin"] .'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
                                                }
                                            echo '</div>
                                        </div>
                                        </div>
                    </div> ';
                                    }
                                } 
                                else {
                                    echo "No faculties available";
                                }
                            ?>

                            
                            
                        
                </div>
            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
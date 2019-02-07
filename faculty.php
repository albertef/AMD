<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/faculty-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>FACULTY</h4>

                <P>Students will be guided through every phase of their program by our highly trained and skilled faculty, strong in art, design and technology side. They are skilled individuals who have been 'Trained to Teach' and not just impart knowledge. The trainers are considered fit for practice only after undergoing AMDs Faculty Development Program, that grooms every faculty member on how to cater to every participants' learning experience. </P>
                
                <P>All our faculty members have also attended the Training of Trainer (TOT) program conducted by Media and Entertainment Skills Council and have been certified by the council for their specific skills. The primary objective of the TOT program is to standardise the training procedure and also to update them with the industry standards. A trainer can deliver great results only when he/she understands the basics, and this program ensures that the trainers are equipped well with the basics that will help them cater to the needs of the students.</P>


                <div class="mentor-list hide">
                    

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
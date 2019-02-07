<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/courses-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>COURSES</h4>

                <P>AMD is an institution founded for the development of creativity and innovation and we apply this approach to the delivery of our cutting-edge courses as well. Designed not just for beginners, the choices of courses are also structured to help working professionals upgrade their knowledge in terms of insight and practices. </P>

                <P>Our courses are designed by our research and development consultants from the creative industry and then passed on to our team of industry experts. Based on their insight and feedback, the course content is re-evaluated and updated. This inclusive process allows our academic curriculum to be in tune with the latest trends and changes in the industry. Paired with industry standard software and the NSQF framework, the course structure and content are finalised. </P>

                <P>This elaborately planned structure of our curriculum prepares students to develop and update the skills required to work and succeed across the creative industries.</P>

            </div>
        </div>

        <div class="course-list">

            <?php
                $sql = "SELECT * FROM amd_courses";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding course-list-item" onclick="window.location.assign(\'course-details.php?id=' . $row["course_id"] . '\');">
                            <div>
                                <h5>' . $row["course_name"] . '</h5>
                                <span class="arrow"><em>&rarr;</em></span>
                            </div>
                        </div>';
                    }
                } 
                else {
                    echo "Courses coming soon";
                }
            ?>

            

            
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
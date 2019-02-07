<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <?php
            $course_id = $_GET['id'];
            //echo $course_id;
            if($course_id == "" || $course_id == NULL){
                header("Location: courses.php");
            }
            else{
            $sql = "SELECT * FROM amd_courses WHERE course_id=".$course_id;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="inner-banner">';
                    if($row["course_banner"] == "" || $row["course_banner"] == NULL) {
                        echo '<img src="img/inner-banners/courses-banner.jpg" class="img-responsive">';
                    }
                    else {
                        echo '<img src="img/course/'. $row["course_banner"] .'" class="img-responsive">';
                    }
                    echo '</div>
                    <div class="about-courses">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-offset-1 col-lg-6 no-padding">
                            <h4>'. $row["course_name"] .'</h4>
                            <div class="course-details">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon1.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Career Scope</h5>
                                    <p>'. $row["course_scope"] .'</p>
                                </div>
                            </div>
                            <div class="course-details">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon2.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Course Objective</h5>
                                    <p>'. $row["course_objective"] .'</p>
                                </div>
                            </div>
                            <div class="course-details">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon3.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Course Modules</h5>
                                    <ul>'. $row["course_modules"] .'</ul>
                                </div>
                            </div>
                            <div class="course-details hide">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon4.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Technology Used</h5>
                                    <ul>'. $row["course_technology"] .'</ul>
                                </div>
                            </div>
                            <div class="course-details">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon5.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Eligibility</h5>
                                    <ul>'. $row["course_eligibility"] .'</ul>
                                </div>
                            </div>
                            <div class="course-details">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding text-right">
                                    <img class="img-responsive" src="img/course/course-icon6.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
                                    <h5>Teaching Method</h5>
                                    <ul>'. $row["course_method"] .'</ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 no-padding">
                            <div class="inner-right-bar '. $row["course_color"] .'">
                                <div class="duration-strip">
                                    <h1>'. $row["course_duration"] .'</h1>
                                    <h2>Month Course</h2>
                                    <span>Learning sessions per day:<br>'. $row["course_session"] .'</span>
                                </div>
                                <div class="course-image"><img src="img/course/'. $row["course_image"] .'"/></div>
                                <div class="contact-form">';
                                include ("includes/form.php");
                                echo '</div>
                            </div>
                        </div>
                    </div>';
                }
            } 
            else {
                header("Location: courses.php");
            }
        }
        ?>

        
        <div class="course-list">
            
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
            <h4>OTHER COURSES</h4>
            <?php
                $sql = "SELECT * FROM amd_courses WHERE course_id!=".$course_id;
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
        


    </div>

<?php include ("includes/footer.php"); ?>
<?php include ("includes/header.php"); ?>


    <div class="banner-form">
        <div class="banner-container col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding text-center">
            <?php include ("includes/banner.php"); ?>
        </div>
        <div class="home-form-container col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding text-left">
            <ul class="second-menu hide">
                <li class="hide"><a>Student Login</a> |</li>    
                <li><a href="#">AMD Blog</a> |</li>
                <li><a href="#">Careers</a></li>
            </ul>
            <?php include ("includes/form.php"); ?>
        </div>
    </div>

    <div class="trained-skill">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <h3>
                TRAINING AND CERTIFICATION PARTNERS.
            </h3>
            <p>Our association with Adobe will provide an opportunity for students to leverage Adobe tools, which will
help them harness their creative skills and gain an edge. We also help our students undergo assessment
by Media and Entertainment Skills Council.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <img src="img/ACTA.jpg" class="img-responsive">
            <img src="img/approved-partners.png" class="img-responsive">
        </div>
    </div>

    <div class="home-courses">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 name-cont no-padding">
                <img src="img/course-icon.png" class="img-responsive">
                <h3>Popular Courses</h3>
                <p>AMD is an institution founded for the development of creativity and innovation and we apply this approach to the delivery of our cutting edge courses as well. Designed not just for beginners, the choices of courses are also structured to help working professionals to upgrade their knowledge in terms of insight and practice.</p>
                <button class="btn" onclick="window.location.assign('courses.php');">VIEW ALL COURSES &rarr;</button>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding course-cards">

            <?php
                $sql = "SELECT * FROM amd_courses ORDER BY course_id ASC LIMIT 4";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding" onclick="window.location.assign(\'course-details.php?id=' . $row["course_id"] . '\');">
                            <article>
                                <h4>' . $row["course_name"] . '</h4>
                                <span class="arrow"><em>&rarr;</em></span>
                            </article>
                        </div>';
                    }
                } 
                else {
                    echo "Courses coming soon";
                }
            ?>

        </div>
    </div>

    <div class="home-powerhouse">
        <div class="owl-carousel" id="owl-powerhouse">

                <?php
                    $sql = "SELECT * FROM amd_powerhouse WHERE powerhouse_status=1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <div class="powerhouse-item">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding power-house-img">
                                    <img src="img/powerhouse/'. $row["powerhouse_image"] .'" class="img-responsive">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding power-house-cont">
                                    <h3>Powerhouse</h3>
                                    <div class="p-cont">
                                        <p>'. substr($row["powerhouse_desc"],0,230) .'...</p>
                                    </div>
                                    <h6>'. $row["powerhouse_name"] .'<span>'. $row["powerhouse_designation"] .'</span></h6>
                                    <button class="btn" onclick="window.location.assign(\'powerhouse.php\');">READ MORE &rarr;</button>
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

    <div class="home-blog hide">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 name-cont no-padding">
                <img src="img/home-blog-icon.png" class="img-responsive">
                <h3>AMD Blog</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding course-cards">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding">
                <article>
                    <h5>Recently Digitized Journals Grant Visitors Access to Leonardo da Vinci's Detailed Engineering Schematics and Musings</h5>
                    <span class="arrow"><em>&rarr;</em></span>
                </article>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding">
                <article>
                <h5>Swedish design studio Amanda & Erik avoid the tropes of minimalist, Scandinavian design in their practice</h5>
                    <span class="arrow"><em>&rarr;</em></span>
                </article>
            </div>
        </div>
    </div>

    <div class="home-campus">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding course-cards">
            <div class="owl-carousel owl-campus" id="owl-campus">

                <?php
                    $sql = "SELECT * FROM amd_campus";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <div class="campus-item">
                                    <img class="img-responsive" src="img/campus/inner/'. $row["campus_image"] .'">
                                </div>';
                            }
                        } 
                        else {
                            echo "Campus page is coming soon!";
                        }
                ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 name-cont no-padding">
                <img src="img/home-campus-icon.png" class="img-responsive">
                <h3>Creative Hub</h3>
                <p>Great commitment and effort has been put into designing our academic curriculum and have been backed up by our well equipped labs, to prepare and nurture students for a better learning experience. </p>
            </div>
        </div>
    </div>


    <div class="home-news hide">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 name-cont no-padding">
                <img src="img/home-news-icon.png" class="img-responsive">
                <h3>Events & News</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding course-cards">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding">
                <article>
                    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</h5>
                    <span class="arrow"><em>&rarr;</em></span>
                </article>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding">
                <article>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</h5>
                    <span class="arrow"><em>&rarr;</em></span>
                </article>
            </div>
        </div>
    </div>

<?php include ("includes/footer.php"); ?>
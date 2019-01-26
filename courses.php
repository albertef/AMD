<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/courses-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>LEARN, INSPIRE, CREATE</h4>
                <P>AMD is an institution founded for the development of creativity and innovation and we apply this approach to our courses as well. While studying at AMD, you will learn from professionals, work in industry-standard facilities and benefit from a network of incredible contacts whilst getting the experience needed for working in your chosen field and develop the future-focused skills you will need to succeed.</P>

                <P>The courses are designed in a way that prioritises the development of practical application skills by having devoted lab and theory secessions every day, where students work with industry standard software’s that would help them in their professional careers. The hybrid natures of our courses not only equip students for one particular career but also impart an array of knowledge about related careers, giving them an added advantage.</P>
            </div>
        </div>

        <div class="course-list">

            <?php
                $sql = "SELECT * FROM amd_courses";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding course-list-item" onclick="window.location.assign(\'course-details.php?id=' . $row["course_id"] . '\');"><div><h5>' . $row["course_name"] . '</h5><span class="arrow"><em>&rarr;</em></span></div></div>';
                    }
                } 
                else {
                    echo "Courses coming soon";
                }
            ?>

            

            
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
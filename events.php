<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/news-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>AMD Events</h4>

                <P class="hide">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>


                <div class="course-list">

                    <?php
                        $sql = "SELECT * FROM amd_events";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding course-list-item" onclick="window.location.assign(\'events-view.php?id=' . $row["event_id"] . '\');">
                                    <div>
                                        <h5>' . $row["event_title"] . '</h5>
                                        <span class="arrow"><em>&rarr;</em></span>
                                    </div>
                                </div>';
                            }
                        } 
                        else {
                            echo "Events coming soon";
                        }
                    ?>

                </div>
            </div>
        </div>

        

    </div>

<?php include ("includes/footer.php"); ?>
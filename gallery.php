<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/blog-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding">
                <h4>Gallery</h4>

                <div id="gallery" style="display:none;">
                    
                    <img alt="The Honourable Shri T P Ramakrishnan, Minister for Excise, Labour and Skill, delivering the Inaugural
address at the AMD launch." src="img/gallery/launch/1.jpg"
                        data-image="img/gallery/launch/1.jpg"
                        data-description="The Honourable Shri T P Ramakrishnan, Minister for Excise, Labour and Skill, delivering the Inaugural
address at the AMD launch.">                    
                        <img alt="Mr Guru Vaidya, sharing the tips and tricks to efficiently using Adobe software’s, at the seminar
launched as part of the AMD launch." src="img/gallery/launch/2.jpg"
                        data-image="img/gallery/launch/2.jpg"
                        data-description="Mr Guru Vaidya, sharing the tips and tricks to efficiently using Adobe software’s, at the seminar
launched as part of the AMD launch.">
                        <img alt="Mr Sharathi Krishna, Vice president- MESC, receiving the memento at the AMD launch." src="img/gallery/launch/3.jpg"
                        data-image="img/gallery/launch/3.jpg"
                        data-description="">
                        <img alt="Mr Sharathi Krishna, Vice president- MESC, receiving the memento at the AMD launch." src="img/gallery/launch/4.jpg"
                        data-image="img/gallery/launch/4.jpg"
                        data-description="Mr Sharathi Krishna, Vice president- MESC, receiving the memento at the AMD launch.">
                        <img alt="Mr Supreeth Nagaraju, Head – Education, Digital Media, Adobe India- South Asia, receiving the
memento from our Managing Partner Dr Babu Joseph." src="img/gallery/launch/5.jpg"
                        data-image="img/gallery/launch/5.jpg"
                        data-description="Mr Supreeth Nagaraju, Head – Education, Digital Media, Adobe India- South Asia, receiving the
memento from our Managing Partner Dr Babu Joseph.">
                        <img alt="AMD Launch Event" src="img/gallery/launch/6.jpg"
                        data-image="img/gallery/launch/6.jpg"
                        data-description="AMD Launch Event">
                        <img alt="AMD Launch Event" src="img/gallery/launch/7.jpg"
                        data-image="img/gallery/launch/7.jpg"
                        data-description="AMD Launch Event">
                        <img alt="AMD Launch Event" src="img/gallery/launch/8.jpg"
                        data-image="img/gallery/launch/8.jpg"
                        data-description="AMD Launch Event">
                        <img alt="Philip Thomas, CEO - AMD, delivering the Welcome speech at the AMD launch." src="img/gallery/launch/9.jpg"
                        data-image="img/gallery/launch/9.jpg"
                        data-description="Philip Thomas, CEO - AMD, delivering the Welcome speech at the AMD launch.">
                        <img alt="AMD Launch Event" src="img/gallery/launch/10.jpg"
                        data-image="img/gallery/launch/10.jpg"
                        data-description="AMD Launch Event">
                        
                
                </div>
            </div>
        </div>

        

        <div class="course-list hide">

            <?php
                $sql = "SELECT * FROM amd_blog";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding course-list-item" onclick="window.location.assign(\'blog-view.php?id=' . $row["blog_id"] . '\');">
                            <div>
                                <h5>' . $row["blog_title"] . '</h5>
                                <span class="arrow"><em>&rarr;</em></span>
                            </div>
                        </div>';
                    }
                } 
                else {
                    echo "Blogs coming soon";
                }
            ?>

            

            
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
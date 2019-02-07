<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/contact-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-offset-1 col-lg-6 no-padding">

            <?php
                $sql = "SELECT * FROM amd_contact";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '                
                            <div class="contact-address">
                                <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 no-padding text-right">
                                    <img class="img-responsive" src="img/contact/icon1.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11 no-padding">
                                    <h5>Academy of media and design</h5>
                                    <p>'. $row["contact_address"] .'</p>
                                </div>
                            </div>
                            <div class="contact-address">
                                <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 no-padding text-right">
                                    <img class="img-responsive" src="img/contact/icon2.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11 no-padding">
                                    <h6>Corporate Office:</h6>
                                    <p>'. $row["contact_corp"] .'</p>
                                </div>
                            </div>
                            <div class="contact-address">
                                <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 no-padding text-right">
                                    <img class="img-responsive" src="img/contact/icon3.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11 no-padding">
                                    <p><strong>CALL: </strong>'. $row["contact_phone"] .'</p>
                                </div>
                            </div>
                            <div class="contact-address">
                                <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 no-padding text-right">
                                    <img class="img-responsive" src="img/contact/icon4.png"/>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11 no-padding">
                                    <p><strong>EMAIL: </strong>'. $row["contact_email"] .'</p>
                                </div>
                            </div>
                            ';
                    }
                } 
                else {
                    echo "No Contact details available";
                }
            ?>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 no-padding">
                <div class="inner-right-bar contact-right-bar">
                    <div class="contact-form">
                        <?php include ("includes/form.php"); ?>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.217585455124!2d76.29451141486678!3d9.998877675796884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080df45a7f1fd7%3A0xb04f93ced6ff4556!2sAcademy+of+Media+and+DesignLLP!5e0!3m2!1sen!2sin!4v1548862256914" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

<?php include ("includes/footer.php"); ?>
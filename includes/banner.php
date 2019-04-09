<div class="owl-carousel" id="owl-banner">
    <?php
        $sql = "SELECT * FROM amd_banner";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="item"><img alt="' . $row["banner_desc"] . '" src="img/banner/' . $row["banner_image"] . '"></div>';
            }
        } 
        else {
            echo "No Banner Available";
        }
    ?>
</div>
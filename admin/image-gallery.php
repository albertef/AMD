<?php 
    include ("includes/header.php"); 
?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>IMAGE GALLERY</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD IMAGE</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">IMAGE GALLERY</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['image_id']) && isset($_GET['edit'])){
                            $image_id = $_GET['image_id'];

                            $sql = "SELECT * FROM amd_images WHERE image_id = ". $image_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        
                                        <div class="form-group">
                                            <label for="image_urlUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="image_urlUpload" name="image_url" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No Image Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="image_urlUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="image_urlUpload" name="image_url" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block image-btn" name="image-btn">Submit Image</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['image_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_images WHERE image_id=". $_GET['image_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>Image deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='image-gallery.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['image-btn'])){

                            if(isset($_FILES['image_url'])){
                                $image_url = imageUpload($_FILES['image_url'], "../img/images/");
                            }

                            if(isset($_GET['image_id']) && isset($_GET['edit'])){
                                if($image_url != ""){
                                    $sql = "UPDATE amd_images SET image_url='$image_url' WHERE image_id=". $_GET['image_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>image updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_images (image_url) VALUES ('".$image_url."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='image-gallery.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="edit">

                    <?php
                        $sql = "SELECT * FROM amd_images ORDER BY image_id DESC";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="../img/images/' . $row["image_url"] . '" alt="Academy of Media and Design - AMD">
                                            
                                            <div class="caption">
                                                <p><input type="text" class="form-control" name="imageurl" id="imageurl-' . $row["image_id"] . '" value="http://www.amd.edu.in/img/images/' . $row["image_url"] . '"></p>
                                                <p><a href="javasript:void(0);" class="btn btn-primary btn-block copy-btn" id="copy-btn-'.$row["image_id"].'" onclick="copyText('.$row["image_id"].');" role="button">Copy URL</a></p>
                                                <p>
                                                    <div class="col-xs-6 no-padding"><a href="?image_id='. $row["image_id"].'&edit=true" class="btn btn-warning btn-block">Edit</a></div>
                                                    <div class="col-xs-6 no-padding"><a href="?image_id='. $row["image_id"].'&delete=true" class=" btn btn-danger btn-block">Delete</a></div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        } 
                        else {
                            echo "No image Available";
                        }
                    ?>
            
                </div>

            </div>
    </div>
<?php include ("includes/footer.php"); ?>
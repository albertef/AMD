<?php 
    include ("includes/header.php"); 
?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD HOME PAGE BANNERS</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD BANNER</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">BANNER LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['banner_id']) && isset($_GET['edit'])){
                            $banner_id = $_GET['banner_id'];

                            $sql = "SELECT * FROM amd_banner WHERE banner_id = ". $banner_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Image Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="banner-editor" name="banner_desc" rows="18">
                                                ' . $row["banner_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="banner_imageUpload" class="col-sm-2 control-label">Select Image to Upload [Image size must be 1033x1080 px]</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="banner_imageUpload" name="banner_image" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No Banners Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Image Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="banner-editor" name="banner_desc" rows="18">
                                        <p>Banner Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="banner_imageUpload" class="col-sm-2 control-label">Select Image to Upload [Image size must be 1033x1080 px]</label>
                                <div class="col-sm-9">
                                    <input type="file" id="banner_imageUpload" name="banner_image" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block banner-btn" name="banner-btn">Submit Image</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['banner_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_banner WHERE banner_id=". $_GET['banner_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>Banner deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='banner.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['banner-btn'])){
                            $banner_desc = trim(mysqli_real_escape_string($conn, $_POST['banner_desc']));

                            if(isset($_FILES['banner_image'])){
                                $banner_image = imageUpload($_FILES['banner_image'], "../img/banner/");
                            }

                            if(isset($_GET['banner_id']) && isset($_GET['edit'])){
                                if($banner_image != ""){
                                    $sql = "UPDATE amd_banner SET banner_desc='$banner_desc', banner_image='$banner_image' WHERE banner_id=". $_GET['banner_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_banner SET banner_desc='$banner_desc' WHERE banner_id=". $_GET['banner_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>banner updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_banner (banner_desc, banner_image ) VALUES ('".$banner_desc."', '".$banner_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='banner.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="edit">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_banner";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["banner_id"] . '</td>
                                                <td>' . $row["banner_desc"] . '</td>
                                                <td><img src="../img/banner/' . $row["banner_image"] . '"></td>
                                                <td>
                                                    <a href="?banner_id='. $row["banner_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?banner_id='. $row["banner_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No banners Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('banner-editor');
    </script>
<?php include ("includes/footer.php"); ?>
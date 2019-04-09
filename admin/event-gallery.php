<?php 
    include ("includes/header.php"); 
    if(isset($_GET['event_id'])){
        $event_id = $_GET["event_id"];
    }
    else {
        header("Location: events.php");
    }
?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD GALLERY</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD GALLERY</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">IMAGE LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['gallery_id']) && isset($_GET['edit'])){
                            $gallery_id = $_GET['gallery_id'];

                            $sql = "SELECT * FROM amd_gallery WHERE gallery_id = ". $gallery_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Image Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="gallery-editor" name="gallery_desc" rows="18">
                                                ' . $row["gallery_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="gallery_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="gallery_imageUpload" name="gallery_image" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No Gallery Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Image Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="gallery-editor" name="gallery_desc" rows="18">
                                        <p>Gallery Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gallery_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="gallery_imageUpload" name="gallery_image" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block gallery-btn" name="gallery-btn">Submit Image</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['gallery_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_gallery WHERE gallery_id=". $_GET['gallery_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>Gallery deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='event-gallery.php?event_id='.$event_id;
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['gallery-btn'])){
                            $gallery_desc = trim(mysqli_real_escape_string($conn, $_POST['gallery_desc']));

                            if(isset($_FILES['gallery_image'])){
                                $gallery_image = imageUpload($_FILES['gallery_image'], "../img/gallery/");
                            }

                            if(isset($_GET['gallery_id']) && isset($_GET['edit'])){
                                if($gallery_image != ""){
                                    $sql = "UPDATE amd_gallery SET gallery_desc='$gallery_desc', event_id='$event_id', gallery_image='$gallery_image' WHERE gallery_id=". $_GET['gallery_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_gallery SET gallery_desc='$gallery_desc', event_id='$event_id', gallery_image='no-image.jpg' WHERE gallery_id=". $_GET['gallery_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>gallery updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_gallery (gallery_desc, event_id, gallery_image ) VALUES ('".$gallery_desc."', '".$event_id."', '".$gallery_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='event-gallery.php?event_id='.$event_id;
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
                                <th>Event Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT a.gallery_id, a.gallery_desc, a.gallery_image, a.event_id, b.event_title FROM amd_gallery a, amd_events b WHERE a.event_id ='". $event_id ."' AND b.event_id ='". $event_id ."' ORDER BY a.gallery_id DESC";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["gallery_id"] . '</td>
                                                <td>' . $row["gallery_desc"] . '</td>
                                                <td><img src="../img/gallery/' . $row["gallery_image"] . '"></td>
                                                <td>' . $row["event_title"] . '</td>
                                                <td>
                                                    <a href="?gallery_id='. $row["gallery_id"].'&edit=true&event_id='. $row["event_id"].'">Edit</a> &nbsp;&nbsp;
                                                    <a href="?gallery_id='. $row["gallery_id"].'&delete=true&event_id='. $row["event_id"].'"" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No gallery Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('gallery-editor');
    </script>
<?php include ("includes/footer.php"); ?>
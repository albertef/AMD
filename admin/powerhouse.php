<?php include ("includes/header.php"); ?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD POWERHOUSE</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD/EDIT POWERHOUSE</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">POWERHOUSE LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['powerhouse_id']) && isset($_GET['edit'])){
                            $powerhouse_id = $_GET['powerhouse_id'];

                            $sql = "SELECT * FROM amd_powerhouse WHERE powerhouse_id = ". $powerhouse_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhone3" name="powerhouse_name" value="' . $row["powerhouse_name"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" name="powerhouse_designation" value="' . $row["powerhouse_designation"] . '">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="powerhouse-editor" name="powerhouse_desc" rows="18">
                                                ' . $row["powerhouse_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="powerhouse_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="powerhouse_imageUpload" name="powerhouse_image" accept="image/*">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Color</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="" name="powerhouse_color">
                                                    <option value="'. $row["powerhouse_color"] .'">'. $row["powerhouse_color"] .'</option>
                                                    <option value="-1">Select Color</option>
                                                    <option value="green">Green</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="blue">Blue</option>
                                                </select>
                                            </div>
                                        </div>
                                        ';
                                    }
                                } 
                                else {
                                    echo "No Powerhouse Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone3" name="powerhouse_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Designation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name="powerhouse_designation">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="powerhouse-editor" name="powerhouse_desc" rows="18">
                                        <p>powerhouse Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="powerhouse_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="powerhouse_imageUpload" name="powerhouse_image" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="" name="powerhouse_color">
                                        <option value="-1">Select Color</option>
                                        <option value="green">Green</option>
                                        <option value="pink">Pink</option>
                                        <option value="blue">Blue</option>
                                    </select>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block powerhouse-btn" name="powerhouse-btn">Submit Powerhouse</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['powerhouse_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_powerhouse WHERE powerhouse_id=". $_GET['powerhouse_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>powerhouse deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='powerhouse.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['powerhouse-btn'])){
                            $powerhouse_name = trim(mysqli_real_escape_string($conn, $_POST['powerhouse_name']));
                            $powerhouse_designation = trim(mysqli_real_escape_string($conn, $_POST['powerhouse_designation']));
                            $powerhouse_desc = trim(mysqli_real_escape_string($conn, $_POST['powerhouse_desc']));
                            $powerhouse_color = trim(mysqli_real_escape_string($conn, $_POST['powerhouse_color']));

                            if(isset($_FILES['powerhouse_image'])){
                                $powerhouse_image = imageUpload($_FILES['powerhouse_image'], "../img/powerhouse/");
                            }

                            if(isset($_GET['powerhouse_id']) && isset($_GET['edit'])){
                                if($powerhouse_image != ""){
                                    $sql = "UPDATE amd_powerhouse SET powerhouse_name='$powerhouse_name', powerhouse_designation='$powerhouse_designation', powerhouse_desc='$powerhouse_desc', powerhouse_color='$powerhouse_color', powerhouse_image='$powerhouse_image' WHERE powerhouse_id=". $_GET['powerhouse_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_powerhouse SET powerhouse_name='$powerhouse_name', powerhouse_designation='$powerhouse_designation', powerhouse_desc='$powerhouse_desc', powerhouse_color='$powerhouse_color' WHERE powerhouse_id=". $_GET['powerhouse_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>Powerhouse updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_powerhouse (powerhouse_name, powerhouse_designation, powerhouse_desc, powerhouse_color, powerhouse_image ) VALUES ('".$powerhouse_name."', '".$powerhouse_designation."', '".$powerhouse_desc."', '".$powerhouse_color."', '".$powerhouse_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='powerhouse.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="edit">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_powerhouse ORDER BY powerhouse_id";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["powerhouse_id"] . '</td>
                                                <td>' . $row["powerhouse_name"] . '</td>
                                                <td>' . $row["powerhouse_designation"] . '</td>
                                                <td><img src="../img/powerhouse/' . $row["powerhouse_image"] . '"></td>
                                                <td>
                                                    <a href="?powerhouse_id='. $row["powerhouse_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?powerhouse_id='. $row["powerhouse_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No Powerhouse Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('powerhouse-editor');
    </script>
<?php include ("includes/footer.php"); ?>
<?php include ("includes/header.php"); ?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD EVENTS</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD/EDIT EVENTS</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">EVENTS LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['event_id']) && isset($_GET['edit'])){
                            $event_id = $_GET['event_id'];

                            $sql = "SELECT * FROM amd_events WHERE event_id = ". $event_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="eventsinputDate" class="col-sm-2 control-label">Event Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" readonly id="eventsinputDate" name="events-date" value="' . $row["event_date"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Event Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhone3" name="event_title" value="' . $row["event_title"] . '">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="events-editor" name="event_desc" rows="18">
                                                ' . $row["event_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="event_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="event_imageUpload" name="event_image" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No events Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="eventsinputDate" class="col-sm-2 control-label">Event Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly id="eventsinputDate" name="events-date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Event Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone3" name="event_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="events-editor" name="event_desc" rows="18">
                                        <p>Events Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="event_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="event_imageUpload" name="event_image" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block events-btn" name="events-btn">Submit Event</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['event_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_events WHERE event_id=". $_GET['event_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>Event deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='events.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['events-btn'])){
                            $event_title = trim(mysqli_real_escape_string($conn, $_POST['event_title']));
                            $event_desc = trim(mysqli_real_escape_string($conn, $_POST['event_desc']));
                            $event_date = trim(mysqli_real_escape_string($conn, $_POST['events-date']));

                            if(isset($_FILES['event_image'])){
                                $event_image = imageUpload($_FILES['event_image'], "../img/events/");
                            }

                            if(isset($_GET['event_id']) && isset($_GET['edit'])){
                                if($event_image != ""){
                                    $sql = "UPDATE amd_events SET event_title='$event_title', event_desc='$event_desc', event_date='$event_date', event_image='$event_image' WHERE event_id=". $_GET['event_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_events SET event_title='$event_title', event_desc='$event_desc', event_date='$event_date' WHERE event_id=". $_GET['event_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>Event updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_events (event_title, event_desc, event_date, event_image ) VALUES ('".$event_title."', '".$event_desc."', '".$event_date."', '".$event_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='events.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="edit">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Events Name</th>
                                <th>Events Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_events ORDER BY event_id DESC";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["event_id"] . '</td>
                                                <td>' . $row["event_date"] . '</td>
                                                <td>' . $row["event_title"] . '</td>
                                                <td><img src="../img/events/' . $row["event_image"] . '"></td>
                                                <td>
                                                    <a href="event-gallery.php?event_id='. $row["event_id"].'">Add Gallery</a> &nbsp;&nbsp;
                                                    <a href="?event_id='. $row["event_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?event_id='. $row["event_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No events Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('events-editor');
    </script>
<?php include ("includes/footer.php"); ?>
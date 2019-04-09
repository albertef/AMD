<?php include ("includes/header.php"); ?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD COURSES</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD/EDIT COURSES</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">COURSES LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['course_id']) && isset($_GET['edit'])){
                            $course_id = $_GET['course_id'];

                            $sql = "SELECT * FROM amd_courses WHERE course_id = ". $course_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Course Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhone3" name="course_name" value="' . $row["course_name"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Scope</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-scope-editor" name="course_scope" rows="18">
                                                ' . $row["course_scope"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Objective</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-obj-editor" name="course_objective" rows="18">
                                                ' . $row["course_objective"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Modules</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-modules-editor" name="course_modules" rows="18">
                                                ' . $row["course_modules"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Technology</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-tech-editor" name="course_technology" rows="18">
                                                ' . $row["course_technology"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Eligibility</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-eligibility-editor" name="course_eligibility" rows="18">
                                                ' . $row["course_eligibility"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course Method</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="course-method-editor" name="course_method" rows="18">
                                                ' . $row["course_method"] . '
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Course Duration</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" name="course_duration" value="' . $row["course_duration"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Course Session</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" name="course_session" value="' . $row["course_session"] . '">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="course_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="course_imageUpload" name="course_image" accept="image/*">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Color</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="" name="course_color">
                                                    <option value="'. $row["course_color"] .'">'. $row["course_color"] .'</option>
                                                    <option value="-1">Select Color</option>
                                                    <option value="green">Green</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="yellow">Yellow</option>
                                                </select>
                                            </div>
                                        </div>
                                        ';
                                    }
                                } 
                                else {
                                    echo "No Courses Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name="course_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Scope</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-scope-editor" name="course_scope" rows="18">
                                    <p>Course Scope</p>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Objective</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-obj-editor" name="course_objective" rows="18">
                                    <p>Course Objective</p>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Modules</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-modules-editor" name="course_modules" rows="18">
                                    <p>Course Modules</p>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Technology</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-tech-editor" name="course_technology" rows="18">
                                    <p>Course Technology</p>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Eligibility</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-eligibility-editor" name="course_eligibility" rows="18">
                                    <p>Course Eligibility</p>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Course Method</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="course-method-editor" name="course_method" rows="18">
                                    <p>Course Method</p>
                                    </textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Course Duration</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name="course_duration">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Course Session</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name="course_session">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="course_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="course_imageUpload" name="course_image" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="" name="course_color">
                                        <option value="-1">Select Color</option>
                                        <option value="green">Green</option>
                                        <option value="pink">Pink</option>
                                        <option value="blue">Blue</option>
                                        <option value="yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block courses-btn" name="courses-btn">Submit Courses</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['course_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_courses WHERE course_id=". $_GET['course_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>courses deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='courses.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['courses-btn'])){
                            $course_name = trim(mysqli_real_escape_string($conn, $_POST['course_name']));
                            $course_scope = trim(mysqli_real_escape_string($conn, $_POST['course_scope']));
                            $course_objective = trim(mysqli_real_escape_string($conn, $_POST['course_objective']));
                            $course_modules = trim(mysqli_real_escape_string($conn, $_POST['course_modules']));
                            $course_technology = trim(mysqli_real_escape_string($conn, $_POST['course_technology']));
                            $course_eligibility = trim(mysqli_real_escape_string($conn, $_POST['course_eligibility']));
                            $course_method = trim(mysqli_real_escape_string($conn, $_POST['course_method']));
                            $course_duration = trim(mysqli_real_escape_string($conn, $_POST['course_duration']));
                            $course_session = trim(mysqli_real_escape_string($conn, $_POST['course_session']));
                            $course_color = trim(mysqli_real_escape_string($conn, $_POST['course_color']));

                            if(isset($_FILES['course_image'])){
                                $course_image = imageUpload($_FILES['course_image'], "../img/course/");
                            }

                            if(isset($_GET['course_id']) && isset($_GET['edit'])){
                                if($course_image != ""){
                                    $sql = "UPDATE amd_courses SET course_name='$course_name', course_dropdown='$course_name', course_scope='$course_scope', course_objective='$course_objective', course_modules='$course_modules', course_technology='$course_technology', course_eligibility='$course_eligibility', course_method='$course_method', course_duration='$course_duration', course_session='$course_session', course_color='$course_color', course_image='$course_image' WHERE course_id=". $_GET['course_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_courses SET course_name='$course_name', course_dropdown='$course_name', course_scope='$course_scope', course_objective='$course_objective', course_modules='$course_modules', course_technology='$course_technology', course_eligibility='$course_eligibility', course_method='$course_method', course_duration='$course_duration', course_session='$course_session', course_color='$course_color' WHERE course_id=". $_GET['course_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>Course updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_courses (course_name, course_dropdown, course_scope, course_objective, course_modules, course_technology, course_eligibility, course_method, course_duration, course_session, course_color, course_image ) VALUES ('".$course_name."', '".$course_name."', '".$course_scope."', '".$course_objective."', '".$course_modules."', '".$course_technology."', '".$course_eligibility."', '".$course_method."', '".$course_duration."', '".$course_session."', '".$course_color."', '".$course_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='courses.php';
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
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_courses ORDER BY course_id";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["course_id"] . '</td>
                                                <td>' . $row["course_name"] . '</td>
                                                <td><img src="../img/course/' . $row["course_image"] . '"></td>
                                                <td>
                                                    <a href="?course_id='. $row["course_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?course_id='. $row["course_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No Courses Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('course-scope-editor');
        CKEDITOR.replace('course-obj-editor');
        CKEDITOR.replace('course-modules-editor');
        CKEDITOR.replace('course-tech-editor');
        CKEDITOR.replace('course-eligibility-editor');
        CKEDITOR.replace('course-method-editor');
    </script>
<?php include ("includes/footer.php"); ?>
<?php include ("includes/header.php"); ?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD Blog</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD/EDIT BLOG</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">BLOG LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['blog_id']) && isset($_GET['edit'])){
                            $blog_id = $_GET['blog_id'];

                            $sql = "SELECT * FROM amd_blog WHERE blog_id = ". $blog_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="bloginputDate" class="col-sm-2 control-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" readonly id="bloginputDate" name="blog-date" value="' . $row["blog_date"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="" name="news_category">
                                                    <option value="'. $row["blog_category"] .'">'. $row["blog_category"] .'</option>
                                                    <option value="-1">Select Category</option>
                                                    <option value="News">News</option>
                                                    <option value="Events">Events</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">blog_title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhone3" name="blog_title" value="' . $row["blog_title"] . '">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="blog-editor" name="description" rows="18">
                                                ' . $row["blog_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="blog_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="blog_imageUpload" name="blog_image" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No blog Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="bloginputDate" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly id="bloginputDate" name="blog-date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="" name="blog_category">
                                        <option value="-1">Select Category</option>
                                        <option value="News">News</option>
                                        <option value="Events">Events</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">blog_title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone3" name="blog_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="blog-editor" name="description" rows="18">
                                        <p>blog Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blog_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="blog_imageUpload" name="blog_image" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block blog-btn" name="blog-btn">Submit Blog</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['blog_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_blog WHERE blog_id=". $_GET['blog_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>blog deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='blog.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['blog-btn'])){
                            $blog_title = trim(mysqli_real_escape_string($conn, $_POST['blog_title']));
                            $blog_desc = trim(mysqli_real_escape_string($conn, $_POST['description']));
                            $blog_date = trim(mysqli_real_escape_string($conn, $_POST['blog-date']));
                            $blog_category = trim(mysqli_real_escape_string($conn, $_POST['blog_category']));

                            if(isset($_FILES['blog_image'])){
                                $blog_image = imageUpload($_FILES['blog_image'], "../img/blog/");
                            }

                            if(isset($_GET['blog_id']) && isset($_GET['edit'])){
                                if($blog_image != ""){
                                    $sql = "UPDATE amd_blog SET blog_title='$blog_title', blog_desc='$blog_desc', blog_date='$blog_date', blog_category='$blog_category', blog_image='$blog_image' WHERE blog_id=". $_GET['blog_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_blog SET blog_title='$blog_title', blog_desc='$blog_desc', blog_date='$blog_date', blog_category='$blog_category' WHERE blog_id=". $_GET['blog_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>blog updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_blog (blog_title, blog_desc, blog_date, blog_category, blog_image) VALUES ('".$blog_title."', '".$blog_desc."', '".$blog_date."', '".$blog_category."', '".$blog_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='blog.php';
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
                                <th>Blog Title</th>
                                <th>Blog Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_blog ORDER BY blog_id DESC";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["blog_id"] . '</td>
                                                <td>' . $row["blog_date"] . '</td>
                                                <td>' . $row["blog_title"] . '</td>
                                                <td><img src="../img/blog/' . $row["blog_image"] . '"></td>
                                                <td>
                                                    <a href="?blog_id='. $row["blog_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?blog_id='. $row["blog_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No Blogs Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>

<script>
    CKEDITOR.replace('blog-editor');
</script>

<?php include ("includes/footer.php"); ?>
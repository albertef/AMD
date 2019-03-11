<?php include ("includes/header.php"); ?>
    
    <div class="col-xs-12 col-md-12 admin-panel">

            <h3>AMD NEWS</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#add" aria-controls="aus" role="tab" data-toggle="tab">ADD/EDIT NEWS</a></li>
                <li><a href="#edit" aria-controls="ind" role="tab" data-toggle="tab">NEWS LIST</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       
                    <?php
                        if(isset($_GET['news_id']) && isset($_GET['edit'])){
                            $news_id = $_GET['news_id'];

                            $sql = "SELECT * FROM amd_news WHERE news_id = ". $news_id;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '

                                        <div class="form-group">
                                            <label for="newsinputDate" class="col-sm-2 control-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" readonly id="newsinputDate" name="news-date" value="' . $row["news_date"] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="" name="news_category">
                                                    <option value="'. $row["news_category"] .'">'. $row["news_category"] .'</option>
                                                    <option value="-1">Select Category</option>
                                                    <option value="News">News</option>
                                                    <option value="Events">Events</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhone3" class="col-sm-2 control-label">news_title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhone3" name="news_title" value="' . $row["news_title"] . '">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea class="input-block-level" id="news-editor" name="news_desc" rows="18">
                                                ' . $row["news_desc"] . '
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="news_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="news_imageUpload" name="news_image" accept="image/*">
                                            </div>
                                        </div>';
                                    }
                                } 
                                else {
                                    echo "No news Available";
                                }
                        } 
                        else { ?>

                            <div class="form-group">
                                <label for="newsinputDate" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly id="newsinputDate" name="news-date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="" name="news_category">
                                        <option value="-1">Select Category</option>
                                        <option value="News">News</option>
                                        <option value="Events">Events</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 control-label">News Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone3" name="news_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEnquiry3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-9">
                                    
                                    <textarea class="input-block-level" id="news-editor" name="news_desc" rows="18">
                                        <p>News Description</p>
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="news_imageUpload" class="col-sm-2 control-label">Select Image to Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" id="news_imageUpload" name="news_image" accept="image/*">
                                </div>
                            </div>

                        <?php } ?>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success btn-block news-btn" name="news-btn">Submit News</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_GET['news_id']) && isset($_GET['delete'])){
                            $sql = "DELETE FROM amd_news WHERE news_id=". $_GET['news_id'];
                            if (mysqli_query($conn, $sql)) {
                                echo "<p class='text-success'>News deleted successfully</p>";
                            } else {
                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                            }
                            $url='news.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                        }
                        if(isset($_POST['news-btn'])){
                            $news_title = trim(mysqli_real_escape_string($conn, $_POST['news_title']));
                            $news_desc = trim(mysqli_real_escape_string($conn, $_POST['news_desc']));
                            $news_date = trim(mysqli_real_escape_string($conn, $_POST['news-date']));
                            $news_category = trim(mysqli_real_escape_string($conn, $_POST['news_category']));

                            if(isset($_FILES['news_image'])){
                                $news_image = imageUpload($_FILES['news_image'], "../img/news/");
                            }

                            if(isset($_GET['news_id']) && isset($_GET['edit'])){
                                if($news_image != ""){
                                    $sql = "UPDATE amd_news SET news_title='$news_title', news_desc='$news_desc', news_date='$news_date', news_category='$news_category', news_image='$news_image' WHERE news_id=". $_GET['news_id'];
                                }
                                else {
                                    $sql = "UPDATE amd_news SET news_title='$news_title', news_desc='$news_desc', news_date='$news_date', news_category='$news_category' WHERE news_id=". $_GET['news_id'];
                                }
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>news updated successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            else {
                                $sql = "INSERT INTO amd_news (news_title, news_desc, news_date, news_category, news_image ) VALUES ('".$news_title."', '".$news_desc."', '".$news_date."', '".$news_category."', '".$news_image."')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<p class='text-success'>New record created successfully</p>";
                                } else {
                                    echo "<p class='text-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                                }
                            }
                            $url='news.php';
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
                                <th>News Title</th>
                                <th>News Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM amd_news ORDER BY news_id DESC";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["news_id"] . '</td>
                                                <td>' . $row["news_date"] . '</td>
                                                <td>' . $row["news_title"] . '</td>
                                                <td><img src="../img/news/' . $row["news_image"] . '"></td>
                                                <td>
                                                    <a href="?news_id='. $row["news_id"].'&edit=true">Edit</a> &nbsp;&nbsp;
                                                    <a href="?news_id='. $row["news_id"].'&delete=true" class="text-danger">Delete</a>
                                                </td>
                                            </tr>';
                                    }
                                } 
                                else {
                                    echo "No news Available";
                                }
                            ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
    </div>
    <script>
        CKEDITOR.replace('news-editor');
    </script>
<?php include ("includes/footer.php"); ?>
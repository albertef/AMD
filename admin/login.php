<?php 
ob_start();
include ("includes/header-login.php"); ?>
    
<div class="col-xs-12 col-md-4 col-md-offset-4">
    <div id="loginbox" style="margin-top:30px;">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title text-center">AMD - Academy of Media and Design</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <?php
                    if(isset($_POST['login-btn'])){
                        $login_username = trim(mysqli_real_escape_string($conn, $_POST['login_username']));
                        $login_password = trim(mysqli_real_escape_string($conn, $_POST['login_password']));

                        $sql = "SELECT * FROM amd_user";
                        $result = mysqli_query($conn, $sql);

                        if (empty($_POST['login_username']) || empty($_POST['login_password'])) {
                            echo '<div class="alert alert-danger col-sm-12">"Username or Password can not be empty"</div>';
                        }
                        else {
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    if($login_username == $row["login_username"] && md5($login_password) == $row["login_password"])  {
                                        session_start();
                                        $_SESSION["amd_login_user"] = $login_username;
                                        header("location:index.php");
                                    }
                                    else {
                                        echo '<div class="alert alert-danger col-sm-12">"Username or Password do not match the records"</div>';
                                    }
                                }
                            } 
                            else {
                                echo "No Records Found!";
                            }
                        }

                        

                        
                    }
                ?>

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="login_username" value="" placeholder="Username">                                        
                    </div>
                
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="login_password" placeholder="Password">
                    </div>
        
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-success btn-block login-btn" name="login-btn">Login</button>
                        </div>
                    </div>
                </form>     
            </div> 

                               
        </div>
        <div class="text-center"><a href="http://www.amd.edu.in" target="_blank">Back to website</a></div>   
    </div>
</div>

<?php include ("includes/footer-login.php"); ?>
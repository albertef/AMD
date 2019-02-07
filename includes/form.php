<div class="form-container">
    <img src="img/form-icon.png" class="img-responsive">
    <h1>Have more questions? We'll call you back!</h1>
    <form action="" method="post" id="joinForm"  onsubmit="return validateDropdown();">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="number" min="0" class="form-control" name="phone" placeholder="Contact Number" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" value="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select Interested Course 
                    <span class="caret"></span>
                </button>
                <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please select a course</span>

                <input type="hidden" name="course" id="courseHidden" value="" required>
                
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php

                    $sql = 'SELECT * FROM amd_courses';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<li><a href="javascript:void(0);" title="'.$row["course_name"].'">'.$row["course_dropdown"].'</a></li>';
                        }
                    }
                    else {
                        echo '<li><a href="javascript:void(0);">No Courses Available</a></li>';
                    }
                ?>
                </ul>
            </div>
        </div>
        <button type="submit" class="btn btn-default form-send" name="submit-enquiry">SUBMIT &rarr;</button>
    </form> 
</div>

<script>console.log(document.getElementById("dropdownMenu1").value)</script>

<?php
        //error_reporting(E_ALL ^ E_NOTICE);
        if(isset($_POST['submit-enquiry']))
        {
          $name=trim(mysqli_real_escape_string($conn, $_POST['name']));
          $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
          $phone=trim(mysqli_real_escape_string($conn, $_POST['phone']));
          $course=trim(mysqli_real_escape_string($conn, $_POST['course']));

          $message ="<table width=80%  border=0 cellspacing=0 cellpadding=0 style='background:#FFF; border: 1px solid #112f4a; margin: 0 auto;'>
          <tr>
          <td colspan=2 align=center style='padding: 10px 0;'><img src='http://vibrantangle.com/amd/img/logo.png' width='100'></td>
          </tr>
          <tr>
          <td colspan=2 align=center style='background:#112f4a; height:5px;' ></td>
          </tr>
          <tr style='background:#F0F0F0;'>
          <td style='padding:20px;'>Name : </td>
          <td style='padding:20px;' colspan=2>$name</td>
          </tr>
          <tr>
          <td style='padding:20px;' >E-mail : </td>
          <td style='padding:20px;' colspan=2>$email</td>
          </tr>
          <tr style='background:#F0F0F0;'>
          <td style='padding:20px;' >Phone No : </td>
          <td style='padding:20px;' colspan=2>$phone</td>
          </tr>
          <tr>
          <td style='padding:20px;' >Course : </td>
          <td style='padding:20px;' colspan=2>$course</td>
          </tr>
          <tr>
          <td colspan=2 align=center style='background:#112f4a; padding:10px; text-align:center; color: #FFF;' >
          &copy; Academy of Media and Design Ltd.
          </td>
          </tr>
          </table>
          ";

          //$tomail="albertef@gmail.com";
          $tomail="info@amd.edu.in";
          $subject="AMD Online Enquiry";
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
          $headers .= "From:".$email;
         
            if(mail($tomail, $subject, $message, $headers))
            {
                echo '
                <div id="myModal" class="modal fade in" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thank You!</h4>
                        </div>
                        <div class="modal-body">
                        <p>Enquiry sent successfully. We will get back to you soon.</p>
                        </div>
                    </div>
                
                    </div>
                </div>
                ';
                }
            else
            {
                echo '<div id="myModal" class="modal fade in" role="dialog">
                <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sorry!</h4>
                    </div>
                    <div class="modal-body">
                    <p>Enquiry sending failed. Please try after some time.</p>
                    </div>
                </div>
            
                </div>
            </div>';
            }
        }

    ?>
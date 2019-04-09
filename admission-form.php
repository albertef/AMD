<?php include ("includes/header.php"); ?>

    <div class="inner-pages">

        <div class="inner-banner">
            <img src="img/inner-banners/placements-banner.jpg" class="img-responsive">
        </div>

        <div class="about-courses">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 no-padding admission-page">

                <div class="admission-form">
                    <h5>Share a few details so we can get in touch with you</h5>

                    <div class="form-container text-center">
                        <form action="" method="post" id="admissionForm" onsubmit="return admissionValidation();">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                    <input type="text" class="form-control" name="name" placeholder="Name" id="name" required>
                                    <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid name</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                    <input type="number" min="0" class="form-control" name="phone" placeholder="Contact Number" id="phone" required>
                                    <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid contact number</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                                    <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid email address</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                    <input type="text" class="form-control" name="course" placeholder="Course Interest" id="course" required>
                                    <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid course interest</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding">
                                    <input type="text" class="form-control" name="career" placeholder="Career Interest" id="career" required>
                                    <span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid career interest</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <button type="submit" class="btn btn-default admission-submit" name="admission-form">Submit &rarr;</button>
                                </div>
                            </div>

                        </form> 
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php
        //error_reporting(E_ALL ^ E_NOTICE);
        if(isset($_POST['admission-form']))
        {
          $name=trim(mysqli_real_escape_string($conn, $_POST['name']));
          $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
          $phone=trim(mysqli_real_escape_string($conn, $_POST['phone']));
          $course=trim(mysqli_real_escape_string($conn, $_POST['course']));
		  $career=trim(mysqli_real_escape_string($conn, $_POST['career']));
		  
			$sql = 'SELECT * FROM amd_admission WHERE admission_email = "'.$email.'"';
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo '
					<div id="myModal" class="modal fade in" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close admission-close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sorry!</h4>
							</div>
							<div class="modal-body">
							<p>You have already sent the admission form!</p>
							</div>
						</div>
					
						</div>
					</div>
					';
			}
			else{
				if(isset($_GET['fbclid'])){
					$sql = "INSERT INTO amd_admission (admission_name, admission_email, admission_phone, admission_course, admission_career, admission_source) VALUES ('".$name."', '".$email."', '".$phone."', '".$course."', '".$career."', 'facebook' )";
				}
				else {
					$sql = "INSERT INTO amd_admission (admission_name, admission_email, admission_phone, admission_course, admission_career) VALUES ('".$name."', '".$email."', '".$phone."', '".$course."', '".$career."')";
				}
				mysqli_query($conn, $sql);
         
				$message ="<table width=80%  border=0 cellspacing=0 cellpadding=0 style='background:#FFFFFF; border: 1px solid #112f4a; margin: 0 auto;'>
				<tr>
				<td colspan=2 align=center style='padding: 10px 0;'><img src='http://amd.edu.in/img/logo.png' width='100'></td>
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
                <td style='padding:20px;' >Course Interest : </td>
                <td style='padding:20px;' colspan=2>$course</td>
                </tr>
                <tr style='background:#F0F0F0;'>
                <td style='padding:20px;' >Career Interest : </td>
                <td style='padding:20px;' colspan=2>$career</td>
                </tr>
				
				<tr>
				<td colspan=2 align=center style='background:#112f4a; padding:10px; text-align:center; color: #FFFFFF;' >
				&copy; Academy of Media and Design Ltd.
				</td>
				</tr>
				</table>
				";

				$message_user ="<table width=80%  border=0 cellspacing=0 cellpadding=0 style='background:#112f4a; margin: 0 auto; padding:50px 0'>
				
				<tr>
					<td align=left style='background:#112f4a; padding: 30px 70px;' >
						<div><img src='http://amd.edu.in/img/logo-white.png' width='150' style='margin-bottom: 50px' /></div>
						<div style='padding:0 20px; border-left: 5px solid #76b72a;color:#FFFFFF;'>
							<p style='color:#FFFFFF;'>Dear $name,</p><br>

							<p style='color:#FFFFFF;'>Thank you for sharing your details with us. Our Academic Councellor will get in touch with you soon!</p><br>
							
							<p style='color:#FFFFFF;'>Meanwhile check our AMD, where the industry looks for creative minds!</p><br>
													
						</div>

						<div>
							<p style='text-align: right;margin-top: 50px; margin-bottom: 50px;color:#FFFFFF;'>Team AMD</p>
							<p>
								<img src='http://amd.edu.in/img/email/approved-partners.png' height='50' />
								<img src='http://amd.edu.in/img/email/acta.jpg' height='50' />
							</p>
						</div>
					</td>
                </tr>
                
				<tr>
				<td colspan=2 align=center style='background:#112f4a; padding:10px; text-align:center; color: #FFFFFF;' >
				</td>
				</tr>
				</table>
				";

				$tomail="amdcampusonline@gmail.com";
				//$tomail="albertef@gmail.com";
				$subject="AMD Admission";
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From:".$email;

				$tomail1= $email;
				$subject1="Your choice can change your future";
				$headers1 = "MIME-Version: 1.0\r\n";
				$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers1 .= "From:admission@amd.edu.in";

				mail($tomail1, $subject1, $message_user, $headers1);
         
				if(mail($tomail, $subject, $message, $headers))
				{
					echo '
					<div id="myModal" class="modal fade in" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close registration-close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Great!</h4>
							</div>
							<div class="modal-body">
							<p>You have successfully entered your details! Please give us a few hours to assign a councellor for you.<br><br>
							We will get back to you soon!</p>
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
						<button type="button" class="close registration-close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Sorry!</h4>
						</div>
						<div class="modal-body">
						<p>Sending your details failed. Please try after some time.</p>
						</div>
					</div>
				
					</div>
				</div>';
				}
			}
        }

    ?>

<?php include ("includes/footer.php"); ?>
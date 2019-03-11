
	<div class="footer">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding">
			<h5>USEFUL LINKS</h5>
			<p>
				<a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About AMD</a>
				<a class="<?= ($activePage == 'courses' || $activePage == 'course-details') ? 'active':''; ?>" href="courses.php">Courses</a>
				<a class="<?= ($activePage == 'faculty') ? 'active':''; ?>" href="faculty.php">Faculty</a>
				<a class="<?= ($activePage == 'campus') ? 'active':''; ?>" href="campus.php">Creative Hub</a>
				<a class="<?= ($activePage == 'gallery') ? 'active':''; ?>" href="gallery.php">Gallery</a>
				<a class="<?= ($activePage == 'placements') ? 'active':''; ?>" href="placements.php">Placements</a>
				<a class="<?= ($activePage == 'powerhouse') ? 'active':''; ?>" href="powerhouse.php">Powerhouse</a>
				<a class="<?= ($activePage == 'news' || $activePage == 'news-view') ? 'active':''; ?>" href="news.php">News & Events</a>
				<a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Get In Touch</a>
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding">
			<h5>CONTACT US</h5>
			<p>
				<!-- <strong>Corporate Office :</strong> <br> -->
				Deshabhimani Junction, Kaloor<br> 
				Cochin - 682017 <br> 
				<em class="seperator"></em>
				Next to Kalyan Silks, Railway Station Road<br>
				Palakkad - 678001<br>
				<em class="seperator"></em>
				<strong>Tel :</strong> 09656 039 944 / 09656 099 333<br> 
				<strong>Email :</strong> info@amd.edu.in
				
			</p>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 no-padding subscribe">
			<h5>SUBSCRIBE TO OUR NEWSLETTERS</h5>
			<p>Enter your Email in the box below to receive the latest news and information about our activities and events.</p>
			<form method="post" action="" id="newsletterForm">
				<p>
					<input type="email" placeholder="Email" name="newsEmail" required>
					<button class="btn" value="SUBSCRIBE" type="submit" name="newsletterBtn">SUBSCRIBE</button>
				</p>
			</form>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 no-padding">
			<h5>FOLLOW US</h5>
			<p class="social-icons">
				<a href="https://www.facebook.com/amdcampus/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="http://www.instagram.com/amdcampus/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<!-- <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
			</p>
		</div>
		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding copy-right">
			Copyright &copy; <script>document.write(new Date().getFullYear());</script> Academy of Media and Design. All rights reserved
		</div>
	</div>
</div>

<?php
        //error_reporting(E_ALL ^ E_NOTICE);
        if(isset($_POST['newsletterBtn']))
        {
		  $email=trim(mysqli_real_escape_string($conn, $_POST['newsEmail']));

			$sql = 'SELECT * FROM amd_newsletter WHERE newsletter_email = "'.$email.'"';
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo '
					<div id="myModal" class="modal fade in" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sorry!</h4>
							</div>
							<div class="modal-body">
							<p>You\'re already subscribed to the newsletter. </p>
							</div>
						</div>
					
						</div>
					</div>
					';
			}
			else{
				$sql = "INSERT INTO amd_newsletter (newsletter_email) VALUES ('".$email."')";
				mysqli_query($conn, $sql);
         
				$message ="<table width=80%  border=0 cellspacing=0 cellpadding=0 style='background:#FFF; border: 1px solid #112f4a; margin: 0 auto;'>
				<tr>
				<td colspan=2 align=center style='padding: 10px 0;'><img src='http://amd.edu.in/img/logo.png' width='100'></td>
				</tr>
				<tr>
				<td colspan=2 align=center style='background:#112f4a; height:5px;' ></td>
				</tr>
				<tr>
				<td style='padding:20px;' >You're successfully subscribed to the newsletter </td>
				</tr>
				<tr>
				<td colspan=2 align=center style='background:#112f4a; padding:10px; text-align:center; color: #FFF;' >
				&copy; Academy of Media and Design Ltd.
				</td>
				</tr>
				</table>
				";

				$tomail=$email;
				$subject="AMD Newsletter";
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: info@amd.edu.in";
         
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
							<p>You\'re subscribed to the newsletter successfully. </p>
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
        }

    ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type='text/javascript' src='js/ug/unitegallery.min.js'></script> 
<script type='text/javascript' src='js/ug/ug-theme-tiles.js'></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript"> 
			
	$(document).ready(function(){ 
		$("#gallery").unitegallery(); 
	}); 

</script>

</body>
</html>


	<div class="footer">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding">
			<h5>CONTACT US</h5>
			<p>
				<strong>Corporate Office :</strong> <br>
				333, Atrium Tower, Cochin, Kerala, INDIA<br> 
				<strong>Tel :</strong> 0091 50 5565139   &nbsp;&nbsp; <strong>Fax :</strong> 0091 50 5565139<br>
				<strong>Email :</strong> info@amd.edu.in
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no-padding">
			<h5>USFUL LINKS</h5>
			<p>
				<a href="#">About AMD</a>
				<a href="#">Placements</a>
				<a href="#">Courses</a>
				<!-- <a href="#">Testimonials</a>
				<a href="#">AMD Blog</a> -->
				<a href="#">Faculty</a>
				<!-- <a href="#">Life@AMD</a>
				<a href="#">Careers</a> -->
				<a href="#">Campus</a>
				<a href="#">Contact Us</a>
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 no-padding subscribe">
			<h5>SUBSCRIBE TO OUR NEWSLETTERS</h5>
			<p>Enter your email in the box below to receive the latest news and information about our activities and events.</p>
			<form method="post" action="" id="newsletterForm">
				<p>
					<input type="email" placeholder="Email" name="newsEmail" required>
					<button class="btn" value="SUBSCRIBE" type="submit" name="newsletterBtn">SUBSCRIBE &rarr;</button>
				</p>
			</form>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 no-padding">
			<h5>FOLLOW US</h5>
			<p class="social-icons">
				<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</p>
		</div>
		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding copy-right">
			Copyright &copy; <script>document.write(new Date().getFullYear());</script> Academy of Media and Design Ltd. All rights reserved
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
				<td colspan=2 align=center style='padding: 10px 0;'><img src='http://vibrantangle.com/amd/img/logo.png' width='100'></td>
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
				$headers .= "From: newsletter@amd.edu.in";
         
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
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c56f5857cf662208c93d9d8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>

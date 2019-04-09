<?php 
    include "lib/connection.php";
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>AMD - Academy of Media and Design | AMD Palakkad Launch Registration </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="register-page">

<div class="overlay"></div>

<div class="container-fluid no-padding">

    	<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center">
    		<a href="index.php"><img src="img/logo-white.png" class="img-responsive logo"></a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 hide">
			<div class="seminar-content">

				<p>Thank you for showing interest in the Seminar conducted as part of the AMD launch celebrations.</p>

				<p>Following are the topics that will be discussed</p>

				<ul>
					<li>Designing apps and prototypes in Adobe XD</li>
					<li>Creating photorealistic renders of product packaging using Adobe Dimensions</li>
					<li>Use of AI/ML to help with tedious, time consuming tasks in Adobe Photoshop, Illustrator and Premiere Pro.</li>
				</ul>

				<p>Don't miss out on this opportunity. Fill in your details TODAY and book your seats before they are all gone!!</p>
			</div>
		</div>

		
		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
			<div class="form-container text-center">
				<form action="" method="post" id="seminarForm" onsubmit="return seminarValidation();">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name" id="name" required>
						<span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid name</span>
					</div>
					<div class="form-group">
						<input type="number" min="0" class="form-control" name="phone" placeholder="Contact Number" id="phone" required>
						<span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid contact number</span>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
						<span class="courseError"><i class="fa fa-exclamation" aria-hidden="true"></i> Please enter a valid email address</span>
					</div>
					
					<button type="submit" class="btn btn-default form-send" name="register-form">Register &rarr;</button>
				</form> 
			</div>
		</div>

    

</div>

<?php
        //error_reporting(E_ALL ^ E_NOTICE);
        if(isset($_POST['register-form']))
        {
          $name=trim(mysqli_real_escape_string($conn, $_POST['name']));
          $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
          $phone=trim(mysqli_real_escape_string($conn, $_POST['phone']));

			$sql = 'SELECT * FROM amd_palakkad_register WHERE register_email = "'.$email.'"';
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo '
					<div id="myModal" class="modal fade in" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close registration-close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sorry!</h4>
							</div>
							<div class="modal-body">
							<p>You have already registered for the event!</p>
							</div>
						</div>
					
						</div>
					</div>
					';
			}
			else{
				$sql = "INSERT INTO amd_palakkad_register (register_name, register_email, register_phone) VALUES ('".$name."', '".$email."', '".$phone."')";
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
							<p style='color:#FFFFFF;'>Dear Sir/ Ma'am,</p><br>

							<p style='color:#FFFFFF;'>Congratulations! Your seat for the Adobe seminar by Mr Guru Vaidya has been officially registered. This seminar on 'Everything you need, to go from dreaming to doing' has been organised by Academy of Media and Design in connection with our launch celebrations.</p><br>
							
							<p style='color:#FFFFFF;'>AMD is Kerala's first Adobe certified creative academy, and is one of the finest institutions that is dedicated to nurturing the creative minds. With our affiliation to Media and Entertainment Skills Council (NSDC) and Skill India certifications, we aim to provide industry standard training and certification to our students.</p><br>
							
							<p style='color:#FFFFFF;'>Following are topics that will be discussed at the seminar</p>

							<ul>
								<li style='color:#FFFFFF;'>Designing apps and prototypes in Adobe XD</li>
								<li style='color:#FFFFFF;'>Creating photorealistic renders of product packaging using Adobe Dimensions</li>
								<li style='color:#FFFFFF;'>Use of AI/ML to help with tedious, time-consuming tasks in Adobe Photoshop, Illustrator and Premiere Pro</li>
							</ul>

							<p style='color:#FFFFFF;'>The event is scheduled on March 4 2019, at Holiday Inn, Kochi, starting 11:45 AM to 3:30 PM and is inclusive of lunch and high tea.</p><br>

							<p style='color:#FFFFFF;'>Thank you for registering with us. See you at the event.</p><br>
						
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
				$subject="AMD Palakkad Launch Registration";
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From:".$email;

				$tomail1= $email;
				$subject1="Your chance to be better at ADOBE is here";
				$headers1 = "MIME-Version: 1.0\r\n";
				$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers1 .= "From:registration@amd.edu.in";

				//mail($tomail1, $subject1, $message_user, $headers1);
         
				if(mail($tomail, $subject, $message, $headers))
				{
					echo '
					<div id="myModal" class="modal fade in" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close registration-close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Congratulations!</h4>
							</div>
							<div class="modal-body">
							<p>You have successfully registered for the event! Meanwhile, head over to the <a href="http://www.amd.edu.in">AMD website</a> and find out more about us. <br><br>
							We look forward to having you at the event!</p>
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
						<p>Registration failed. Please try after some time.</p>
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
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>

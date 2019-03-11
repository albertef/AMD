<?php 
    ob_start();
    include "lib/connection.php";
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>AMD - Academy of Media and Design </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel='stylesheet' href='css/ug/unite-gallery.css'> 
    <link rel="stylesheet" href="css/main.css">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '248758162680060');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=248758162680060&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134996389-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-134996389-1');
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c58857b6cb1ff3c14cb16d8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</head>
<body>
<div class="left-bar-fixed col-xs-12 col-sm-12 col-md-2 col-lg-2 no-padding desktop">
<a href="index.php"><img src="img/logo.png" class="img-responsive logo"></a>
	<?php include ("nav.php"); ?>
	<div class="social-icons text-center">
        <a href="https://www.facebook.com/amdcampus/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="http://www.instagram.com/amdcampus/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<!-- <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
	</div>
</div>

<div class="left-bar-fixed col-xs-12 col-sm-12 col-md-2 col-lg-2 no-padding mobile site-header">
    <a href="index.php"><img src="img/logo.png" class="img-responsive logo"></a>
    <a class="fa-bars">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </a>
    
	<?php include("nav.php"); ?>
</div>

<div class="overlay"></div>

<ul class="second-menu hide">
    <li class="hide"><a>Student Login</a> |</li>    
    <li><a href="#">AMD Blog</a> |</li>
    <li><a href="career.php">Careers</a></li>
</ul>

<div class="container-fluid no-padding">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 no-padding right-container">
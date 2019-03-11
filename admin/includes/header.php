<?php 
	include "../lib/connection.php";
	$activePage = basename($_SERVER['PHP_SELF'], ".php");

	session_start();

	if(isset($_GET["logout"])){
		session_destroy();
		header("location:login.php");
	}

	if(!isset($_SESSION["amd_login_user"])){
		header("location:login.php");
	}

	include "../lib/image-upload.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>ADMIN - AMD - Academy of Media and Design</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/admin.css">

	<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="left-bar-fixed col-xs-12 col-sm-12 col-md-2 col-lg-2 no-padding desktop">
<a href="index.php"><img src="../img/logo.png" class="img-responsive logo"></a>
	<?php include ("nav.php"); ?>
</div>
<div class="container-fluid no-padding">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 no-padding right-container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 welcome-user text-right">
			<span class="login-user">Welcome <span><?php echo $_SESSION["amd_login_user"]; ?></span>! <a href="?logout=true">Logout</a></span>
		</div>
<?
include "conf/sqlconf.php";
include "conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
<script src="<?php print($sitePath)?>libs/jquery-3.5.1.min.js" ></script>
<script src="<?php print($sitePath)?>libs/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js" ></script>
<script src="<?php print($sitePath)?>js/hideWidgets.js"></script>
<script src="<?php print($sitePath)?>js/index.js"></script>
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
			<?php include "includes/widgets.php" ?>
			<div class="contentContainer">
			<div class="createPostFormContainer">
				<h2>Contact</h2>
				</div>
				<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=University%20of%20Derby,%20Kedleston%20Road,%20Derby,%20DE22%201GB+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
					</div>
  
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
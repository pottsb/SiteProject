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
	<link rel="stylesheet" href="libs/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
<script src="libs/jquery-3.5.1.min.js" ></script>
<script src="libs/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js" ></script>
<script src="js/hideWidgets.js"></script>
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
			<?php include "includes/widgets.php" ?>
			<div class="contentContainer">
				<div class="contentInnerContainer">
					<h2>Contact</h2>
					<hr>
				</div>
				<div id="map-container" class="z-depth-1-half map-container">
 	 				<iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=University%20of%20Derby,%20Kedleston%20Road,%20Derby,%20DE22%201GB+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contentColContainer">
					<div class="contentCollumn3">
						<div class="sociallink"><img src="images/icons/mappin.png" height="35"></div>
						<p>University of Derby<br>
						Kedleston Rd<br>
						Derby DE22 1GB</p>
					</div>
					<div class="contentCollumn3">
						<div class="sociallink"><img src="images/icons/phone.png" height="35"></div>
						<p>01332 123456<br>
						071234567</p>
					</div>
					<div class="contentCollumn3">
						<div class="sociallink"><img src="images/icons/email.png" height="35"></div>
						<p>hello@company.tld<br>
						sales@company.tld</p>
					</div>

				</div>	
				<form class="needs-validation" novalidate>
				<div class="contentInnerContainer">
					<h2>Drop us a message?</h2>
					<hr>
					Message:<br>
					<textarea name="message" class="form-control" rows="10" required></textarea>
					<div class="valid-feedback">
					Looks good!
					</div>
					<div class="invalid-feedback">
					Please enter your message.
					</div>
					
					<br>
					<div class="createPostFormCol">
						Name: <input type="text" class="form-control" id="name" name="name" required>
						<div class="valid-feedback">
						Looks good!
						</div>
						<div class="invalid-feedback">
						Please enter your name.
						</div>
					</div>
					<div class="createPostFormCol">
						Email: <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
						<div class="valid-feedback">
						Looks good!
						</div>
						<div class="invalid-feedback">
      					  Please enter a valid email.
    			 		  </div>
					</div>
					<div class="createPostFormCol">
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					  </form>
					  <script src="js/validation.js"></script>
				</div>
					
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
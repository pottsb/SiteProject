<?
include "conf/sqlconf.php";
include "conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Products</title>
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
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
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
					<h2>Products</h2>
					<hr>
				</div>
			
			
				
				<div class="postColContainer">
					<div class="postCollumn2">
						<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/RXJKdh1KZ0w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="postCollumn2 vcenter">
						<h4>Retro Encabulator</h4>
						<p>It's so good!!</p>
					</div>
				</div>	
				<div class="postColContainer">
					<div class="postCollumn2 vcenter">
						<h4>Turbo Encabulator V2</h4>
						<p>It's so good!!</p>
					</div>
					<div class="postCollumn2">
						<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/MXW0bx_Ooq4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="postColContainer">
					<div class="postCollumn2">
					<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/Ac7G7xOG2Ag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="postCollumn2 vcenter">
						<h4>Turbo Encabulator</h4>
						<p>It's so good!!</p>
					</div>
				</div>
				<div class="postColContainer">
					<div class="postCollumn2  vcenter">
						<h4>Turbo Cycle</h4>
						<p>Build using our world famous Encabulator!</p>
					</div>
					<div class="postCollumn2">
					<model-viewer src="<?php print($sitePath)?>images/TheRocket.glb" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer>
					</div>
				</div>					
			</div>	
				
			
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
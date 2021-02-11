<? include "../../conf/mainconf.php"; ?>
<html>
<head>
	<title>Site Admin</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-3.4.1-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php print($sitePath)?>style/style.css">
	
</head>
<body>
<script src="<?php print($sitePath)?>libs/jquery-3.5.1.min.js" ></script>
<script src="<?php print($sitePath)?>js/hideWidgets.js"></script>
<script src="<?php print($sitePath)?>js/index.js"></script>
	<div class="mainContainer">
		<?php include "../../includes/header.php" ?>
		<?php include "../includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../../includes/widgets.php" ?>
			<div class="contentContainer">
				<?
				include "../../conf/sqlconf.php";

				$sql = "DELETE from posts where id='$_POST[postid]'";

				if ($conn->query($sql) === TRUE) {
				  echo "Post successfully deleted.";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
				?>			
			</div>
		</div>
		<?php include "../../includes/footer.php" ?>
	</div>
</body>
</html>
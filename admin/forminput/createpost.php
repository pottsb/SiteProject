<? include "../../conf/mainconf.php"; ?>
<html>
<head>
	<title>Site Admin</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='<?php print($sitePath)?>favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php print($sitePath)?>style/style.css">
	
</head>
<body>
<script src="<?php print($sitePath)?>libs/jquery-3.5.1.min.js" ></script>
<script src="<?php print($sitePath)?>libs/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js" ></script>
<script src="<?php print($sitePath)?>js/hideWidgets.js"></script>
<script src="<?php print($sitePath)?>js/index.js"></script>
	<div class="mainContainer">
		<?php include "../../includes/header.php" ?>
		<?php include "../includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../../includes/widgets.php" ?>
			<div class="contentContainer">
				<div class="contentInnerContainer">
					<?
					include "../../conf/sqlconf.php";
					$imgurl = $_POST["imgurl"] ?? 'null';

					$sql = "INSERT INTO posts (title, imgurl, message, author, date)
					VALUES ('$_POST[title]', '$imgurl', '$_POST[message]', '$_POST[author]', '$_POST[date]')";

					if ($conn->query($sql) === TRUE) {
					echo "<h3>Post created successfully.</h3>";
					echo'<p>You will be redirected in <span id="counter">2</span> second(s).</p>';
					} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
					?>
					<script src="<?php print($sitePath)?>js/adminredirect.js"></script>
				</div>	
			</div>
		</div>
		<?php include "../../includes/footer.php" ?>
	</div>
</body>
</html>
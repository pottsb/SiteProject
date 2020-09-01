<html>
<head>
	<title>Site Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="../../style/style.css">
	
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../../js/hideWidgets.js"></script>
<script src="../../js/index.js"></script>
	<div class="mainContainer">
		<?php include "../../includes/header.php" ?>
		<?php include "../includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../../includes/widgets.php" ?>
			<div class="contentContainer">
				<?
				include "../../conf/sqlconf.php";
				$imgurl = $_POST["imgurl"] ?? 'null';

				$sql = "INSERT INTO posts (title, imgurl, message, author, date)
				VALUES ('$_POST[title]', '$imgurl', '$_POST[message]', '$_POST[author]', '$_POST[date]')";

				if ($conn->query($sql) === TRUE) {
				  echo "New post created successfully";
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
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
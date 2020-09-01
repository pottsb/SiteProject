<?
include "../conf/sqlconf.php";
$mydate=getdate();


?>
<html>
<head>
	<title>Create Post</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="../style/style.css">
	
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/hideWidgets.js"></script>
<script src="../js/index.js"></script>
	<div class="mainContainer">
		<?php include "../includes/header.php" ?>
		<?php include "includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../includes/widgets.php" ?>
			<div class="contentContainer">
				<div class="createPostFormContainer">
					<form action="forminput/createpost.php" method="post" target="_self">
					Title:<br>
					<input type="text" name="title" size="97"><br>
					Image URL:<br>
					<input type="text" name="imgurl" size="97"><br>
					Post:<br>
					<textarea name="message" rows="20" cols="105"></textarea><br>
					<br>
					Author: <input type="text" name="author">   Date: <input type="text" name="date" value ="<?echo "$mydate[year]-$mydate[mon]-$mydate[mday]";?>"><br>
					<br>
					<input type="submit">
					</form>
				</div>
			</div>
		</div>
		<?php include "../includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
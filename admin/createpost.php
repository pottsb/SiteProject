<?
include "../conf/sqlconf.php";
include "../conf/mainconf.php";
$mydate=getdate();
?>
<html>
<head>
	<title>Create Post</title>
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
		<?php include "../includes/header.php" ?>
		<?php include "includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../includes/widgets.php" ?>
			<div class="contentContainer">
			
				<div class="contentInnerContainer">
				<h2>Create Post</h2>
					<form action="forminput/createpost.php" method="post" target="_self">
					Title:<br>
					<input type="text" name="title" class="form-control" size="97">
					Image URL:<br>
					<div class="input-group">
						<span class="input-group-text"><?php print($sitePath)?></span>
						<input type="text" name="imgurl" class="form-control">
					</div>
					Post:<br>
					<textarea name="message" class="form-control" rows="20"></textarea><br>
					<div class="createPostFormCol">
						Author: <input type="text" class="form-control" name="author">
					</div>
					<div class="createPostFormCol">
						Date: <input type="text" class="form-control" name="date" value ="<?echo "$mydate[year]-$mydate[mon]-$mydate[mday]";?>">
					</div>
					<div class="createPostFormCol">
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					
					</form>
				</div>
			</div>
		</div>
		<?php include "../includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
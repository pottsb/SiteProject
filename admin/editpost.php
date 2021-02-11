<?
include "../conf/sqlconf.php";
include "../conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date from posts where id='$_POST[postid]'";
$result = $conn->query($sql);

$mydate=getdate();

$row = $result->fetch_assoc();
?>
<html>
<head>
	<title>Edit Post</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-3.4.1-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="../style/style.css">
	
</head>
<body>
<script src="<?php print($sitePath)?>libs/jquery-3.5.1.min.js" ></script>
<script src="<?php print($sitePath)?>js/hideWidgets.js"></script>
<script src="<?php print($sitePath)?>js/index.js"></script>
	<div class="mainContainer">
		<?php include "../includes/header.php" ?>
		<?php include "includes/adminlinkbar.php" ?>
		<div class="bodyContainer">
			<?php include "../includes/widgets.php" ?>
			<div class="contentContainer">
				<div class="createPostFormContainer">
					<form action="forminput/editpost.php" method="post" target="_self">
					Title:<br>
					<input type="text" name="title" size="97" value ="<?echo $row["title"];?>"><br>
					Image URL:<br>
					<input type="text" name="imgurl" size="97" value ="<?echo $row["imgurl"];?>"><br>
					Post:<br>
					<textarea name="message" rows="20" cols="105"><?echo $row["message"];?></textarea><br>
					<br>
					Author: <input type="text" name="author" value ="<?echo $row["author"];?>">   Date: <input type="text" name="date" value ="<?echo $row["date"];?>"><br>
					<br>
					<input type="hidden" name="postid" value="<?echo $_POST["postid"];?>">
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
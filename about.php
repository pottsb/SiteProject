<?
include "conf/sqlconf.php";
include "conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>About</title>
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
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
			<?php include "includes/widgets.php" ?>
			<div class="contentContainer">
			<div class="createPostFormContainer">
				<h2>About</h2>
			Aliquam vel molestie eros. Integer ut mollis lectus, et fringilla justo. Fusce ornare accumsan ante, non tincidunt massa iaculis at. Suspendisse ultrices nulla ac vestibulum pellentesque. Ut blandit tempor tortor et porta. In lacinia mi lacus, posuere rutrum risus pharetra nec. Quisque nec convallis metus, sed vulputate enim. Nunc aliquet lobortis semper. Sed a semper urna. In nec elit porta, convallis risus vitae, lacinia felis. Aliquam placerat, nunc quis sollicitudin porttitor, erat lacus ornare ligula, nec congue orci risus id est. Sed mollis, enim ac dapibus tempus, neque ex facilisis elit, eu sagittis est mi at leo. Vestibulum lectus lacus, porttitor eu sodales eget, viverra et justo. Phasellus varius iaculis urna eu aliquam. Morbi porttitor laoreet magna, quis eleifend sem tincidunt in. Nunc quis mauris at turpis porttitor imperdiet eget vel purus.
</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
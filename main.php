<?
include "conf/sqlconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY ID desc";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
			<?php include "includes/widgets.php" ?>
			<div class="contentContainer">
				<?
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if (!$row["imgurl"]){ $imgHidden = "hidden";} else{$imgHidden = "";}
						echo '
						<div class="postContainer">
							<div class ="postTitle">
							<h2> '. $row["title"] .' </h2>
							</div>
							<div class="postImage"   >
							<a href="'. $row["imgurl"] .'"><img src="'. $row["imgurl"] .'"></a>
							</div>
							<div class="postContent">
							<p>'. $row["message"].'</p>
							</div>
							<div class="postFooter">
							<p>Author:  '. $row["author"].'  - Date:  '. $row["date"].'</p>
							</div>
						</div>
						';
					}
				} else {
				  echo "0 results";
				}
				?>

			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
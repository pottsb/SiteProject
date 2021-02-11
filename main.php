<?
include "conf/sqlconf.php";
include "conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-3.4.1-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
<script src="<?php print($sitePath)?>libs/jquery-3.5.1.min.js" ></script>
<script src="<?php print($sitePath)?>libs/bootstrap-3.4.1-dist/js/bootstrap.min.js" ></script>
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
			<?php include "includes/widgets.php" ?>
			<div class="contentContainer">
				<?
				
				$rownum = 0;
				$pagenum = isset($_GET["page"]) ? $_GET["page"] : 1;
				$postnumstart = (($pagenum * $postsperpage) - $postsperpage);
				$postnumend = (($pagenum * $postsperpage)-1);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if($rownum >= $postnumstart and $rownum  <= $postnumend) {
							//if (!$row["imgurl"]){ $imgHidden = "hidden";} else{$imgHidden = "";}
							echo '
							<div class="postContainer">
								<div class ="postTitle">
								<h2> '. $row["title"] .'</h2>
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
						$rownum++;
					}
				} else {
				  echo "0 results";
				}
				include "includes/pagenav.php"
				?>
			
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
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
	<link rel="stylesheet" href="libs/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="style/style.css">
	
</head>
<body>
<script src="libs/jquery-3.5.1.min.js" ></script>
<script src="libs/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js" ></script>
<script src="js/index.js"></script>
	<div class="mainContainer">
		<?php include "includes/header.php" ?>
		<?php include "includes/linkbar.php" ?>
		<div class="bodyContainer">
		<div class="carouselContainer carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php print($sitePath)?>images/urbex/IMG_4636.jpg" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?php print($sitePath)?>images/urbex/IMG_2726.jpg" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?php print($sitePath)?>images/urbex/IMG_1194.jpg" class="d-block w-100">
				</div>
			</div>
		</div>
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
							$img = null;
							if ($row["imgurl"]){ $img = '<div class="postImage"><a href="'. $row["imgurl"] .'"><img class="card-img-top" src="'. $row["imgurl"] .'" alt="Card image cap"></a></div>';}
							echo '
							<div class="postContainer">
								<div class="card">

								'.$img.'
								
								<div class="card-body">
								  <h5 class="card-title">'. $row["title"] .'</h5>
								  <h6 class="card-subtitle mb-2 text-muted">Author:  '. $row["author"].'  |  Date:  '. $row["date"].'</h6>
								  <p class="card-text">'. $row["message"].'</p>
								  
								</div>

	
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
<?
include "../conf/sqlconf.php";
include "../conf/mainconf.php";
$sql = "SELECT id, title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Site Admin</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="stylesheet" href="<?php print($sitePath)?>libs/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="../style/style.css">
	
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
			<h2>Manage Posts</h2>
								<table cellpadding = "3" class="table">
								<tbody>
								<tr>
								<td><h4>Title</h4></td>
								<td><h4>Image URL</h4></td>
								<td><h4>Content</h4></td>
								<td><h4>Author</h4></td>
								<td><h4>Date</h4></td>
								</tr>
				<?
				$postsperpage = $postsperpage * 2;
				$rownum = 0;
				$pagenum = isset($_GET["page"]) ? $_GET["page"] : 1;
				$postnumstart = (($pagenum * $postsperpage) - $postsperpage);
				$postnumend = (($pagenum * $postsperpage)-1);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if($rownum >= $postnumstart and $rownum  <= $postnumend) {
							if (!$row["imgurl"]){ $imgHidden = "hidden";} else{$imgHidden = "";}
							echo '
										<tr>
											<td> '. $row["title"] .' </td>
											<td> '. $row["imgurl"] .'</td>
											<td>'. substr($row["message"], 0, 200) .'... </td>
											<td>'. $row["author"].' </td>
											<td>'. $row["date"].' </td>
											<td><form action="editpost.php" method="post"><input type="hidden" name="postid" value="'.$row["id"].'"><input type="submit" value="Edit"></form></td>
											<td><form action="forminput/deletepost.php" method="post" ><input type="hidden" name="postid" value="'.$row["id"].'"><input type="submit" value="Delete">
											</form></td>
										</tr>
							';
						}
						$rownum++;
					}
				} else {
				  echo "0 results";
				}
				
				?>
								</tbody>
							</table>
			</div>
			<? include "../includes/pagenav.php" ?>
		</div>
		<?php include "../includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
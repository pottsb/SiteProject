<?
include "../conf/sqlconf.php";
$sql = "SELECT id, title, imgurl, message, author, date FROM posts ORDER BY ID desc";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Site Admin</title>
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
								<table border = "1" cellpadding = "3">
								<tbody>
								<tr>
								<td>Title</td>
								<td>Image URL</td>
								<td>Content</td>
								<td>Author</td>
								<td>Date</td>
								</tr>
				<?
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
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
				} else {
				  echo "0 results";
				}
				?>
								</tbody>
							</table>
			</div>
		</div>
		<?php include "../includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
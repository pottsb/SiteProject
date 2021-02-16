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
					<hr>
					<p>Aliquam vel molestie eros. Integer ut mollis lectus, et fringilla justo. Fusce ornare accumsan ante, non tincidunt massa iaculis at. Suspendisse ultrices nulla ac vestibulum pellentesque. Ut blandit tempor tortor et porta. In lacinia mi lacus, posuere rutrum risus pharetra nec. Quisque nec convallis metus, sed vulputate enim. Nunc aliquet lobortis semper. Sed a semper urna. In nec elit porta, convallis risus vitae, lacinia felis. Aliquam placerat, nunc quis sollicitudin porttitor, erat lacus ornare ligula, nec congue orci risus id est. Sed mollis, enim ac dapibus tempus, neque ex facilisis elit, eu sagittis est mi at leo. Vestibulum lectus lacus, porttitor eu sodales eget, viverra et justo. Phasellus varius iaculis urna eu aliquam. Morbi porttitor laoreet magna, quis eleifend sem tincidunt in. Nunc quis mauris at turpis porttitor imperdiet eget vel purus.</p>
					<h2>Who we are</h2>
					<hr>
					<div class="postColContainer">
						<div class="postCollumn3">
							<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar2.png" id="profilePicture"></div>
							<h5>CEO</h5>
							<p>Person 1</p>
						</div>
						<div class="postCollumn3">
						<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar.png" id="profilePicture"></div>
							<h5>CFO</h5>
							<p>Person 2</p>
						</div>
						<div class="postCollumn3">
							<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar1.png" id="profilePicture"></div>
							<h5>CTO</h5>
							<p>Person 3</p>
						</div>
				</div>
				<div class="postColContainer">
						<div class="postCollumn3">
							<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar3.png" id="profilePicture"></div>
							<h5>Technical Manager</h5>
							<p>Person 4</p>
						</div>
						<div class="postCollumn3">
						<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar4.png" id="profilePicture"></div>
							<h5>Head of Sales</h5>
							<p>Person 5</p>
						</div>
						<div class="postCollumn3">
							<div class="sociallink"><img src="<?php print($sitePath)?>images/profiles/avatar.png" id="profilePicture"></div>
							<h5>Customer Relantions</h5>
							<p>Person 6</p>
						</div>
				</div>
				<h2>Our Values</h2>
				<hr>
				<p>Aliquam vel molestie eros. Integer ut mollis lectus, et fringilla justo. Fusce ornare accumsan ante, non tincidunt massa iaculis at. Suspendisse ultrices nulla ac vestibulum pellentesque. Ut blandit tempor tortor et porta. In lacinia mi lacus, posuere rutrum risus pharetra nec. Quisque nec convallis metus, sed vulputate enim. Nunc aliquet lobortis semper. Sed a semper urna. In nec elit porta, convallis risus vitae, lacinia felis. Aliquam placerat, nunc quis sollicitudin porttitor, erat lacus ornare ligula, nec congue orci risus id est. Sed mollis, enim ac dapibus tempus, neque ex facilisis elit, eu sagittis est mi at leo. Vestibulum lectus lacus, porttitor eu sodales eget, viverra et justo. Phasellus varius iaculis urna eu aliquam. Morbi porttitor laoreet magna, quis eleifend sem tincidunt in. Nunc quis mauris at turpis porttitor imperdiet eget vel purus.</p>
				<h2>Why Us?</h2>
				<hr>
				<p>Aliquam vel molestie eros. Integer ut mollis lectus, et fringilla justo. Fusce ornare accumsan ante, non tincidunt massa iaculis at. Suspendisse ultrices nulla ac vestibulum pellentesque. Ut blandit tempor tortor et porta. In lacinia mi lacus, posuere rutrum risus pharetra nec. Quisque nec convallis metus, sed vulputate enim. Nunc aliquet lobortis semper. Sed a semper urna. In nec elit porta, convallis risus vitae, lacinia felis. Aliquam placerat, nunc quis sollicitudin porttitor, erat lacus ornare ligula, nec congue orci risus id est. Sed mollis, enim ac dapibus tempus, neque ex facilisis elit, eu sagittis est mi at leo. Vestibulum lectus lacus, porttitor eu sodales eget, viverra et justo. Phasellus varius iaculis urna eu aliquam. Morbi porttitor laoreet magna, quis eleifend sem tincidunt in. Nunc quis mauris at turpis porttitor imperdiet eget vel purus.</p>
				<h2>What our clients are saying</h2>
				<hr>	
				<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height:300px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="text-align:center; padding-top: 10%">
          <div class="carousel-item active">

              <h5>Consonto Inc</h5>
              <p>Not that good but they're cheap AF.</p>
            
          </div>
          <div class="carousel-item">

              <h5>Tech Solutions LLC</h5>
              <p>We'd be out of bussiness without their inovative products.</p>
			  

          </div>
          <div class="carousel-item">

              <h5>Jon Eastoe</h5>
              <p>So good. Very Impressive</p>

          </div>
		  <div class="carousel-item">

		  <h5>eBay user</h5>
	      <p>A+++++ great eBayer</p>

	    	</div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
	  <p>Aliquam vel molestie eros. Integer ut mollis lectus, et fringilla justo. Fusce ornare accumsan ante, non tincidunt massa iaculis at. Suspendisse ultrices nulla ac vestibulum pellentesque. Ut blandit tempor tortor et porta. In lacinia mi lacus, posuere rutrum risus pharetra nec. Quisque nec convallis metus, sed vulputate enim. Nunc aliquet lobortis semper. Sed a semper urna. In nec elit porta, convallis risus vitae, lacinia felis. Aliquam placerat, nunc quis sollicitudin porttitor, erat lacus ornare ligula, nec congue orci risus id est. Sed mollis, enim ac dapibus tempus, neque ex facilisis elit, eu sagittis est mi at leo. Vestibulum lectus lacus, porttitor eu sodales eget, viverra et justo. Phasellus varius iaculis urna eu aliquam. Morbi porttitor laoreet magna, quis eleifend sem tincidunt in. Nunc quis mauris at turpis porttitor imperdiet eget vel purus.</p>
				
					
				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
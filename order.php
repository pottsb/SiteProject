<?
include "conf/sqlconf.php";
include "conf/mainconf.php";
$sql = "SELECT title, imgurl, message, author, date FROM posts ORDER BY date DESC, ID DESC";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>Order</title>
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
			<?php include "includes/ordertotal.php" ?>
			<div class="contentContainer">
				<div class="contentInnerContainer">
					<h2>Order</h2>
					<hr>
					<div class="postColContainer" style=" margin-bottom: 30px; overflow: hidden;">
						<div class="contentCollumn2">
							
							<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="images/product/therocket/1.jpg" class="d-block w-100" style="max-width:100%;max-height:100%;" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/product/therocket/2.jpg" class="d-block w-100" style="max-width:100%;max-height:100%;" alt="...">
								</div>
								<div class="carousel-item">
								<img src="images/product/therocket/3.jpg" class="d-block w-100" style="max-width:100%;max-height:100%;" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
							</div>
						</div>
						<div class="contentCollumn2 vcenter">
							<h4>The Rocket</h4>
							<p>Built using our world famous Encabulator!</p>
							<p class="redtext">Spend over £4000 and get a free Hula Girl for your dash!</p>
						</div>
					</div>
					
					<form novalidate>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Body Panels</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt1" textdata="Plastic" id="Opt1Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault1">
							<b>Plastic</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt1" textdata="Fibre Glass" id="Opt11" value="40" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Fibre Glass</b> - £40
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt1" textdata="Aluminium" id="Opt12" value="120" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Aluminium</b> - £120
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt1" textdata="Carbon Fibre" id="Opt13" value="600" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Carbon Fibre</b> - £600
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Seat Material</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt2" textdata="Cardboard" id="Opt2Default" value="-40">
							<label class="form-check-label" for="flexRadioDefault1">
							<b>Cardboard</b> - -£40
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt2" textdata="Two Tone Fabric" id="Opt21" value="0" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Fabric</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt2" textdata="Faux Leather" id="Opt22" value="120" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Faux Leather</b> - £120
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt2" textdata="Real Leather" id="Opt23" value="200" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Real Leather</b> - £200
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt2" textdata="Diamond Encrusted Silk" id="Opt24" value="800" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Diamond Encrusted Silk</b> - £800
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Entertainment pack</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt3" textdata="8 Track" id="Opt3Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault3">
							<b>8 Track</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt3" textdata="Tape Deck" id="Opt31" value="20" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Tape Deck</b> - £20
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt3" textdata="CD Changer" id="Opt32" value="80" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>CD Changer</b> - £80
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt3" textdata="Aux In" id="Opt33" value="120" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Aux In</b> - £120
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt3" textdata="Apple Car Play" id="Opt34" value="750" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Apple Car Play</b> - £750
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Stabilization</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt4" textdata="Aero dynamic" id="Opt4Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault1">
							<b>Aero dynamic</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt4" textdata="Electro Magnetic" id="Opt41" value="300" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Electro Magnetic</b> - £300
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt4" textdata="Flux Capacitive" id="Opt42" value="600" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Flux Capacitive</b> - £600
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Safety</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt5" textdata="Collision Detection" id="Opt5Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault1">
							<b>Collision Detection</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt5" textdata="Collision Avoidance" id="Opt51" value="250" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Collision Avoidance</b> - £250
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt5" textdata="AI Autopilot" id="Opt52" value="1000" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>AI Autopilot</b> - £1000
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Encabulator</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt6" textdata="Standard Encabulator" id="Opt6Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault1">
							<b>Standard Encabulator</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt6" textdata="Green Eco Encabulator" id="Opt61" value="400" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Green Eco Encabulator</b> - £400
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt6" textdata="Sport Encabulator" id="Opt62" value="800" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Sport Encabulator</b> - £800
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt6" textdata="Race Encabulator" id="Opt63" value="2200" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>Race Encabulator</b> - £2200
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Extras</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="checkbox" name="extra1" value="35" id="flexCheckDefault" textdata="Handel Bar Tassels<br>">
							<label class="form-check-label" for="flexCheckDefault">
							<b>Handel Bar Tassels</b> - £35
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="checkbox" name="extra2" value="99" id="flexCheckChecked" textdata="Spoiler<br>">
							<label class="form-check-label" for="flexCheckChecked">
							<b>Spoiler</b> - £99
							</label>
							</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="extra3" value="180" id="flexCheckDefault" textdata="Under Glow<br>">
							<label class="form-check-label" for="flexCheckDefault">
							<b>Under Glow</b> - £180
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="checkbox" name="extra4" value="169" id="flexCheckChecked" textdata="Subwoofer<br>">
							<label class="form-check-label" for="flexCheckChecked">
							<b>Subwoofer</b> - £169
							</label>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Warranty</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt7" textdata="2 Year Standard" id="Opt1Default" value=0 checked>
							<label class="form-check-label" for="flexRadioDefault1">
							<b>2 Year Standard</b> - £0 (Included in base price)
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt7" textdata="2 Year Support Plus " id="Opt71" value="400" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>2 Year Support Plus</b> - £400
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt7" textdata="5 Year Standard" id="Opt72" value="350" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>5 Year Standard</b> - £350
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="Opt7" textdata="5 Year Support Plus" id="Opt73" value="800" >
							<label class="form-check-label" for="flexRadioDefault2">
							<b>5 Year Support Plus</b> - £800
							</label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Buy Now!</button>
					</form>
					
					  <script src="js/order.js"></script>


				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</div>
</body>
</html>
<? $conn->close(); ?>
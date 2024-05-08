<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="assets/A.png"  />
		<title>TickSer</title>
		<link rel="stylesheet" href="css/style.css" />
  		

	</head>
	<body >
		<center>
			<header>
				<nav>
					<div class="logo">
						<img src="assets/A.png" alt=""width="75" height="auto" />
					</div>
					<a href="index.php">Home</a>
					<a href="#">Categories</a>
					<a href="log.php">Login</a>
				</nav>
			</header>
			<main>
				<div>
				    <h1>"Enjoy Concerts Hassle-Free with TickSer!"</h1> 
					<div class= "wrapper">
						<div class= "slider">
							<span id = "slide-1"></span>
							<span id = "slide-2"></span>
							<span id = "slide-3"></span>
							<span id = "slide-4"></span>
							<span id = "slide-5"></span>
							<span id = "slide-6"></span>
							<div class="cards-categories" id="carousel1">
								<div class="card1" >
									<img src="assets/C.png" alt="" width="600" height="250" />
								</div>
								<div class="card2">
									<img src="assets/J.jpg" alt="" width="600" height="250" />
								</div>
								<div class="card3">
									<img src="assets/K.jpg" alt="" width="600" height="250" />
								</div>
								<div class="card4">
									<img src="assets/L.jpg" alt="" width="600" height="250" />
								</div>
								<div class="card5">
									<img src="assets/M.jpg" alt="" width="600" height="250" />
								</div>
								<div class="card6">
									<img src="assets/N.jpg" alt="" width="600" height="250" />
								</div>
							</div>
							<div class = "navigation">
								<a href ="#slide-1">1</a>
								<a href ="#slide-2">2</a>
								<a href ="#slide-3">3</a>
								<a href ="#slide-4">4</a>
								<a href ="#slide-5">5</a>
								<a href ="#slide-6">6</a>
							</div>
						</div>
					</div>
					<div class ="startbtn" >
					<center id="jumbotronCenter"></center><br/>
					<button onclick="Functionindx()">Get Started</button>
					<script>
						function Functionindx() {alert("Selamat Datang di TickSer");}
					</script>
					</div>
				</div> 
			</main>
			<footer>
				<h4>&copy; TickSer </h4>
			</footer>
		</center>
		<script src="js/script.js"></script>
	</body>
</html>

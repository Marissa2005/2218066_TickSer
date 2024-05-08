<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="assets/A.png" />
		<title>TickSer</title>
		<link rel="stylesheet" href="css/style.css" />
  		<link rel="preconnect" href="https://fonts.googleapis.com" />
  		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet"/>
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	</head>
	<body>
  <center>
	<header>
		<nav>
			<div class="logo">
				<img src="assets/A.png" alt=""width="75" height="auto" />
			</div>
			<a href="index.php">Home</a>
			<a href="log.php">Sign In</a>
		</nav>
	</header>
	<main>
		<div class="form-Reg">
		<h3>Sign Up</h3>
		<input type="email" name="email" placeholder="Email" /> <br/> <br/>
        <input type="text" name="username" placeholder="Username" /> <br/> <br/>
	    <input type="password" name="password" placeholder="Password" /> <br/> <br/>
		<button onclick="FunctionReg()">Register</button>
		<p id="demo"></p>
		<script>
		  function FunctionReg() {
			let person = prompt("Silahkan masukkan kode verivikasi ");
			if (person != null) {
			  document.getElementById("demo").innerHTML = `Halo, selamat bergabung dengan TickSer`;
			}
		  }
		</script>
		</div>
	</main>
	<footer>
		<h4>&copy; TickSer 2024</h4>
	</footer>
   </center>
   <script src="js/script.js"></script>
	</body>
</html>


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
      	   <div class="form-Signin">
			 
		     <h3>Sign In</h3>
			 <form action="cookie.php" method="post" enctype="multipart/proses-log">
		     <input type="text" name="username" placeholder="Username" /> <br/> <br/>
		     <input type="password" name="password" placeholder="Password" /> <br/> <br/>
			<button onclick="FunctionLog()">Login</button>
			<p id="demo"></p>
			<script>
			  function FunctionLog() {
				let text = "";
				let pil = confirm("apakah ini benar Anda ?");
				if (pil == true) {
				  text = "Ya, Saya";
				} else {
				  text = "Tidak bukan saya";
				}
				document.getElementById("demo").innerHTML = text;
			  }
			</script>
             <a href="reg.php">Sign Up</a> <br/> <br/>
		    </div>
		</main>
		<footer>
			<h4>&copy; TickSer 2024</h4>
		</footer>
	</center>
	<script src="js/script.js"></script>
	</body>
</html>
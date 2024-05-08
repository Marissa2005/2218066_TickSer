<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="assets/C.png" />
  <link rel="stylesheet" href="css/admin.css" />
  <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TickSer Admin</title>
</head>
<body>
  <div class="sidebar">
     <div class="logo-details">
	   <i class="bx bx-category"></i>
	   <img src="assets/I.png" alt=""width="100" height="50" />
	   
     </div>
	<ul class="nav-links">
	   <li>
		<a href="#" class="active">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="categories/categories.php">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Categories</span>
		</a>
	   </li>
	   <li>
	      <a href="transaction/transaction.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Transaction</span>
		</a>
	   </li>
	   <li>
		<a href="#">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
	      <span class="admin_name">TickSer Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	<center>
  	   <h1>Welcome Admin</h1> <br>
	</center>
	<center>
	<img src="assets/J.jpg" alt=""width="350" height="175" />
	<img src="assets/K.jpg" alt=""width="350" height="175" />
	<img src="assets/L.jpg" alt=""width="350" height="175" />
	</center>
	<center>
	<img src="assets/M.jpg" alt=""width="400" height="200" />
	<img src="assets/N.jpg" alt=""width="400" height="200" />
    </center>
	<center>
	<img src="assets/P.png" alt=""width="400" height="200" />
	</center>
	</div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
		if (sidebar.classList.contains("active")) {
		   sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
 	     } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
   </script>
</body>
</html>

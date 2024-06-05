<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:Log.php');
	}

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/C.png" />
    <link rel="stylesheet" href="css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TickSer Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <img src="assets/I.png" alt="" width="100" height="50" />

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
                <a href="logout.php">
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
            <h2 id="text">
                <?php 
       			 echo $_SESSION['username'];
     		 ?>
            </h2>
            <h3 id="date"></h3>
        </div>


        <center>
            <h1>Welcome Admin</h1> <br>
        </center>
        <center>
            <div class="widget">
                <div class="widget-content">
                    <h3>Total Categories</h3>
                    
                </div>
            </div>
            <style>
            .widget {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 250px;
            }

            .widget-content h3 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .widget-content p {
                font-size: 32px;
                font-weight: bold;
                color: #333;
            }
            </style>
        </center>
        <center>
            <img src="assets/P.png" alt="" width="400" height="200" />
        </center>
        </div>
    </section>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };

    function myFunction() {
        const months = ["Januari", "Februari", "Maret", "April", "Mei",
            "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
            "Jumat", "Sabtu"
        ];
        let date = new Date();
        jam = date.getHours();
        tanggal = date.getDate();
        hari = days[date.getDay()];
        bulan = months[date.getMonth()];
        tahun = date.getFullYear();
        let m = date.getMinutes();
        let s = date.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
        requestAnimationFrame(myFunction);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    window.onload = function() {
        let date = new Date();
        jam = date.getHours();
        if (jam >= 4 && jam <= 10) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi,");
        } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang,");
        } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore,");
        } else {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam,");
        }
        myFunction();
    };
    </script>
</body>

</html>
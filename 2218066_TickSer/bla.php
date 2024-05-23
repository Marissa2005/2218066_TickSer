<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($email) || empty($username) || empty($password)) {
        echo "<script>
                alert('Pastikan Anda mengisi semua data');
                window.location = 'Reg.php';
              </script>";
    } else {
        $sql = "INSERT INTO tb_admin (email, password, username) VALUES ('$email', '$password', '$username')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>
                    alert('Registrasi berhasil, silahkan login');
                    window.location = 'Log.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan, silahkan coba lagi');
                    window.location = 'Reg.php';
                  </script>";
        }
    }
}
?>



<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE username = '$requestUsername'";
    $result = mysqli_query($koneksi, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($requestPassword, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['username'];
            header('Location: admin.php');
        } else {
            echo "<script>
                    alert('Username atau password Anda salah, silahkan coba lagi');
                    window.location = 'Log.php';
                  </script>";
        }
    
    }
}
?>

<?php 

include 'koneksi.php';
if(isset($_POST['login'])) {
  $requestUsername = $_POST['username'];
  $requestPassword = $_POST['password'];

  $sql = "SELECT * FROM tb_admin WHERE username = '$requestUsername'";
  list($id, $email, $password,  $username) = mysqli_fetch_row(mysqli_query($koneksi, $sql));
  $result = mysqli_query($koneksi, $sql);
  
  if(mysqli_num_rows($result) > 0) {
    if (password_verify($requestPassword, $password)) {
        while($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            header('location:admin.php');
        }
      } else { 
          echo "
          <script>
            alert('email atau password anda salah, Silahkan coba lagi');
            window.location = 'Log.php';
          </script>
          ";
      }
    } else { 
        echo "
        <script>
          alert('email atau password anda salah, Silahkan coba lagi');
          window.location = 'Log.php';
        </script>
        ";
    }
}

?>

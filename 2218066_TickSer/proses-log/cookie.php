<?php
// Ambil data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // Lakukan validasi login di sini (contoh sederhana, bisa menggunakan database, dll.)
    if ($username === "user" && $password === "pass") {
        // Set cookie dengan informasi login (contoh cookie berexpire dalam 1 jam)
        setcookie("username", $username, time() + 3600, "/");
        setcookie("loggedin", true, time() + 3600, "/");
        // Redirect ke halaman lain atau tampilkan pesan sukses, terserah kebutuhan Anda
        header("Location: Index.php");
        exit;
    } else {
        echo "Username atau password salah.";
    }
}
?>

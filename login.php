<?php 
    session_start();
    include_once("koneksi.php");
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['Username'];
    $password = $_POST['Password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['Username'] = $username;
        $_SESSION['status'] = "login";
        header("location:show.php?pesan=login_sukses");
    }
    else{
        header("location:index.php?pesan=gagal");
    }
?>
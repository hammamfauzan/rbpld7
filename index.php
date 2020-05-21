<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container" id="container">
	<a class="btn btn-primary" href="register.php">Daftar</a>
    <br/>
	<h1>Masuk</h1>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" class="form-control" name="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Masuk"></td>
            </tr>
        </table>            
    </form>
	<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<a class='alert alert-danger'>Login gagal! username dan password salah!</a>";
            }
            else if($_GET['pesan'] == "logout"){
                echo "<a class='alert alert-success'>Anda telah berhasil logout</a>";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "<a class='alert alert-danger'>Anda harus login untuk mengakses halaman daftar barang</a>";
			}
			else if($_GET['pesan'] == "daftar_berhasil"){
                echo "<a class='alert alert-success'>Akun anda berhasil didaftarkan</a>";
            }
        }
    ?>
	</div>
</body>
</html>
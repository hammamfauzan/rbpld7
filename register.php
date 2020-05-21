<!DOCTYPE html>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styling.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container" id="container">
        <a class="btn btn-primary" href="index.php">Login</a>
            <h1>Daftar</h1>
                <form method="post" action="register.php">
                    <table>
                        <tr><td>Nama Lengkap</td><td><input type="text" class="form-control" name="Namalengkap"></td></tr>
                        <tr><td>Username</td><td><input type="text" class="form-control" name="Username"></td></tr>
                        <tr><td>Password</td><td><input type="password" class="form-control" name="Password"></td></tr>
                        <tr><td>E-mail</td><td><input type="text" class="form-control" name="Email"></td></tr>
                        <tr><td>No. Telepon</td><td><input type="text" class="form-control" name="Notelepon"></td></tr>
                        <tr><td></td><td><input type="submit" class="btn btn-success" name='Submit' value="Daftar"></td></tr>
                    </table>
                </form>

                <?php
                // Check If form submitted, insert form data into users table.
                if(isset($_POST['Submit'])) {
                $Namalengkap = $_POST['Namalengkap'];
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                $Email = $_POST['Email'];
                $Notelepon = $_POST['Notelepon'];

                // include database connection file
                include_once("koneksi.php");

                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO user(Namalengkap,Username,Password,Email,Notelepon) VALUES('$Namalengkap','$Username','$Password','$Email','Notelepon')");

                header("location:index.php?pesan=daftar_berhasil");
            }
            ?>
        </div>
    </body>
</html>
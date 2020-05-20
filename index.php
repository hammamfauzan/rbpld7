<!DOCTYPE html>
<html>
    <head>
        <title>Input Form</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styling.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container" id="container">
            <a class="btn btn-primary" href="show.php"><i class="fa fa-list" aria-hidden="true"></i> Daftar Barang</a>
            <h1>Input Data Barang</h1>
            </br>
                <form method="post" action="index.php">
                    <table>
                        <tr><td>Nama</td><td><input type="text" class="form-control" name="Nama"></td></tr>
                        <tr><td>Kuantitas</td><td><input type="text" class="form-control" name="Kuantitas"></td></tr>
                        <tr><td>Satuan</td><td><input type="text" class="form-control" name="Satuan"></td></tr>
                        <tr><td>Keterangan</td><td><input type="text" class="form-control" name="Keterangan"></td></tr>
                        <tr><td><input type="submit" class="btn btn-success" name='Submit' value="Tambahkan Data Barang"></td></tr>
                    </table>
                </form>

                <?php
                // Check If form submitted, insert form data into users table.
                if(isset($_POST['Submit'])) {
                $Nama = $_POST['Nama'];
                $Kuantitas = $_POST['Kuantitas'];
                $Satuan = $_POST['Satuan'];
                $Keterangan = $_POST['Keterangan'];

                // include database connection file
                include_once("koneksi.php");

                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO databarang(Nama,Kuantitas,Satuan,Keterangan) VALUES('$Nama','$Kuantitas','$Satuan','$Keterangan')");

                // Show message when user added
                echo "<br/><p class='alert alert-success'>Data Barang Berhasil Ditambahkan</p> <br/>";
                
            }
            ?>
        </div>
    </body>
</html>
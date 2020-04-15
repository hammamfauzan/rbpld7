<!DOCTYPE html>
<html>
    <head>
        <title>Input Form</title>
    </head>
    <body>
    <a href="show.php">Klik untuk Melihat Data Barang</a>
        <form method="post" action="index.php">
            <table>
                <tr><td>Nama</td><td><input type="text" name="Nama"></td></tr>
                <tr><td>Kuantitas</td><td><input type="text" name="Kuantitas"></td></tr>
                <tr><td>Satuan</td><td><input type="text" name="Satuan"></td></tr>
                <tr><td>Keterangan</td><td><input type="text" name="Keterangan"></td></tr>
                <td><input type="submit" name='Submit'value="Tambahkan Data Barang"></td>
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
        echo "Data Barang Berhasil Ditambahkan <br/>";

        echo "<a href='show.php'> Lihat Data Barang</a>";
    }
    ?>
    </body>
</html>
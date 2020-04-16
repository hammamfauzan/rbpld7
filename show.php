<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM databarang ORDER BY ID ASC");
?>

<html>
<head>    
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="list">
        <h3>Daftar Barang</h3>
        <table width='80%' border=2 class="table table-striped">

        <tr>
            <th>Nama</th> <th>Kuantitas</th> <th>Satuan</th> <th>Keterangan</th> <th>Action</th>
        </tr>
        <?php  
        while($databarang_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$databarang_data['Nama']."</td>";
            echo "<td align='right'>".$databarang_data['Kuantitas']."</td>";
            echo "<td>".$databarang_data['Satuan']."</td>";
            echo "<td>".$databarang_data['Keterangan']."</td>";
            echo "<td><a href='edit.php?ID=$databarang_data[ID]'>Edit</a> | <a href='delete.php?ID=$databarang_data[ID]'>Delete</a></td></tr>";        
        }
        ?>
        </table>
        <br/>
        <br/>
        <a class="btn btn-primary" href="index.php">Tambahkan Data Barang Baru</a>
    </div>
</body>
</html>
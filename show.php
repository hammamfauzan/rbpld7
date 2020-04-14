<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM databarang ORDER BY ID DESC");
?>

<html>
<head>    
    <title>Daftar Barang</title>
</head>

<body>
    <h3>Daftar Barang</h3>
    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Kuantitas</th> <th>Keterangan</th> <th>Action</th>
    </tr>
    <?php  
    while($databarang_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$databarang_data['Nama']."</td>";
        echo "<td>".$databarang_data['Kuantitas']."</td>";
        echo "<td>".$databarang_data['Keterangan']."</td>";
        echo "<td><a href='edit.php?id=$databarang_data[ID]'>Edit</a> | <a href='delete.php?id=$databarang_data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <br/>
    <br/>
    <a href="index.php">Tambahkan Data Barang Baru</a>
</body>
</html>
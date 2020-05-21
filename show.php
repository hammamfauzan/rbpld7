<?php
session_start();
// Create database connection using config file
include_once("koneksi.php");
$user="belum login";
$user=$_SESSION['status'];
$username=$_SESSION['Username'];
$_SESSION['Username'] = $username;
if($user!="login"){
    header("location:index.php?pesan=belum_login");
}
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM databarang WHERE user='$username' ORDER BY ID ASC"); 
?> 
<html>
<head>    
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "edit_sukses"){
        echo "<a class='alert alert-success'>Data Barang Berhasil Diubah</a>";
        }
        else if($_GET['pesan'] == "delete_sukses"){
        echo "<a class='alert alert-success'>Data Barang Berhasil Dihapus</a>";
        }
        else if($_GET['pesan'] == "login_sukses"){
        echo "<a class='alert alert-success'>Login Berhasil</a>";
        }
    }
    ?>
        <p></p>
            <div class="menu">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Data Barang Baru</a>
                <a class="btn btn-danger" href="logout.php">Logout</a>
            </div>
            <h3>Daftar Barang</h3>
        
        <table border=2 class="table table-striped" id="datatables">
        <thead>
            <tr>
                <th>Nama</th> <th>Kuantitas</th> <th>Satuan</th> <th>Keterangan</th> <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        while($databarang_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$databarang_data['Nama']."</td>";
            echo "<td align='right'>".$databarang_data['Kuantitas']."</td>";
            echo "<td>".$databarang_data['Satuan']."</td>";
            echo "<td>".$databarang_data['Keterangan']."</td>";
            echo "<td><a href='edit.php?ID=$databarang_data[ID]'class=\"btn btn-success\">Edit</a> <a href='delete.php?ID=$databarang_data[ID]'class=\"btn btn-danger\">Delete</a></td></tr>";        
        }
        ?>
        </table>
        <tbody>
    </div>
    <<script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        } );
    </script>
</body>
</html>
<html>
<head>
    <title>Search Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    // Create database connection using config file
    include_once("koneksi.php");

    // Fetch all users data from database
    $result = mysqli_query($mysqli, "SELECT * FROM databarang ORDER BY ID ASC");
    ?>
    <div class="list">
    <form action="search.php" method="get">
        <input type="text" name="cari">
        <input class= "btn btn-primary" type="submit" value="Cari">
    </form>
 
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($mysqli, "SELECT * FROM databarang WHERE Nama LIKE '%".$cari."%'");		
    }else{
        $data = mysqli_query($mysqli, "SELECT * FROM databarang");
    }
    $no = 1
    ?>
    
            <div class="menu">
                <a class="btn btn-primary" href="show.php"><i class="fa fa-list" aria-hidden="true"></i> Daftar Barang</a> 
                <a class="btn btn-primary" href="index.php"><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Data Barang Baru</a>
            </div>
            <h3>Hasil Pencarian</h3>
        </br>
        <table width='80%' border=2 class="table table-striped">
        <tr>
            <th>Nama</th> <th>Kuantitas</th> <th>Satuan</th> <th>Keterangan</th> <th>Action</th>
        </tr>
        <?php  
        while($databarang_data = mysqli_fetch_array($data)) {         
            echo "<tr>";
            echo "<td>".$databarang_data['Nama']."</td>";
            echo "<td align='right'>".$databarang_data['Kuantitas']."</td>";
            echo "<td>".$databarang_data['Satuan']."</td>";
            echo "<td>".$databarang_data['Keterangan']."</td>";
            echo "<td><a href='edit.php?ID=$databarang_data[ID]'class=\"btn btn-success\">Edit</a> <a href='delete.php?ID=$databarang_data[ID]'class=\"btn btn-danger\">Delete</a></td></tr>";        
        }
        ?>
        </table>
    </div>
</body> 
</table>
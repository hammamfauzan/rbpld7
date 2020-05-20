<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for data update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $ID = $_POST['ID'];

    $Nama=$_POST['Nama'];
    $Kuantitas=$_POST['Kuantitas'];
    $Satuan=$_POST['Satuan'];
	$Keterangan=$_POST['Keterangan'];

    // update data
    $result = mysqli_query($mysqli, "UPDATE databarang SET Nama='$Nama',Kuantitas='$Kuantitas',Satuan='$Satuan',Keterangan='$Keterangan' WHERE ID=$ID");

    // Redirect to homepage to display updated data in list
    header("Location: show.php");
}
?>
<?php
// Display selected data based on id
// Getting id from url
$ID = $_GET['ID'];

// Fetch user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM databarang WHERE ID=$ID");

while($databarang_data = mysqli_fetch_array($result))
{
    $Nama = $databarang_data['Nama'];
    $Kuantitas = $databarang_data['Kuantitas'];
    $Satuan = $databarang_data['Satuan'];
	$Keterangan = $databarang_data['Keterangan'];
}
?>
<html>
<head>  
    <title>Edit Data Barang</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" id="container">
        <a class="btn btn-primary" href="show.php"><i class="fa fa-list" aria-hidden="true"></i> Daftar Barang</a>
        <br/>
        <h1>Edit Data Barang </h1>
        <br/>
        <form name="update_data" method="post" action="edit.php">
            <table>
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="Nama" value='<?php echo $Nama;?>'></td>
                </tr>
                <tr> 
                    <td>Kuantitas</td>
                    <td><input type="text" class="form-control" name="Kuantitas" value=<?php echo $Kuantitas;?>></td>
                </tr>
                <tr> 
                    <td>Satuan</td>
                    <td><input type="text" class="form-control" name="Satuan" value=<?php echo $Satuan;?>></td>
                </tr>
                <tr> 
                    <td>Keterangan</td>
                    <td><input type="text" class="form-control" name="Keterangan" value=<?php echo $Keterangan;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                    <td><input type="submit" class="btn btn-success" name="update" value="Perbarui Data"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
































<!-- <!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	
</head>
<body>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"select * from datamahasiswa2");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp" value="<?php echo $data['nrp'] ?>"></td>					
            </tr>	
            <tr>
				<td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>">Laki Laki
                        <input type="radio" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>">Perempuan
					</td>
			</tr>
			<tr>
				<td>Departemen</td><td>
                        <select name="departemen">
                            <option value="<?php echo $data['departemen'] ?>">Informatika</option>
                            <option value="<?php echo $data['departemen'] ?>">Sistem Informasi</option>
                            <option value="<?php echo $data['departemen'] ?>">Teknologi Informasi</option>
                        </select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html> -->
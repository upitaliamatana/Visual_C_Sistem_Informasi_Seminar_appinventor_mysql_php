<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php 
include 'koneksi.php';
  $conn = mysqli_connect($dbhost, $dbuser, $pass, $dbname);
  
if(!$conn) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($conn));
exit();
}
$dbs = mysqli_select_db($conn, $dbname);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($conn));
exit();
}

$nim = $_GET['nim'];

 $query = "SELECT * FROM datamhs INNER JOIN inputnilai
		ON datamhs.nim=inputnilai.nim";
 $show = mysqli_query($conn, $query);
  if(mysqli_num_rows($show) == 0){
echo "Tidak Ada Data Yang Dipilih";
} else{
    $d = mysqli_fetch_assoc($show);
}
?>

<form action="editproses.php" method="post">
<label>NIM :</label>
<input class="input" name="nim" type="text" value="<?php echo $d['nim']; ?>" required>
<label>Nama Lengkap :</label>
<input class="input" name="nama" type="text" value="<?php echo $d['nama']; ?>" required>
<label>Jurusan :</label>
<input class="input" name="jurusan" type="text" value="<?php echo $d['jurusan']; ?>" required>
<label>Fakultas :</label>
<input class="input" name="fakultas" type="text" value="<?php echo $d['fakultas']; ?>" required>
<label>Judul Seminar :</label>
<input class="input" name="judulseminar" type="text" value="<?php echo $d['judulseminar']; ?>" required>
<label>Nilai :</label>
<input class="input" name="nilai" type="text" value="<?php echo $d['nilai']; ?>" required>
<br>
<input class="simpan" name="simpan" type="submit" value="Simpan">
<input class="reset" type="button"  value="Back" onclick="history.go(-1);">
</form>
</body>
</html>
<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	

include "koneksi.php";
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
	$nim			= $_POST['nim'];
	$nama			= $_POST['nama'];	
	$jurusan	= $_POST['jurusan'];	
	$fakultas		= $_POST['fakultas'];	
	$judulseminar	= $_POST['judulseminar'];	
	$nilai	= $_POST['nilai'];
	
	
	$update1 = "UPDATE datamhs SET nama='$nama', jurusan='$jurusan', fakultas='$fakultas', judulseminar='$judulseminar' WHERE  nim='$nim'";
	$update2 = "UPDATE inputnilai SET nilai='$nilai' WHERE  nim='$nim'";



  
  if(mysqli_query($conn, $update1) and mysqli_query($conn, $update2)){
echo "Input Data Berhasil";
} else{
echo "ERROR: Could not able to execute $query."  . mysqli_error($conn);
}
echo "<br/>";
	include 'viewdata.php';
}
?>
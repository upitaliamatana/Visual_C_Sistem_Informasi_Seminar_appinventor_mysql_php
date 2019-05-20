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

 $query = "DELETE FROM datamhs WHERE nim='$nim'";
 $query1 = "DELETE FROM inputnilai WHERE nim='$nim'";
 
  if(mysqli_query($conn, $query) and mysqli_query($conn, $query1)){
echo "Hapus Data Berhasil";
} else{
echo "ERROR: Could not able to execute $query."  . mysqli_error($conn);
}
  mysqli_close($conn);
?>
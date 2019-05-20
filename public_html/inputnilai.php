<?php
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
  $nim = mysqli_real_escape_string($conn, $_GET['nim']);
  $nilai = mysqli_real_escape_string($conn, $_GET['nilai']);
  
  $query = "INSERT INTO inputnilai (nim, nilai) VALUES ('$nim', '$nilai') ON DUPLICATE KEY UPDATE nilai='$nilai'";
  if(mysqli_query($conn, $query)){
echo "Input Nilai Berhasil";
} else{
echo "ERROR: Could not able to execute $query."  . mysqli_error($conn);
}
  mysqli_close($conn);
?>
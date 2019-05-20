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
  $nama = mysqli_real_escape_string($conn, $_GET['nama']);
  $jurusan = mysqli_real_escape_string($conn, $_GET['jurusan']);
  $fakultas = mysqli_real_escape_string($conn, $_GET['fakultas']);
  $judulseminar = mysqli_real_escape_string($conn, $_GET['judulseminar']);
  
  $query1 = "INSERT INTO datamhs (nim, nama, jurusan, fakultas, judulseminar) VALUES ('$nim', '$nama', '$jurusan', '$fakultas', '$judulseminar')";
  $query2 = "INSERT INTO inputnilai (nim) VALUES ('$nim')";
  if(mysqli_query($conn, $query1) and mysqli_query($conn, $query2)){
echo "Input Data Berhasil";
} else{
echo "ERROR: Could not able to execute $query."  . mysqli_error($conn);
}
  mysqli_close($conn);
?>
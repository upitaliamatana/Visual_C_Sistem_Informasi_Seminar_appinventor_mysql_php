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

$username = mysqli_real_escape_string($conn, $_GET['username']);

$password = mysqli_real_escape_string($conn, $_GET['password']);

$mysqli ="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $mysqli);
 if (mysqli_num_rows($result) > 0)

 {

    echo "Berhasil Login";

 }

 else {

     echo "Login Error";

 }

 mysqli_close($conn);

?>
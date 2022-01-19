<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yemekveritabani";
$conn = mysqli_connect($servername,$username,$password,"$dbname");
    if($conn){
        die('Bağlantı basarisiz :'.mysql_error());
    }
?>








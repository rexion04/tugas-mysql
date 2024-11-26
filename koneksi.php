<?php
 $namahost = "localhost";
 $username = "yoga";
 $password = "2004"; 
 $database = "pt-bendi_car"; //database yang sebelumnya dibuat
 mysqli_connect($namahost,$username,$password) or die("Failed");
 mysqli_select_db($database) or die("Database not exist");
?>
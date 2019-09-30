<?php 
 $hostname = "localhost";
 $database = "test";
 $username = "root";
 $password = "";
 $database = "test";
 
 $connect = mysqli_connect($hostname, $username, $password, $database);
 mysqli_query($connect, "SET NAME 'uf8'");
 ?>
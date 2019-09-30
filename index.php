<?php 
require 'connect.php';
$query = "SELECT * FROM student";
$data = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($data)) {
    echo $row['hoten'] .'-'. $row['diachi'] . '-' . $row['namsinh'] . '</br>';
}
 ?>
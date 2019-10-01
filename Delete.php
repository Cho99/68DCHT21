<?php 
require 'connect.php';
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$query = "DELETE FROM student WHERE id = '$id'";
	$data = mysqli_query($connect, $query);
	if ($data) {
		header('location: index.php');
	}else {
		echo 'Lỗi!';
	}
}
 ?>
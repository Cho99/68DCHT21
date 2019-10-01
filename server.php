<?php 
 require 'connect.php';
 // Lấy dữ liệu
 $id = 0;
 $hoten = "";
 $namsinh = "";
 $edit_sate = false;
 if (isset($_POST['save'])) {
 	$hoten = $_POST['hoten'];
 	$namsinh = $_POST['namsinh']; 
 	mysqli_query($connect,"INSERT INTO student VALUES ('', '$hoten', '$namsinh')");
    header('location: index.php');
 } 
 if (isset($_POST['update'])) {
 	$id = $_POST['id'];
 	$hoten = $_POST['hoten'];
 	$namsinh = $_POST['namsinh'];
 	mysqli_query($connect, "UPDATE student SET hoten = '$hoten', namsinh = '$namsinh' WHERE id = '$id'");
 	header('location: index.php');
 }
 if (isset($_GET['del'])) {
 	$id = $_GET['del'];
 	$data = mysqli_query($connect, "DELETE FROM student WHERE id = '$id'");
 	if ($data) {
 		header('location: index.php');	
 	}else {
 		echo 'Lỗi';
 	}
 	
 }
 $data = mysqli_query($connect, "SELECT * FROM student");

 ?>
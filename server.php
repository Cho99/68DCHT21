<?php 
require 'connect.php';
$id = "";
$hoten = "";
$namsinh = "";
$vitri_edit = false;
if (isset($_POST['them'])) {
	$hoten = $_POST['hoten'];
	$namsinh = $_POST['namsinh'];
	mysqli_query($connect, "INSERT INTO student VALUES('','$hoten', '$namsinh')");
	header('location:index.php');
}
//Kiểm tra xem cái biến xoa nó tồn tại không
//GET là cách lấy thông tin trên url VD: server.php?xoa=14
//POST là chạy ngầm muốn xem thì ông vào Network có một file gửi đi dưới dạng POST
if (isset($_GET['xoa'])) {
	$id = $_GET['xoa'];
	mysqli_query($connect, "DELETE FROM student WHERE id = '$id'");
	header('location:index.php');	
}
//Sửa dữ liệu
if (isset($_POST['sua'])) {
	$id = $_POST['id'];
	$hoten = $_POST['hoten'];
	$namsinh = $_POST['namsinh'];

	mysqli_query($connect, "UPDATE student SET hoten='$hoten', namsinh='$namsinh' WHERE id = '$id'");
	header('location:index.php');
}
// Lấy dữ liệu
$data = mysqli_query($connect, "SELECT * FROM student");
 ?>
<?php 
require 'connect.php';
$id = 0;
$name = "";
$namsinh = "";
$edit_sate = false;

if (isset($_POST['save'])) {
	$name = $_POST['hoten'];
	$namsinh = $_POST['namsinh'];

	$query = "INSERT INTO student VALUES('','$name','$namsinh')";
	mysqli_query($connect, $query);
	header('location: index.php');
}

if (isset($_POST['update'])) {
	$name = $_POST['hoten'];
	$namsinh = $_POST['namsinh'];
	$id = $_POST['id'];

	mysqli_query($connect, "UPDATE student SET hoten='$name', namsinh='$namsinh' WHERE id = '$id' ");
	header("location: index.php");
} 

 ?>
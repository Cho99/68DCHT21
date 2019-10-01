<?php 
require 'connect.php';
$query = "SELECT * FROM student";
Class Student {
	function Student($id, $name, $namsinh) {
		$this->id = $id;
		$this->name = $name;
		$this->namsinh = $namsinh;
	}
}
$data = mysqli_query($connect, $query);
$array_stuent = array();
while ($row = mysqli_fetch_assoc($data)) {
    array_push($array_stuent, new Student($row['id'], $row['hoten'], $row['namsinh']));
}
 ?>
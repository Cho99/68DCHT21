<?php require 'server.php'; ?>
<?php 
if (isset($_GET['sua'])) {
	$id = $_GET['sua'];
	$data_sv = mysqli_query($connect, "SELECT * FROM student WHERE id = '$id'");
	$row = mysqli_fetch_assoc($data_sv);
	$hoten = $row['hoten'];
	$namsinh = $row['namsinh'];
	$id = $row['id'];
	$vitri_edit = true;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<table style="width: 100%; border: 1px solid grey" >
		<tr>
			<td>ID</td>
			<td>Họ Tên</td>
			<td>Năm Sinh</td>
			<td>Thao Tác</td>
	    </tr>
	    <?php While($row = mysqli_fetch_assoc($data)) { ?>
	    <tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['hoten'] ?></td>
			<td><?= $row['namsinh'] ?></td>
			<td><a href="index.php?sua=<?= $row['id'] ?>" name="sua">Sửa</a></td>
			<td><a href="server.php?xoa=<?= $row['id'] ?>" name="xoa">Xóa</a></td>
	    </tr>
	    <?php } ?>
	</table>
	<br>
	<br>
    <form action="server.php" method="post">
		<table  style="width: 20%; border: 1px solid grey">
			<input type="hidden" name="id" value="<?= $id ?>">
			<tr>
				<td>Họ Tên</td>
				<td><input type="text" name="hoten" value="<?= $hoten ?>"></td>
			</tr>
			<tr>
				<td>Năm Sinh</td>
				<td><input type="date" name="namsinh" value="<?= $namsinh ?>"></td>
			</tr>
			<tr>
				<?php if($vitri_edit == false): ?>
				<td><button name="them" type="submit">Thêm</button></td>
				<?php else: ?>
				<td><button name="sua" type="submit">Sửa</button></td>
			    <?php endif; ?>
			</tr>
		</table>
	</form>
</body>
</html>
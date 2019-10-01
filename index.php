<?php require 'server.php'; ?>
<?php if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$query = "SELECT * FROM student WHERE id='$id'";
	$student = mysqli_query($connect, $query);
	$row = mysqli_fetch_assoc($student);
	$hoten = $row['hoten'];
	$namsinh = $row['namsinh'];
	$id = $row['id'];
	$edit_sate = true;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<table style="width: 100%; border-radius: 10px; border: 1px solid grey">
		<tr>
			<td>ID</td>
			<td>Họ Tên</td>
			<td>Năm Sinh</td>
			<td>Thao Tác</td>
		</tr>
		<?php while ($row = mysqli_fetch_array($data)){ ?>
		<tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['hoten'] ?></td>
			<td><?= $row['namsinh'] ?></td>
			<td><a href="index.php?edit=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
			<td><a href="server.php?del=<?= $row['id'] ?>" class="btn btn-success">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
	<form action="server.php" method="post">
		<table style="width: 20%; border-radius: 10px; border: 5px solid grey" align="center">
			<input type="hidden" name="id" id="id" value="<?= $id ?>">
			<tr>
				<td>Họ Tên:</td>
				<td><input type="text" name="hoten" value="<?= $hoten ?>"></td>
			</tr>
			<tr>
				<td>Năm sinh:</td>
				<td><input type="date" name="namsinh" value="<?= $namsinh ?>"></td>
			</tr>
			<tr>
				<?php if ($edit_sate == false): ?>
				<td><button type="submit" name="save">Save</button></td>
				<?php else: ?>
				<td><button type="submit" name="update">Edit</button></td>
			    <?php endif; ?>
			</tr>
		</table>
	</form>
</body>
</html>
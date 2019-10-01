<?php require 'GET.php'; ?>
<?php require 'Server.php'; ?>
    <?php if (isset($_GET['edit'])) {
    	$id = $_GET['edit'];
    	$query =  "SELECT * FROM student WHERE id = '$id'";
    	$data = mysqli_query($connect, $query);
    	$row = mysqli_fetch_assoc($data);
    	$id = $row['id'];
    	$name = $row['hoten'];
    	$namsinh = $row['namsinh'];	 	
    	$edit_sate = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	
		<table style="width:100%; border: 1px">	
			<tr>
				<th>ID</th>
				<th>Họ và tên</th>
				<th>Năm Sinh</th>
				<th>Thao Tác</th>
			</tr>
			<?php foreach ($array_stuent as $value) { ?>
            <tr>
            	<input type="hidden" name="id" id="id" >
				<th> <?= $value->id ?></th>
				<th> <?= $value->name ?></th>
				<th><?= $value->namsinh ?></th>
				<th><a href="index.php?edit=<?= $value->id ?>" class="btn btn-secondary">Edit</a></th>	
				<th><a href="Delete.php?del=<?= $value->id ?>" class="btn btn-secondary">Delete</a></th>				
			</tr>
			<?php } ?>
		</table>

	<form method="post" action="server.php" style="align-items: center;
    align-content: center;
    visibility: ;
    border-radius: 5px;
    border: 1px solid gray;
    width: max-content;">
		<table>
			<input type="hidden" name="id" id="id" value="<?= $id ?>">
			<tr>
				<td><label>Họ và tên:</label></td>
				<td><input type="text" name="hoten" value="<?= $name ?>"></td>
			</tr>
			<tr>
				<td><label>Ngay Sinh:</label></td>
				<td><input type="date" name="namsinh" value="<?= $namsinh ?>"></td>
			</tr>
			<tr>
				<?php if($edit_sate == false): ?>
				<td><button type="submit" name="save" class="btn-success">Save</button></td>
				<?php else: ?>
				<td><button type="submit" name="update" class="btn-success">Update</button></td>
				<?php endif; ?>
			</tr>
		</table>
	</form>
</body>
</html>
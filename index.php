<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<?php require 'GET.php'; ?>
	<form action="Get.php" method="GET">
		<table style="width:100%; border: 1px">
			<tr>
				<th>ID</th>
				<th>Họ và tên</th>
				<th>Năm Sinh</th>
				<th>Dịa Chỉ</th>
			</tr>
			<?php foreach ($array_stuent as $value) { ?>
                <tr>
				<th> <?= $value->id ?></th>
				<th> <?= $value->name ?></th>
				<th><?= $value->namsinh ?></th>
				<th><?= $value->diachi ?></th>
			    </tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>
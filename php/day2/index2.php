<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h1>Câu lệnh điều kiện if else if</h1>
	<?php 
		$age = 25;
		if ($age < 18) {
			echo "<br> Trẻ em";
		} elseif ($age < 30) {
			echo "<br> Thanh niên";
		} elseif ($age < 50) {
			echo "<br> Trung niên";
		} else {
			echo "<br> Người già";
		}
	?>
</body>
</html>
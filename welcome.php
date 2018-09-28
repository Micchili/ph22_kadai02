<?php
	$pass = $_POST["name"];
	setcookie("name", $pass, time()+900);
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="index.php">
			設定しました。<br>
			<input type="submit" value="戻る">
		</form>
	</body>
</html>

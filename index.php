<?php
	if(isset($_COOKIE["name"])){
		$name = $_COOKIE["name"];
	}
	else{
		$name = "";
	}
?>
<!DOCTYPE html>
<html>
	<head lang="ja">
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>kadai02</h1>
		<h2>COOKIE登録画面</h2>
		<form method="post" action="welcome.php">
			<p>
				ユーザーID：
				<input type="text"  name="name" value="<?php print $name; ?>"><br>
				パスワード：
				<input type="text"  name="pas"><br>
				<input type="submit" value="サインイン">
			</p>
		</form>
	</body>
</html>

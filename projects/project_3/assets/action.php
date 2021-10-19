<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>form: hello!</title>
</head>
<body>
	Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
	Вам <?php echo (int)$_POST['age']; ?> лет.
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>project_2: browser detecter</title>
</head>
<body>
	<!-- Выход из PHP -->
	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
	?>
		<h3>strpos(), должно быть вернул не false</h3>
		<p>Вы используете Internet Explorer</p>
	<?php
		} else {
	?>
		<h3>strpos() вернул false</h3>
		<p>Вы не используете Internet Explorer</p>
	<?php
		}
	?>

	<!-- Второй вариант написания в PHP -->
	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
			echo '<h3>strpos(), должно быть не false</h3>';
			echo '<p>Вы используете Internet Explorer</p>';
		} else {
			echo '<h3>strpos() вернул false</h3>';
			echo '<p>Вы не используете Internet Explorer</p>';
		}
	?>
</body>
</html>

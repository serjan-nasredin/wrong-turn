<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>project_1: learn php</title>
</head>
<body>
	<?php if ($expression == true):
	?>
		Это будет отображено, если выражение истинно.
	<?php else:
	?>
		В ином случае будет отображено это.
	<?php 
		endif;
	?>

	<p <?php if ($highlight): ?>class="highlight"<?php endif; ?>>Это  параграф.</p>
	<!--
		<p class="highlight">Это параграф</p>
		или:
		<p>Это параграФ</p>
	-->

	<?php for ($i = 0; $i < 5; ++$i):
	?>
		Привет, всем!
	<?php
		endfor;
	?>
	<!--
		Вывод:

		Привет, всем!
		Привет, всем!
		Привет, всем!
		Привет, всем!
	-->

	<!-- Это способ (вид) открытия и закрытия тегов.
	<%
		// Первый, но не последний.
	?>

	<script language="php">
		// Еще один вариант.
	%>

	Версия тегов 7.0.0,3 доступна в php:
	1.long form tag (<?php ?>)
	2.short echo tag(<?= ?>)
	3.short_open_tag(? ?)
	Вы можете использовать short_open_tag, когда запускаете xml с помощью php.
	-->

	<?php
		if ($a == 5):
			echo "a равно 5";
			echo "...";
		elseif ($a == 6):
			echo "a равно 6";
			echo "!";
		else:
			echo "a не равно 5-и, и даже 6-и";
		endif;
	?>

	<?php
		$a = 1;
		$b = 2;

		if ($a == 1) {
			if ($b == 2) {
				?><head></head><?php
			} else {
				?><body></body><?php
			}
		}

		function show($a) {
			?>
				<a href="https://www.<?php echo $a ?>.com";>
					Link
				</a>
			<?php
		}
	?>

	<?php show("google") ?>

</body>
</html>

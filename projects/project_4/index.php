<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>project_4: array</title>
</head>
<body>
	<?php
		$array = array(
			"foo" => "bar",
			"bar" => "foo"
		);

		$array = [
			"foo" => "bar",
			"bar" => "foo"
		];

		$array = array(
			1 => "a",
			"1" => "b",
			1.5 => "c",
			true => "d"
		);

		var_dump($array);
		<!-- $array[1] == "d" -->


		$array = array(
			"foo" => "bar",
			"bar" => "foo",
			100 => -100,
			-100 => 100
		)


		$array = array("foo", "bar", "hello", "world");
		var_dump($array);
		<!-- 0 = "foo", 1 = "bar", 2 = "hello", 3 = "world" -->

		$array = array(
			"a",
			"b",
			6 => "c",
			"d"
		);

		var_dump($array);
		<!-- 0 = "a", 1 = "b", 6 = "c", 7 = "d" -->

		$array = array(
			"foo" => "bar",
			42 => 24,
			"multi" => array(
				"dimensional" => array (
					"array" => "foo"
				)
			)
		);

		var_dump($array["foo"]);
		var_dump($array[42]);
		var_dump($array["multi"]["dimensional"]["array"]);
	?>
</body>
</html>

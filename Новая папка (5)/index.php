<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=	"Zhakenov"; ?></title>
</head>
<body>

<h1>Первое задание</h1>

	<?php

	$str = "Hello";
	echo "VAR:$str.'!'";
	echo "<input type=\"text\"><br>";
	$lenght = strlen($str);
	echo strtoupper(trim(" some "));
	echo $lenght;
	echo md5("qwerty");

	?>

	<br>
	<h1>Второе задание</h1>

	<?


	$string = "ASDПросто текстASD";
 	$LOL = substr($string, 0, strlen($string) - 3);
 	echo "Обрезанная строка - $LOL ";

	?>

	<br>
	<h1>Треьте задание</h1>

	<?

	$x = substr($LOL, 0, 3);
	$result = strtolower($x);

	$result = strtolower($x);
	$result = substr($LOL, 3, strlen($LOL));
	echo "Нижний регистр - $result";

	?>

	<br>
	<h1>Четвертое задание</h1>

	<?
	echo "Первые три символа - ". substr($result,0,3);
	?>


</body>
</html>
<?php
$url = strip_tags($_GET["url"]);
if ($url) {
	header("Location: $url");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title> уда отправимс¤</title>
</head>

<body>
<form action="#">
	 уда отправимс¤:
	<select name="url" size="1">
		<option value="http://www.google.ru">√угл</option>
		<option value="http://www.yandex.ru">яндекс</option>
		<option value="http://www.rambler.ru">–амблер</option>
	</select>
	<input type="submit" value="GO!">
</form>

</body>
</html>


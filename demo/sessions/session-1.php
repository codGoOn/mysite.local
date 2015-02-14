<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = strip_tags($_POST["name"]);
            if(!preg_match("/^[a-zA-Z ]*$/", $name)){
                $nameError = "Поле имя должно содержать только буквы";
            }
	$age = $_POST["age"] * 1;
	$_SESSION["name"] = $name;
	$_SESSION["age"] = $age;
}
else {
	$name = $_SESSION["name"];
	$age = $_SESSION["age"];
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Демонстрация сессии</title>
</head>

<body>
<h1>Демонстрация сессии</h1>
<a href="session-2.php">Демо сессии</a><br>
<a href="session_destroy.php">Закрыть сессию</a><br><br>
<form action="<?=$_SERVER["PHP_SELF"]?>" 
		method="post">
	Ваше имя:
        <input type="text" name="name" value="<?=$name?>"><?php echo "Поле имя должно содержать только буквы";?><br>
	Ваш возраст:
	<input type="text" name="age" value="<?=$age?>"><br>
	<input type="submit" value="Передать">
</form>
<?php
if ($name and $age) {	
	if ($name and $age) {
		echo "<h1>Привет, $name</h1>";
		echo "<h3>Тебе $age лет</h3>";
	}
	else {
		print "<h3>Заполните все поля!</h3>";
	}
}
?>


</body>
</html>

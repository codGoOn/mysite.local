<?php
	include 'inc/headers.inc.php';
	include 'inc/cookie.inc.php';
        define(PATH_LOG, 'log.txt');
        include 'inc/log.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title><?= $title?></title>
		<meta http-equiv="content-type"
			content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<!--<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />-->
			<span class="slogan">обо всём сразу</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?= $header?></h1>
			<!-- Заголовок -->
			<blockquote>
			<?php
				if($visitCounter == 1) {
					echo "Спасибо, что зашли на огонек!";
				}else{
					echo "Вы зашли к нам $visitCounter раз<br>";
					echo "Последнее посещение $lastVisit";
				}
			?>
			</blockquote>
			<!-- Область основного контента -->
			<?php
				//recuire('inc/routing.inc.php');
                                require 'inc/routing.inc.php';
			?>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='index.php?id=contact'>Контакты</a></li>
				<li><a href='index.php?id=about'>О нас</a></li>
				<li><a href='index.php?id=info'>Информация</a></li>
				<li><a href='test/index.php'>Он-лайн тест</a></li>
				<li><a href='index.php?id=gbook'>Гостевая книга</a></li>
				<li><a href='eshop/catalog.php'>Магазин</a></li>
                                <li><a href='index.php?id=log'>Журнал посещений</a></li>
			</ul>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
                        <p>&copy; Супер-мега сайт, 2000 - <?= date('Y')?></p>
                        <a href="http://corp.wamba.com/ru/test/"><img border="0" src="http://corp.wamba.com/ru/test/widget/?id=106316" /></a>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>
<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?php
        $file = "data.txt";
	$myFile = fopen("data.txt", "r") or die("Не могу открыть файл");
	echo 'Файл успешно открыт для чтения' . '<br>';
        echo fread($myFile, filesize($file)) . "";
	fclose($myFile);
	echo 'Файл закрыт';	
?>
</BODY>
</HTML>
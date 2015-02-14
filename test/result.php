<?php
    $result = 0;
    if(isset($_SESSION['test'])){
        $answers = parse_ini_file("answers.ini");
        foreach ($_SESSION['test'] as $val){
            if(array_key_exists($val, $answers))
                    $result += $answers[$val];
        }
        session_destroy();
    }
?>
<table width="100%">
	<tr>
		<td align="left">
                    <p>Ваш результат: <?= $result?> из 30</p>
		</td>
	</tr>
</table>
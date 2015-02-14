<?php
require('functions.php');
require('inc/connect_db.php');
require('gbook/data_gbook.php');

//////////РИСУЕМ ФОРМУ/////////////
echo "<div class='include_form'>";
    echo "<h3>Оставьте запись в нашей Гостевой книге</h3>";
    echo "<form method='post' action='{$_SERVER['REQUEST_URI']}'>";
        echo "Имя: <br /><input type='text' name='name' /><br />";
        echo "Email: <br /><input type='text' name='email' /><br />";
        echo "Сообщение: <br /><textarea name='msg'></textarea><br />";
        echo "<br />";
        echo "<input type='submit' name='submit1' value='Отправить' />";
echo "</div>";        

while ($rez = mysqli_fetch_assoc($query_sel)) {
echo "<div class='select_form'>";    
    $time = date('m-d-Y H:i:s', $rez['dt']);
    $id = $rez['id'];
    echo "<table>";
        echo "<tr>";
            echo "<td>{$rez['name']}</td>";
            echo "<td>$time</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan='2'>{$rez['msg']}</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan='2'>";
                echo "<form action='{$_SERVER['REQUEST_URI']}' method='post'>";
                echo "<input type='hidden' name='erase' value='{$id}' />";
                echo "<input type='submit' name='submit2' value='Удалить'>";
                echo "</form>";
            echo"</td>";
        echo "</tr>";
    echo "</table>";
    echo "<br>";
    echo "</div>"; 
}
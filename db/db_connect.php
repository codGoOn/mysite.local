<?php
error_reporting(0);
echo "<pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link = mysqli_connect('localhost', 'root', '', 'web') or die(mysqli_connect_error($link));

mysqli_query($link, "SET NAMES 'utf8'");
$rez = mysqli_query($link, 'select * from teachers') or die(mysqli_error($link));
mysqli_close($link);

echo '<table border="1">';
    echo '<tr>';
        echo '<th>№</th>';
        echo '<th>ФИО</th>';
        echo '<th>Адрес</th>';
        echo '<th>Телефон</th>';
    echo '</tr>';
while($arr_teach = mysqli_fetch_array($rez, MYSQLI_ASSOC)){
    echo '<tr>';
        foreach ($arr_teach as $val)
           echo "<td>{$val}</td>";  
    echo '</tr>';
}
 echo '</table>';
//, $value . "<br>"

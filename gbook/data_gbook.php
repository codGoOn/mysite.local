<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Проверка, пришли ли данные методом POST
    if (isset($_POST['submit1'])) {
        $name = clearPost($_POST['name']);
        $mail = clearPost($_POST['email']);
        $msg = clearPost($_POST['msg']);
        
        
    //Сохранение данных в базу данных
    $ins = "INSERT INTO msgs (name, email, msg) "
            . "VALUES ('$name', '$mail', '$msg')";
    mysqli_query($link, $ins) or die(mysqli_error($link));
    exit(header("Location: " . $_SERVER['SCRIPT_NAME'] . '?id=gbook'));
    }
    
    //Удаление данных из базы
    if(isset($_POST['submit2'])){
    $del = clearPost($_POST['erase']);
    $delFromBase = "DELETE FROM msgs WHERE id = $del";
    mysqli_query($link, $delFromBase) or die(mysqli_error($link));
    exit(header("Location: " . $_SERVER['SCRIPT_NAME'] . '?id=gbook'));
    }

//Вывод данных для отображения на экране
$q1 = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt "
        . "FROM msgs ORDER BY id DESC LIMIT 5";
$query_sel = mysqli_query($link, $q1) or die(mysqli_error($link));
mysqli_close($link);
echo "<p>Всего записей в гостевой книге: " . mysqli_num_rows($query_sel) . "<p/>";
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Проверки полей ввода
function clearPost($data){
    global $link;
    return mysqli_real_escape_string($link, trim(strip_tags($data)));
}

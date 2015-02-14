    <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
    <button value="erase" type="submit">Очистить лог</button>
    </form>
<?php
    //phpinfo(32);
    if(file_exists('log/'.PATH_LOG)){
        $log = file('log/'.PATH_LOG);
        if(is_array($log)){
            echo "<ol>";
            foreach ($log as $key){
                list($date_time, $page, $ref) = explode ('|', $key);
                $date_time = date('d-m-Y H-i-s', $date_time);
                echo <<<LINE
               <li>
                   $date_time: $ref --> $page 
               </li> 
LINE;
            }
            echo "</ol>";
        }
    }
            
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erase = $_POST['erase'];
    $new_ln = '';
    $erase = file_put_contents('log/'.PATH_LOG, $new_ln);
    
    //Редирект для исключения повтороной отправки формы (автообновление после нажатия)
    header("Location:" . $_SERVER['REQUEST_URI']);
    exit();
    }
?>
    
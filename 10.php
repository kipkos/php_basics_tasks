<?php
require_once '9.php';
$work = 'Это рабочий день';

switch ($day){
    case ($day > 1 || $day < 5) || $day == 5:
        echo $work;
        break;
}
?>
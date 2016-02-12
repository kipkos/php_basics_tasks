<?php
require_once '9.php';
$work = 'Это рабочий день';
$nwork = 'Это выходной день';

switch ($day){
    case ($day > 1 || $day < 5) || $day == 5:
        echo $work;
        break;
    case $day == 6 || $day == 7:
        echo $nwork;
        break;
}
?>
<?php
require_once '2.php';

if ($age > 18 && $age < 59 || $age == 59 || $age == 18) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
} elseif ($age < 18) {
    echo 'Вам еще рано работать';
}

?>
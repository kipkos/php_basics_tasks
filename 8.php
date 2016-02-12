<?php
require_once '2.php';
echo "is_numeric($age)";
 if (is_numeric($age) && $age > 0) {
    if ($age > 18 && $age < 59 || $age == 59 || $age == 18) {
        echo 'Вам еще работать и работать';
    } elseif ($age > 59) {
        echo 'Вам пора на пенсию';
    } elseif ($age < 18) {
        echo 'Вам еще рано работать';
    }
} else {

 }

?>
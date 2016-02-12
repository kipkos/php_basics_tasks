<?php
$a = 0;
$b = 0 ;
$operator = '*';


switch($operator){
    case ($a == 0 && $operator == '/') || ($b == 0 && $operator == '/'):
        echo '0 делить нельзя';
        break;
    case $operator =='+':
        $s = $a+$b;
        echo $s;
        break;
    case $operator == '-':
        echo "$a-$b";
        break;
    case $operator == '*':
        $s = $a*$b;
        echo $s;
        break;
    case $operator == '/':
        $s = $a/$b;
        echo $s;
        break;
    case $operator == '%':
        $s = $a % $b;
        echo $s;
        break;
}

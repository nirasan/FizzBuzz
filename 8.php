<?php
    function fizzbuzz($val, $num, $str) {
        return ($val % $num == 0) ? $str : false;
    }
    foreach (range(1, 19) as $i) {
        $val = fizzbuzz($i, 15, 'FizzBuzz') ?: fizzbuzz($i, 5, 'Fizz') ?: fizzbuzz($i, 3, 'Buzz') ?: $i;
        echo $val . PHP_EOL;
    }
?>

<?php
    function fizzbuzz($val, $num, $str) {
        return ($val % $num == 0) ? $str : false;
    }
    function or_pl($a, $b) {
        return $a ?: $b;
    }
    foreach (range(1, 100) as $i) {
        echo( or_pl( fizzbuzz($i, 15, 'FizzBuzz'), or_pl( fizzbuzz($i, 5, 'Fizz'), or_pl( fizzbuzz($i, 3, 'Buzz'), $i ) ) ) . PHP_EOL );
    }
?>

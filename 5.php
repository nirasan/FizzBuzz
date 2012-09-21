<?php
    function fizzbuzz($val) {
        $conds = array(array(15 => 'FizzBuzz'), array( 5 => 'Fizz'), array( 3 => 'Buzz'));
        foreach ($conds as $cond) {
            foreach ($cond as $num => $str) {
                if ($val % $num == 0) {
                    $val = $str;
                    break 2;
                }
            }
        }
        return $val;
    }
    foreach (range(1, 100) as $i) {
        echo( fizzbuzz($i) . "\n" );
    }
?>

<?php
    function fizzbuzz($val) {
        $conds = array(
            array('num' => 15, 'str' => 'FizzBuzz'), 
            array('num' =>  5, 'str' => 'Fizz'), 
            array('num' =>  3, 'str' => 'Buzz'),
        );
        foreach ($conds as $cond) {
            if ($val % $cond['num'] == 0) {
                $val = $cond['str'];
                break;
            }
        }
        return $val;
    }
    function fizzbuzz_caller($start, $end) {
        echo( fizzbuzz($start) . "\n" );
        if ($start < $end) {
            fizzbuzz_caller($start + 1, $end);
        }
    }
    fizzbuzz_caller(1,100);
?>

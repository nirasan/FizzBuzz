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
    foreach (range(1,100) as $i) {
        echo( fizzbuzz($i) . "\n" );
    }
?>

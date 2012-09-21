<?php
    foreach (range(1, 100) as $i) {
        $val = 
            ($i % 15 == 0) ? 'FizzBuzz' : (
                ($i %  5 == 0) ? 'Fizz' : (
                    ($i %  3 == 0) ? 'Buzz' : $i
                )
            );
        echo( $val . "\n" );
    }
?>

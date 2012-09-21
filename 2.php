<?php
    foreach (range(1,100) as $i) {
        if ($i % 15 == 0) {
            $val = "FizzBuzz";
        }
        elseif ($i % 5 == 0) {
            $val = "Fizz";
        }
        elseif ($i % 3 == 0) {
            $val = "Buzz";
        }
        else {
            $val = $i;
        }
        echo $val . "\n";
    }
?>

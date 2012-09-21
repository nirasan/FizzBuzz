<?php
    for ($i = 1; $i <= 100; $i++) {
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

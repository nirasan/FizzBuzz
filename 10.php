<?php
    class FizzBuzz {
        private $value;
        public function __construct($v) {
            $this->value = $this->fizzbuzz($v, 15, 'FizzBuzz') ?: $this->fizzbuzz($v, 5, 'Fizz') ?: $this->fizzbuzz($v, 3, 'Buzz') ?: (string)$v;
        }
        private function fizzbuzz($val, $num, $str) {
            return ($val % $num == 0) ? $str : false;
        }
        public function __toString() {
            return $this->value;
        }
    }
    foreach (range(1, 19) as $i) {
        $fizzbuzz = new FizzBuzz($i);
        echo $fizzbuzz . PHP_EOL;
    }
?>

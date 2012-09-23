<?php
    class FizzBuzz {
        private $value;
        public function __construct($v) {
            $this->value = $this->fizzbuzz($v, 15, 'FizzBuzz') ?: $this->fizzbuzz($v, 5, 'Fizz') ?: $this->fizzbuzz($v, 3, 'Buzz') ?: $v;
        }
        private function fizzbuzz($val, $num, $str) {
            return ($val % $num == 0) ? $str : false;
        }
        public function say() {
            return $this->value;
        }
    }
    foreach (range(1, 19) as $i) {
        $fizzbuzz = new FizzBuzz($i);
        echo $fizzbuzz->say() . PHP_EOL;
    }
?>

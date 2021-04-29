<?php
use App\Calculator;
test('assert sum 1+1 equals 2', function(){
    $calculator = new Calculator();
    $this->assertEquals(2, $calculator->sum(1,1));
});
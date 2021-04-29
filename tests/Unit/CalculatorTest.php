<?php
use App\Calculator;
test('assert sum 1+1 equals 2', function(){
    $calculator = new Calculator();
    $this->assertEquals(2, $calculator->sum(1,1));
});

test("assert sum 1+1+1 equals 3", function(){
    $calculator = new Calculator();
    $this->assertEquals(3, $calculator->sum(1,1,1));
});
test("assert sum 1 argument returns the argument", function(){
    $calculator = new Calculator();
    $this->assertEquals(10, $calculator->sum(10));
});
test("assert sum with no argument returns ZERO", function(){
    $calculator = new Calculator();
    $this->assertEquals(0, $calculator->sum());
});
test("if passed word still works with other params", function(){
    $calculator = new Calculator();
    $this->assertEquals(10, $calculator->sum(5,5,"cinco"));
});
test("if passed number as string still works.", function(){
    $calculator = new Calculator();
    $this->assertEquals(15, $calculator->sum(5,5,"5"));
});
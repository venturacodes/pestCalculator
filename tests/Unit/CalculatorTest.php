<?php
use App\Calculator;

beforeEach(fn()=>$this->calculator = new Calculator());

test('assert sum 1+1 equals 2', function(){
    $this->assertEquals(2, $this->calculator->sum(1,1));
});

test("assert sum 1+1+1 equals 3", function(){
    $this->assertEquals(3, $this->calculator->sum(1,1,1));
});
test("assert sum 1 argument returns the argument", function(){
    $this->assertEquals(10, $this->calculator->sum(10));
});
test("assert sum with no argument returns ZERO", function(){
    $this->assertEquals(0, $this->calculator->sum());
});
test("if passed word still works with other params", function(){
    $this->assertEquals(10, $this->calculator->sum(5,5,"cinco"));
});
test("if passed number as string still works.", function(){
    $this->assertEquals(15, $this->calculator->sum(5,5,"5"));
});

test("assert 1 times 1 is 1", function(){
   $this->assertEquals(1, $this->calculator->multiply(1,1));
});
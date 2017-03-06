<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Calculator;

class MyFirstUnitTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->sum(2, 2) == 4);
    }
    public function testDiff()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->diff(2, 2) == 0);
    }
    public function testMultiplication()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->multiplication(2, 2) == 4);
    }
    public function testDiv()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->div(2, 2) == 1);
    }
    public function testDivByNull()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->div(2, 0) == "don't divide by zero");
    }
}
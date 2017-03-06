<?php

namespace App;

class Calculator
{
    public function sum($x, $y) 
    {
        $z = $x + $y;
        return $z;
    }
    public function diff($x, $y) 
    {
        $z = $x - $y;
        return $z;
    }
    public function multiplication($x, $y) 
    {
        $z = $x * $y;
        return $z;
    }
    public function div($x, $y) 
    {
        if($y == 0)
            return "don't divide by zero";
        $z = $x / $y;
        return $z;
    }    
}
<?php
namespace App;

class Check 
{
    public $sum;
    public function answer()
    {
        return $this->sum;
    }

    public function sum($a, $b)
    {
        $this->sum = $a + $b;
        
        return $this->sum;
    }
}
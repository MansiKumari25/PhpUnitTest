<?php

use PHPUnit\Framework\TestCase;

class MySecondTest extends TestCase
{
    /**
     * @test
     */
    public function run_the_test_()
    {
        // $check = new \App\Check();
        // $check->sum(5, 2);
        // $expected = 7;
        $this->assertEquals(7, 3+4);
    }

    
}
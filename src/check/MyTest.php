<?php

use PHPUnit\Framework\TestCase;
require 'app/Check.php';

class MyTest extends TestCase
{
    /**
     * @test
     */
    public function that_first_()
    {
        $check = new \App\Check();
        $check->sum(5, 2);
        $expected = 7;
        $this->assertEquals($expected, $check->answer());
    }

    /**
     * @test
     *
     */
    public function second_test()
    {
        $this->assertEquals(4, 6-2);
    }
}
<?php

namespace Tests\Unit;

use App\Helpers\Hamming;
use PHPUnit\Framework\TestCase;

class HammingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Hamming()
    {
        $hamming = new Hamming();//Create a new object from Hamming Helper

        $a = "Tariq";//Sample for text1
        $b = "Tareq";//Sample for text2
        $expected_dis_value = 1;//Expected value for Hamming distance

        $hamming_dis = $hamming->index($a, $b);//Runs the function

        return $this->assertEquals($expected_dis_value, $hamming_dis);//Return Result
    }
}

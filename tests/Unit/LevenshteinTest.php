<?php

namespace Tests\Unit;

use App\Helpers\Levenshtein;
use PHPUnit\Framework\TestCase;

class LevenshteinTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Levenshtein()
    {
        $levenshtein = new Levenshtein();//Create a new object from Levenshtein Helper

        $a = "Tariq";//Sample for text1
        $b = "Tareq";//Sample for text2
        $expected_dis_value = 1;//Expected value for Levenshtein distance

        $levenshtein_dis = $levenshtein->index($a, $b);//Runs the function

        return $this->assertEquals($expected_dis_value, $levenshtein_dis);//Return Result
    }
}

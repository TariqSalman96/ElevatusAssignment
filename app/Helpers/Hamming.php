<?php

namespace App\Helpers;

class Hamming
{
    private $i = 0;
    private $count = 0;

    private function hamming_dis($a, $b)
    {
        // This function finds the hamming distance between text a and b
        $i = $this->i; $count = $this->count;

        if(strlen($a) != strlen($b)) // To check if text a and b are equal in length.
        {
            if(strlen($a) > strlen($b))// To check if a length is greater than b length.
                $b = str_pad($b, strlen($a));// To pad shorter text with spaces to equal first text length.
            else // To check if b length is greater than a length.
                $a = str_pad($a, strlen($b));// To pad shorter text with spaces to equal second text length.
        }

        while (isset($a[$i]) != '') // loops the text.
        {
            if ( $a[$i] != $b[$i]) // this checks if texts are equal in length.
                $count++;
            $i++;
        }

        return $count;//To return distance.
    }

    function index($a, $b)//This function accesses hamming_dis function because it's private
    {
        return $this->hamming_dis($a, $b);
    }
}

<?php

namespace App\Helpers;

class Levenshtein
{
    private function levenshtein_dis($a, $b){
        // This function finds the Levenshtein distance between text a and b
        return levenshtein($a, $b);//To return Levenshtein distance.
        /*
         * this is a built-in function in PHP which calculates Levenshtein distance.
         * insertion_cost default value is 1
         * replacement_cost default value is 1
         * deletion_cost default value is 1
         */
    }

    function index($a, $b)//This function accesses levenshtein_dis function because it's private
    {
        return $this->levenshtein_dis($a, $b);
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\Hamming;
use App\Helpers\Levenshtein;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('form'); // returns the view of the form page.
    }

    public function submit(Request $request)
    {
        $request->validate([
            'text1' => 'required',//To check if the user filled in text 1
            'text2' => 'required',//To check if the user filled in text 2
        ]);

        $a = $request->text1;//To Assign text 1 value inside variable a
        $b = $request->text2;//To Assign text 2 value inside variable b

        $Hamming = new Hamming();//Create a new object from Hamming class
        $Levenshtein = new Levenshtein();//Create a new object from Levenshtein class

        $hamming_dis = $Hamming->index($a, $b);//Access index function in Hamming class
        $levenshtein_dis = $Levenshtein->index($a, $b);//Access index function in Levenshtein class

        //store Hamming distance and Levenshtein distances inside an array to return view them inside a page
        $data = ['hamming_dis' => $hamming_dis, 'levenshtein_dis' => $levenshtein_dis];
        return back()->with('data', $data);
    }

}

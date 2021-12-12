<?php

namespace App\Console\Commands;

use App\Helpers\Hamming;
use Illuminate\Console\Command;

class HammingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Distance:Hamming {text1} {text2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns Hamming Distance between text 1 and 2';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hamming = new Hamming();//Create An Object from Hamming Helper

        $a = $this->argument('text1');//To Assign text 1 value inside variable a
        $b = $this->argument('text2');//To Assign text 2 value inside variable b

        $hamming_dis = $hamming->index($a, $b);//Run the function

//        return "the hamming distance between text1 ($a) and text2 ($b) is $hamming_dis";
        dd("the hamming distance between text1 ($a) and text2 ($b) is $hamming_dis");
    }

}

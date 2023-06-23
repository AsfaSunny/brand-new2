<?php
namespace App\RepoTesetories;

class Adder{

    public function tester(){
        $a = 10;
        $b = 50;

        $c = $a + $b;
        dd($c);
    }

    public function subtract(){
        $a = 10;
        $b = 50;

        $c = $b - $a;
        dd($c);
    }
}

?>

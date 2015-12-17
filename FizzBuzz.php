#!/usr/bin/env php

<?php
class FizzBuzz{
    function say($n){
        if($this->fizz_buzz($n)){
            return "FizzBuzz";
        }
        elseif($this->fizz($n)){
            return "Fizz";
        }
        elseif($this->buzz($n)){
            return "Buzz";
        }
        else{
            return $n;
        }
    }

    private function fizz_buzz($n){
        if($this->fizz($n) && $this->buzz($n)){ return true;}else{ return false;}
    }

    private function fizz($n){
        if($n % 3 == 0){ return true;}else{ return false;}
    }

    private function buzz($n){
        if($n % 5 == 0){ return true;}else{ return false;}
    }

}

$numbers = new FizzBuzz();
for ($i = 1; $i <= 30; $i++)
{
    echo("{$i}\t:{$numbers->say($i)}\n");
}

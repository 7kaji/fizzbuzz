<?php

require_once 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    function setUp(){
        $this->number = new FizzBuzz();
    }

    function test_say(){
        $this->assertEquals(1, $this->number->say(1));
    }

    function test_say3(){
        $this->assertEquals('Fizz', $this->number->say(3));
    }

    function test_say5(){
        $this->assertEquals('Buzz', $this->number->say(5));
    }

    function test_say15(){
        $this->assertEquals('FizzBuzz', $this->number->say(15));
    }
}

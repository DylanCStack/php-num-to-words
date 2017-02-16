<?php
    require_once 'src/Numbers.php';

    class NumbersTest extends PHPUnit_Framework_TestCase

    {
        function test_single_digit()
        {
            $number = new Numbers;
            $input = 1;

            $result= $number->NumbersToWords($input);

            $this->assertEquals("one ",$result);

        }

        function test_multiple_of_10()
        {
            $number = new Numbers;
            $input = 60;

            $result= $number->NumbersToWords($input);

            $this->assertEquals("sixty ",$result);

        }
        function test_under_100()
        {
            $number = new Numbers;
            $input = 17;

            $result= $number->NumbersToWords($input);
            $this->assertEquals("seventeen ",$result);

        }
        function test_under_1000()
        {
            $number = new Numbers;
            $input = 998;

            $result= $number->NumbersToWords($input);
            $this->assertEquals("nine hundred ninety eight ",$result);

        }
    }

 ?>

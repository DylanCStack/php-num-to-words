<?php
    require_once 'src/Numbers.php';
    require_once 'src/AltNumbers.php';

    class NumbersTest extends PHPUnit_Framework_TestCase

    {
        function test_single_digit()
        {
            $number = new AltNumbers;
            $input = 1;

            $result= $number->NumbersToWords($input);

            $this->assertEquals("one ",$result);

        }

        function test_multiple_of_10()
        {
            $number = new AltNumbers;
            $input = 60;

            $result= $number->NumbersToWords($input);

            $this->assertEquals("sixty ",$result);

        }
        function test_under_100()
        {
            $number = new AltNumbers;
            $input = 65;

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
        function test_under_100000()
        {
            $number = new Numbers;
            $input = 99567;

            $result= $number->NumbersToWords($input);
            $this->assertEquals("ninety nine thousand five hundred sixty seven ",$result);

        }
        function test_under_trillion()
        {
            $number = new Numbers;
            $input = 999567;

            $result= $number->NumbersToWords($input);
            $this->assertEquals("nine hundred ninety nine thousand five hundred sixty seven ",$result);

        }
    }

 ?>

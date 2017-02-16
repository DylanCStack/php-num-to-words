<?php
    class Numbers
    {
        function NumbersToWords($input)
        {
            $dictionary = array(0 => "", 1=>'one ', 2=>'two ', 3=>'three ', 4=>'four ', 5=>'five ', 6=>'six ', 7=>'seven ', 8=>'eight ',9=>'nine ', 10=>'ten ', 11=>'eleven ', 12=>'twelve ', 13=>'thirteen ', 14=> 'fourteen ', 15=> 'fifteen ', 16=>'sixteen ', 17=>'seventeen ', 18=> 'eighteen ', 19=>'nineteen ', 20=>'twenty ', 30=>'thirty ', 40=>'four ', 50=>'fifty ', 60=>'sixty ', 70=> 'seventy ', 80=> 'eighty ', 90=> 'ninety ');

            // $num_str= (string)$input;
            // $result = "";

            $tenthousands= (int)($input%100000/10000)*10;

            $has_thousands = "";
            if($input > 999){
                $has_thousands = "thousand ";
            }
            $thousands= (int)($input%10000/1000);

            $has_hundreds = "";
            if($input > 99){
                $has_hundreds = "hundred ";
            }
            $hundreds = (int)($input%1000/100);
            $tens = ((int)($input%100/10)) * 10;
            $ones = $input%10;

            if($tens == 10 &&($ones !== 0))
            {
                $tens = $input%100;
                $ones=0;
            }
            var_dump(" ");
            var_dump("ones: ".$ones);
            var_dump("tens: ".$tens);
            var_dump("hundreds: ".$hundreds);
            var_dump("thousands: ".$thousands);
            var_dump("tenthousands: ".$tenthousands);


            $result =$dictionary[$tenthousands].$dictionary[$thousands].$has_thousands.$dictionary[$hundreds].$has_hundreds.$dictionary[$tens].$dictionary[$ones];

            return $result;

        }
    }

    // $digit %= pow(10,$i)*(10*$i);
 ?>

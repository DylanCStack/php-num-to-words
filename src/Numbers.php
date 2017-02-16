<?php
    class Numbers
    {
        function NumbersToWords($input)
        {
            $dictionary = array(0 => "", 1=>'one ', 2=>'two ', 3=>'three ', 4=>'four ', 5=>'five ', 6=>'six ', 7=>'seven ', 8=>'eight ',9=>'nine ', 10=>'ten ', 11=>'eleven ', 12=>'twelve ', 13=>'thirteen ', 14=> 'fourteen ', 15=> 'fifteen ', 16=>'sixteen ', 17=>'seventeen ', 18=> 'eighteen ', 19=>'nineteen ', 20=>'twenty ', 30=>'thirty ', 40=>'four ', 50=>'fifty ', 60=>'sixty ', 70=> 'seventy ', 80=> 'eighty ', 90=> 'ninety ');

            // $num_str= (string)$input;
            // $result = "";
            $has_hundred = "";
            if($input > 99){
                $has_hundred = "hundred ";
            }

            $hundreds = (int)($input/100);
            $tens = ((int)($input%100/10)) * 10;
            $ones = $input%10;

            if($tens == 10 &&($ones !== 0))
            {
                $tens = $input%100;
                $ones=0;
            }
            
            $result = $dictionary[$hundreds].$has_hundred.$dictionary[$tens].$dictionary[$ones];

            return $result;
            // for($i=0; $i<=strlen($num_str)-1; $i++){
            //
            //
            //
            //     $result.= $dictionary[$num_str[$i]] . " ";
            // }
            return $result;

        }
    }

    // $digit %= pow(10,$i)*(10*$i);
 ?>

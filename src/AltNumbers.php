<?php
    class AltNumbers
    {
        function NumbersToWords($input)
        {
            $dictionary = array(0 => "", 1=>'one ', 2=>'two ', 3=>'three ', 4=>'four ', 5=>'five ', 6=>'six ', 7=>'seven ', 8=>'eight ',9=>'nine ', 10=>'ten ', 11=>'eleven ', 12=>'twelve ', 13=>'thirteen ', 14=> 'fourteen ', 15=> 'fifteen ', 16=>'sixteen ', 17=>'seventeen ', 18=> 'eighteen ', 19=>'nineteen ', 20=>'twenty ', 30=>'thirty ', 40=>'four ', 50=>'fifty ', 60=>'sixty ', 70=> 'seventy ', 80=> 'eighty ', 90=> 'ninety ');

            $magnitude = array(2=>"hundred", 3=>"thousand", 6=>"million", 9=>"billion", 12=>"trillion");

            $strnum = (string) $input;

            $result = "";

            if(strlen($strnum)%3== 1){
                $strnum = "00" . $strnum;
            } elseif (strlen($strnum)%3==2){
                $strnum = "0" . $strnum;
            }
            $len = strlen($strnum);
            var_dump("number input: ".$strnum);
            for($i=$len; $i>0; $i-=3)
            {
                var_dump("line 23: ".$i);
                var_dump($i . " ".$strnum[$len-1-3*($len-$i) - 2 ]);
                var_dump($i . " ".$strnum[ $len-1-3*($len-$i) - 1 ]);
                var_dump($i . " ".$strnum[ $len-1-3*($len-$i) - 0  ]);
                $group = $strnum[$len-1-3*($len-$i) - 2].$strnum[ $len-1-3*($len-$i)-1 ].$strnum[ $len-1-3*($len-$i)-0 ];

                for($k = 0;$k<=2; $k++)
                {
                    $exponent = $k;
                    if($exponent == 2 && $group[2 - $k]!==0){
                        $result += "hundred " . $result;
                        $exponent = 0;
                    }
                    $result += $dictionary[$group[2 - $k]*pow(10 , $exponent)];
                    //returns 0 every time, clearly, it should not
                    var_dump("word retrieved at index ".$i." ".$k . " ".$dictionary[$group[2 - $k]*pow(10 , $exponent)]);
                }

            }


            return $result;

        }
    }


 ?>

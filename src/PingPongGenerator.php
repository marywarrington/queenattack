<?php

    class PingPongGenerator
    {
        function makePingPong($input_number)
        {

            $pingPongArray = array();
            $i = 1;
            while ($i <= $input_number) {
                array_push($pingPongArray, $i);
                ++$i;
            }
        return $pingPongArray;










            // $count_array = array();
            // $i = 1;
            // while ($i <= $input_number) {
            //     array_push($count_array, $i);
            //     ++$i;
            // }
            //
            // $output_pingpong = array();
            // foreach ($count_array as $number) {
            //     if ($number % 3 == 0) {
            //         return "ping ";
            //     } else {
            //         return $number . " ";
            //     }
            //     array_push($output_pingpong, $number);
            // }
            // return $output_pingpong;
        }
    }


 ?>

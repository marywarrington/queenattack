<?php

    class LeetSpeakGenerator
    {
        function makeLeetSpeak($input)
        {
            $output = '';
            $output = str_replace("e", "3", $input);
            $output = str_replace("o", "0", $output);
            return $output;
        }


    }



    // class PingPongGenerator
    // {
    //     function makePingPong($input_number)
    //     {
    //
    //         $pingPongArray = array();
    //         $i = 1;
    //         while ($i <= $input_number) {
    //             array_push($pingPongArray, $i);
    //             ++$i;
    //         }
    //
    //     $output_pingpong = array();
    //     foreach ($pingPongArray as $number) {
    //         if ($number % 15 == 0) {
    //             array_push($output_pingpong, "pingpong");
    //         } elseif ($number % 3 == 0) {
    //             array_push($output_pingpong, "ping");
    //         } elseif ($number % 5 == 0) {
    //             array_push($output_pingpong, "pong");
    //         } else {
    //             array_push($output_pingpong, $number);
    //         }
    //     }
    //     return $output_pingpong;
    //
    //     }
    // }


 ?>

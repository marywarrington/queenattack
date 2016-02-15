<?php

    class LeetSpeakGenerator
    {
        function makeLeetSpeak($input)
        {
            $input_array_of_words = explode(" ", $input);
            $output_array = array();
            foreach ($input_array_of_words as $word) {
                $output = '';
                $output = str_replace("e", "3", $word);
                $output = str_replace("o", "0", $output);
                $output = str_replace("I", "1", $output);
                array_push($output_array, $output);
            }

            // $output = str_replace("s", "z", $output);
            // $output = str_replace(" z", " s", $output);
            return $output_array;
        }
    }

// input "somewhere over the rainbow"
// array ["somewhere", "over", "the", "rainbow"]
// changed ["s0m3wh3r3", ....]


//
// if ("s") {
//     replace with z
// } elseif (" s") {
//     do nothing
// }


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

<?php

    class LeetSpeakGenerator
    {
        function makeLeetSpeak($input)
        {
            $input_array_of_words = explode(" ", $input);
            $output_array = array();
            foreach ($input_array_of_words as $word) {
                if ((substr($word, 0, 1) != "s") && (substr($word, 0, 1) != "S")) {
                    $output = '';
                    $output = str_replace("e", "3", $word);
                    $output = str_replace("o", "0", $output);
                    $output = str_replace("I", "1", $output);
                    $output = str_replace("s", "z", $output);
                    array_push($output_array, $output);
                } else {
                    $letter_array = str_split($word);
                    $output_letters = array();
                    //cuts position 0 letter off and puts it into $output_array
                    array_push($output_letters, $letter_array[0]);
                    //slices off first letter in letters_array
                    array_shift($letter_array);
                    foreach ($letter_array as $letter) {
                        $output = '';
                        $output = str_replace("e", "3", $letter);
                        $output = str_replace("o", "0", $output);
                        $output = str_replace("I", "1", $output);
                        $output = str_replace("s", "z", $output);
                        array_push($output_letters, $output);
                    }
                array_push($output_array, implode("", $output_letters));
            }
        }
            return implode(" ", $output_array);
        }
    }
 ?>

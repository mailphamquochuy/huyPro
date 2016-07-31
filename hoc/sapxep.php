<?php


    // Function swap two variables
    function swap(&$x, &$y) {

        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    // Function sort array
    function sortArray($array) {
        for ($i = 0; $i <= 5; $i++) {

            for ($j = $i+1; $j < 6; $j++) {

                if ($array[$j] < $array[$i]) {

                    swap($array[$j], $array[$i]);die;

                }
            }

            echo '<pre>'; print_r($array); echo '</pre>';
        }
    }

    $mang = array ('40', '5', '2', '7', '11', '1');
    // Run function
    sortArray($mang);

?>
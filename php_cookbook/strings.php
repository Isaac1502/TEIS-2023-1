<?php
    $poem = <<<POEM
    To be or not to be,
    That is the question
    POEM;
    // strpos($string, '/secret/') function use to verify if a substr is in

    // count all occurrences of a substring
    function count_occurrences($haystack, $needle)
    {
        $occurrences = 0;
        $offset = 0;
        $pos = 0;

        do {
            $pos = strpos($haystack, $needle, $offset);

            if ($pos !== false) { 
                $occurrences += 1;
                $offset = $pos + 1; 
            }
        } while ($pos !== false); 

        return $occurrences;
    }

    $str = 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?';

    print count_occurrences($str, 'wood'); // 4
    print count_occurrences($str, 'nutria'); // 0

    //substr()
    //substr_replace()
    //str_replace()
    //str_ireplace()
    //str_split
    //implode() join the data elements (array) with the specific char btw them.
    
?>
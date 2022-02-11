<?php

class Levenshtein
{
    /**
     * levenshtein_dis will calculate Levenshtein distance:
     * that have 3 possible operators: insert, delete or
     * substitution operations
     *
     * @param $str1
     * @param $str2
     * @return mixed
     */
    static function levenshtein_dis($str1, $str2)
    {
        //get length of the two input strings
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        //using memo array to store solutions to reduce time
        $memo = array_fill(0, 2, array_fill(0, $len1 + 1, 0));
        for ($i = 0; $i <= $len1; $i++) {
            $memo [0][$i] = $i;
        }
        // fill the memo, and we start from each char of the second string
        for ($i = 1; $i <= $len2; $i++) {
            // starting from the first char from string 2 and compare it to the characters of the first string
            for ($j = 0; $j <= $len1; $j++) {
                //check if empty then add char to get the same string
                if ($j == 0) {
                    $memo[$i % 2][$j] = $i;
                } else{
                    // If characters are not equal we have to find the minimum cost.
                    if ($str1[$j - 1] != $str2[$i - 1]) {
                        $memo[$i % 2][$j] = 1 + min($memo[($i - 1) % 2][$j], min($memo[$i % 2][$j - 1], $memo[($i - 1) % 2][$j - 1]));
                    } else {
                        //the twp chars are the same, so we don't have to thing except bound the row
                        $memo[$i % 2][$j] = $memo[($i - 1) % 2][$j - 1];
                    }
                }

            }
        }
        //the result after completing the memo
        //we divide by two to get the right row if even will be row 0 if odd will be row 1
        return $memo[$len2 % 2][$len1];
    }
}

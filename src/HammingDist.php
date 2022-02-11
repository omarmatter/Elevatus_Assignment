<?php

class HammingDist
{

    /**
     * hamming_dis will calculate hamming that only have substitute operations
     *
     * @param $str1
     * @param $str2
     * @return false|int
     */
    public static function hamming_dis($str1, $str2)
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        // will return false if the two strings are not the same length
        if ($len1 != $len2) {
            return false;
        }

        $dist = 0;
        //add to dist when the two chars of str1 & str2 are not equal
        for ($i = 0; $i < $len1; $i++) {
            if ($str1 [$i] != $str2 [$i]) {
                $dist++;
            }
        }
        // dist is the hamming distance between str1 and str2
        return $dist;
    }
}

?>
 
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/12
 * Time: 9:18
 */
class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $maxGys = $this->max_gys($len1, $len2);

        $key = substr($str1, 0, $maxGys);

        for ($i = 0; $i < max($len1, $len2); $i += $maxGys) {
            //print_r(substr($str2, $i, $maxGys));print_r('/');
            if (isset($str1[$maxGys + $i - 1]) && $key != substr($str1, $i, $maxGys)) {
                return '';
            }
            if (isset($str2[$maxGys + $i - 1]) && $key != substr($str2, $i, $maxGys)) {
                return '';
            }
        }
        return $key;
    }

    function max_gys($a, $b)
    {
        if($b==0){
            return $a;
        }
        return $this->max_gys($b,$a%$b);

    }
}

$str1 = 'LEET';
$str2 = 'CODE';
$S = new Solution();
print_r($S->gcdOfStrings($str1, $str2));
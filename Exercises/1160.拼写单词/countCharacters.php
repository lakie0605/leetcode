<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/17
 * Time: 9:03
 */
class Solution {

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars) {
        $num = 0;
        foreach ($words as $word) {
            $char = str_split($chars);
            $j = 0;
            $len = strlen($word);
            for ($i = 0; $i < $len; $i++) {
                if (in_array($word[$i], $char)) {
                    $j++;
                    unset($char[array_keys($char, $word[$i])[0]]);
                    if ($j == $len) {
                        $num += $j;
                    }
                }
            }
        }
        return $num;
    }
}

$words = ["hello","world","leetcode"];
$chars = 'welldonehoneyr';
$S = new Solution();
print_r($S->countCharacters($words, $chars));
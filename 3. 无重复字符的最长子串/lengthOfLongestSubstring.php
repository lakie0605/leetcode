<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:16
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($str) {
        $arr = [];
        for ($i = 0, $k = 0; $i < strlen($str); $i++) {
            if (!in_array($str[$i], $arr)) {
                if (count($arr) > 0) {
                    if ($str[$i-1] == $arr[count($arr) - 1]) {
                        array_push($arr, $str[$i]);
                    }
                } else {
                    $arr = [$str[$i]];
                }
                $j = count($arr);
                if ($j > $k) {
                    $k = $j;
                }
            } else {
                $str = substr($str, strpos($str, $str[$i]) + 1);
                $i = -1;
                $arr = [];
            }
        }
        return $k;
    }
}
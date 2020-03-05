<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:31
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if (strlen($s) <= 1) {
            return $s;
        }
        $res = $s[0];
        for ($i = 0; $i < strlen($s); $i++) {
            $temp = $s[$i];
            for ($j = $i + 1; $j < strlen($s); $j++) {
                $temp = $temp . $s[$j];
                $revTemp = strrev($temp);
                //print_r($revTemp);print_r('/');
                //print_r($temp);print_r('\\');
                if ($revTemp == $temp && strlen($temp) > strlen($res)) {
                    $res = $temp;
                }
                if (strlen($res) == strlen($s)) {
                    return $res;
                }
            }
        }
        return $res;
    }
}
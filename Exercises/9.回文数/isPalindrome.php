<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:40
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = (string)$x;
        for ($i = 0, $j = strlen($x) - 1; $i <= $j; $i++, $j--) {
            if ($x[$i] != $x[$j]) {
                return false;
            } else {
                $k = true;
            }
        }
        return $k;
    }
}
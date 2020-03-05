<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:06
 */
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0) {
            return false;
        }
        $x = log($n, 2);
        $y = explode('.', (string)$x);
        return count($y) == 1 ? true : false;
    }
}
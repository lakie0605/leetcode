<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:36
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $x = (string)$x;
        $t = null;
        if ($x[0] == '-') {
            $t = '-';
            $x = substr($x, 1);
        }
        $x = strrev($x);
        $x = (int)$x;
        $x = (int)($t . $x);
        if ($x > 2147483647 || $x < -2147483647) {
            return 0;
        } else {
            return $x;
        }
    }
}
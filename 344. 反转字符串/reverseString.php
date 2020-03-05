<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:12
 */
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        for ($i = 0, $j = count($s) - 1; $j - $i >= 1; $i++, $j--) {
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;
        }
        return $s;
    }
}
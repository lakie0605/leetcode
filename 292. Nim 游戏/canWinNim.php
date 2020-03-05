<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:10
 */
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function canWinNim($n) {
        if ($n <= 3) {
            return true;
        } else {
            if ($n % 2 == 0 && $n / 2 % 2 == 0) {
                return false;
            } else {
                return true;
            }
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:22
 */
class Solution {

    /**
     * @param Integer $n
     * @return Float
     */
    function nthPersonGetsNthSeat($n) {
        return $n == 1 ? 1 : 0.5;
    }
}
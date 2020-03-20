<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/20
 * Time: 9:49
 */
class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer[]
     */
    function getLeastNumbers($arr, $k) {
        sort($arr);
        return array_slice($arr, 0, $k);
    }
}
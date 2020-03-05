<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:00
 */
class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function grayCode($n) {
        $data = [0];
        $h = 1;
        for ($i = 0; $i < $n; $i++) {
            for ($j = count($data) - 1; $j >= 0; $j--) {
                array_push($data, $h + $data[$j]);
            }
            $h <<= 1;
        }
        return $data;
    }
}
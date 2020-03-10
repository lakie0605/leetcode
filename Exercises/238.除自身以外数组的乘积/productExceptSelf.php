<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:08
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $left = $right = 1;
        $res = $data = [];
        for($l = 0, $r = count($nums) - 1; $l < count($nums); $l++, $r--) {
            if (!isset($res[$l])) {
                $res[$l] = 1;
            }
            if (!isset($res[$r])) {
                $res[$r] = 1;
            }
            $res[$l] *= $left;
            $res[$r] *= $right;
            $left *= $nums[$l];
            $right *= $nums[$r];
        }
        for ($i = 0; $i < count($res); $i++) {
            $data[$i] = $res[$i];
        }
        return $data;
    }
}
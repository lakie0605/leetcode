<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:58
 */
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($arr) {
        $left = 0;
        $right = count($arr) - 1;
        $leftMax = 0;
        $rightMax = 0;
        $area = 0;
        while ($left < $right) {
            if ($arr[$left] <= $arr[$right]) {
                if ($arr[$left] > $leftMax) {
                    $leftMax = $arr[$left];
                } else {
                    $area += $leftMax - $arr[$left];
                }
                $left++;
            } else {
                if ($arr[$right] > $rightMax) {
                    $rightMax = $arr[$right];
                } else {
                    $area += $rightMax - $arr[$right];
                }
                $right--;
            }
        }
        return $area;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:08
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            if (in_array($target - $nums[$i], $nums) && array_search($target - $nums[$i], $nums) != $i) {
                $j = array_search($target - $nums[$i], $nums);
                if ($i < $j) {
                    $arr = [$i, $j];
                } else {
                    $arr = [$j, $i];
                }
            }
        }
        if (isset($arr)) {
            return $arr;
        } else {
            return 0;
        }
    }
}
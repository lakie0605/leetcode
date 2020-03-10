<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 10:46
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findRepeatNumber($nums) {
        sort($nums);
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $nums[$i + 1]) {
                return $nums[$i];
            }
        }
        return null;
    }
}
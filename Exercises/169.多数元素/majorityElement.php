<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/13
 * Time: 9:23
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        sort($nums);
        return $nums[count($nums) / 2];
    }
}
$nums = [1,2,1,2,2];
$S = new Solution();
print_r($S->majorityElement($nums));
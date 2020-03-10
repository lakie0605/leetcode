<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:03
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)     {
        $a = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $a ^= $nums[$i];
        }
        return $a;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:26
 */
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $num = array_merge($nums1, $nums2);
        array_multisort($num, SORT_ASC);
        if (count($num) % 2 > 0) {
            $middle = (count($num) - 1) / 2;
            $res = $num[$middle];
        } else {
            $middle = count($num) / 2;
            $res = ($num[$middle - 1] + $num[$middle]) / 2;
        }
        return $res;
    }
}
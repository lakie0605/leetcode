<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:50
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        array_multisort($nums, SORT_ASC);
        //print_r($nums);print_r('////');
        $res = [];
        if (count($nums) < 3) {
            return $res;
        }
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > 0) {
                return $res;
            }
            $L = $i + 1;
            $R = count($nums) - 1;
            while ($L < $R) {
                if ($nums[$i] + $nums[$L] + $nums[$R] == 0) {
                    //print_r($i);print_r('/');print_r($L);print_r('/');print_r($R);print_r(';');
                    $res[] = [$nums[$i], $nums[$L], $nums[$R]];
                    while ($L < $R && $nums[$L] == $nums[$L + 1]) {
                        $L = $L + 1;
                    }
                    while ($L < $R && $nums[$R] == $nums[$R - 1]) {
                        $R = $R - 1;
                    }
                    $R--;
                    $L++;
                }elseif ($nums[$i] + $nums[$L] + $nums[$R] > 0) {
                    $R = $R - 1;
                } else {
                    $L = $L + 1;
                }
            }
            while ($i < count($nums) && $nums[$i] == $nums[$i + 1]) {
                $i++;
            }
        }
        return $res;
    }
}
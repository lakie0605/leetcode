<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:44
 */
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $maxArea = 0;
        for ($i = 0, $j = count($height) - 1; $i < count($height) - 1, $j > 0;) {
            $area = min($height[$i], $height[$j]) * ($j - $i);
            //print_r($j);print_r('/');
            if ($area > $maxArea) {
                $maxArea = $area;
            }
            if ($height[$i] >= $height[$j]) {
                $j--;
            } else {
                $i++;
            }
        }
        return $maxArea;
    }
}
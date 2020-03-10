<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 11:01
 */

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $min = $prices[0];
        $earnings = 0;
        for ($i = 0; $i < count($prices); $i++) {
            if ($prices[$i] < $min) {
                $min = $prices[$i];
            } elseif ($earnings < $prices[$i] - $min) {
                $earnings = $prices[$i] - $min;
            }
        }
        return $earnings;
    }
}
$prices = [7,1,5,3,6,4];
$S = new Solution();
print_r($S->maxProfit($prices));
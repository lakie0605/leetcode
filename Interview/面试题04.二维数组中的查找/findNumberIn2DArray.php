<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 15:35
 */

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function findNumberIn2DArray($matrix, $target) {
        $n = -1;
        for ($i = 0; $i < count($matrix[0]); $i++) {
            if (($target > $matrix[0][$i] && (!isset($matrix[0][$i + 1]) || $target < $matrix[0][$i + 1])) || ($target < $matrix[0][$i] && $i > 0 && $target > $matrix[0][$i - 1])) {
                $n = $i;
                break;
            }
            if ($target == $matrix[0][$i]) {
                return true;
            }
        }
        if ($n >= 0) {
            for ($j = 0; $j < count($matrix); $j++) {
                if ($target == $matrix[$j][$n]) {
                    return true;
                }
                if ($target < $matrix[$j][$n]) {
                    $j--;$n--;
                }
            }
        }
        return false;
    }
}

$matrix = [
    [1,   4,  7, 11, 15],
    [2,   5,  8, 12, 19],
    [3,   6,  9, 16, 22],
    [10, 13, 14, 17, 24],
    [18, 21, 23, 26, 30]
];
$target = 0;
$S = new Solution();
print_r($S->findNumberIn2DArray($matrix, $target));
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/11
 * Time: 10:17
 */

class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function canThreePartsEqualSum($A) {
        $sum = array_sum($A);
        if ($sum % 3 != 0) {
            return false;
        }
        $left = 0;
        $right = count($A) - 1;
        $leftSum = $A[0];
        $rightSum = $A[$right];
        while ($left + 1 < $right) {
            if ($leftSum == $sum / 3 && $rightSum == $sum / 3) {
                return true;
            }
            if ($leftSum != $sum / 3) {
                $leftSum += $A[++$left];
            }
            if ($rightSum != $sum / 3) {
                $rightSum += $A[++$right];
            }
        }
        return false;
    }
}
$A = [18,12,-18,18,-19,-1,10,10];
$C = new Solution();
print_r($C->canThreePartsEqualSum($A));
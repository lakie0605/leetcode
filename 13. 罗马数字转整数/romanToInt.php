<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:46
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $value = 0;
        $keyValue = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        for ($i = 0; $i < strlen($s); $i++) {
            if ($i < strlen($s) - 1 && $keyValue[$s[$i]] < $keyValue[$s[$i + 1]]) {
                $value = $value + ($keyValue[$s[$i + 1]] - $keyValue[$s[$i]]);
                $i++;
            } else {
                $value = $value + $keyValue[$s[$i]];
            }
        }
        return $value;
    }
}
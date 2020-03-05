<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:52
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $arr = [
            '(' => 1,
            '[' => 2,
            '{' => 3,
            ')' => 4,
            ']' => 5,
            '}' => 6
        ];

        if (empty($s)) {
            return true;
        }
        $sToArr = str_split($s);
        if (count($sToArr) % 2 != 0 || $arr[$sToArr[count($sToArr) - 1]] < 4) {
            return false;
        }
        $res = true;
        for ($i = 0; $i < count($sToArr); $i++) {
            $p = $arr[$sToArr[$i]];
            if ($p > 3) {
                if ($arr[$sToArr[$i - 1]] + 3 != $p) {
                    $res = false;
                    break;
                } else {
                    array_splice($sToArr, $i, 1);
                    array_splice($sToArr, $i - 1, 1);
                    $i = $i - 2;
                    if ($i < 0) {
                        $i = 0;
                    }
                }
            }
        }
        return $res;
    }
}
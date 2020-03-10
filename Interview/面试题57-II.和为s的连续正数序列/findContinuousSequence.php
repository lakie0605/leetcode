<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 9:27
 */

class Solution {

    /**
     * @param Integer $target
     * @return Integer[][]
     */
    function findContinuousSequence($target) {
        $i = 2;
        $res = [];
        do {
            $shang = intval($target / $i);
            $yu = $target % $i;
            $temp = [];
            $sum = 0;
            if ($i % 2 != 0) {
                if ($yu == 0) {
                    $min = $shang - intval($i / 2);
                    if ($min > 0) {
                        for ($k = $min; $k <=$shang + intval($i / 2); $k++) {
                            $temp[] = $k;
                            $sum += $k;
                        }
                    }
                }
            } else {
                if ($yu > 0 && ($i % $yu == 0)) {
                    $min = $shang - $yu + 1;
                    if ($min > 0) {
                        for ($k = $min; $k <= $shang + $yu; $k++) {
                            $temp[] = $k;
                            $sum += $k;
                        }
                    }
                }
            }
            if (count($temp) > 0 && $sum == $target) {
                $res[] = $temp;
            }
            $i++;
        } while ($i < intval($target / 2));
        return array_reverse($res);
    }
}
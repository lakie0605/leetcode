<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:48
 */
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = $pre = '';
        for($i = 0, $j = 0; $i < count($strs); $i++) {
            if (empty($strs[$i])) {
                break;
            } else {
                if($i == 0) {
                    $pre = substr($strs[$i], $j, 1);
                }
                if($pre == substr($strs[$i], $j, 1)) {
                    if($i == count($strs) - 1) {
                        $prefix = $prefix . $pre;
                        if ($j < strlen($strs[$i]) - 1) {
                            $j++;
                            $i = -1;
                        }
                    }
                } else {
                    break;
                }
            }
        }
        return $prefix;
    }
}
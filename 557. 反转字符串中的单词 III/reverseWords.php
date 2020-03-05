<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:14
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $item = '';
        $temp = '';
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] != ' ') {
                $temp = $s[$i] . $temp;
                if ($i == strlen($s) - 1) {
                    if (empty($item)) {
                        $item = $temp;
                    } else {
                        $item = $item . ' ' . $temp;
                    }
                }
            } else {
                if (empty($item)) {
                    $item = $temp;
                } else {
                    $item = $item . ' ' . $temp;
                }
                $temp = '';
            }
        }
        return $item;
    }
}
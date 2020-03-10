<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 16:57
 */

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function replaceSpace($s) {
        for ($i = 0; $i < strlen($s); $i++) {
            if (ord($s[$i]) == 32) {
                $s = substr_replace($s, '%20', $i, 1);
            }
        }
        return $s;
    }
}

$S = new Solution();
$s = 'a 0   7';
print_r($S->replaceSpace($s));
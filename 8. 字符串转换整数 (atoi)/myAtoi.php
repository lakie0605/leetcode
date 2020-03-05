<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 10:38
 */
class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $lastStr = null;
        for ($i = 0; $i < strlen($str); $i++) {
            if($str[$i] != ' ') {
                //echo ord($str[$i]) . ' ';
                if (ord($str[$i]) == 45 || ord($str[$i]) == 43 || (ord($str[$i]) >= 48 && ord($str[$i]) <= 57)) {
                    $lastStr = $lastStr . $str[$i];
                } else {
                    break;
                }
            } elseif (strlen($lastStr) > 0) {
                break;
            }
            //echo $lastStr . ' ';
        }
        if ($lastStr) {
            if ((int)$lastStr < -2147483648) {
                $lastStr = '-2147483648';
            }
            if ((int)$lastStr > 2147483647) {
                $lastStr = '2147483647';
            }
            return (int)$lastStr;
        } else {
            return 0;
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/16
 * Time: 10:04
 */
class Solution {

    /**
     * @param String $S
     * @return String
     */
    function compressString($S) {
        $bucket = '';
        $num = 0;
        for ($i = 0; $i < strlen($S); $i++) {
            if ($S[$i + 1] != $S[$i]) {
                $num++;
                $bucket .= $S[$i];
                $bucket .= $num;
                $num = 0;
            } else {
                $num++;
            }
        }

        print_r($bucket);print_r('/');
        return strlen($bucket) >= strlen($S) ? $S : $bucket;
    }
}

$str = 'abbccd';
$S = new Solution();
print_r($S->compressString($str));
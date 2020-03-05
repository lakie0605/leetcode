<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 11:16
 */
class Solution {

    /**
     * @param Integer[] $T
     * @return Integer[]
     */
    function dailyTemperatures($T) {
        $length = count($T);
        $result = [];
        $result[$length - 1] = 0;

        //从右向左遍历
        for ($i = $length - 2; $i >= 0; $i--) {
            // j+= result[j]是利用已经有的结果进行跳跃
            for ($j = $i + 1; $j < $length; $j+= $result[$j]) {
                if ($T[$j] > $T[$i]) {
                    $result[$i] = $j - $i;
                    break;
                } else if ($result[$j] == 0) { //遇到0表示后面不会有更大的值，那当然当前值就应该也为0
                    $result[$i] = 0;
                    break;
                }
            }
        }
        $result = array_reverse($result);
        return $result;
    }
}
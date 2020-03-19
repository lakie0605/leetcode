<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/19
 * Time: 15:14
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $bucket = [];
        $num = 0;
        $flag = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            isset($bucket[$s[$i]]) ? $bucket[$s[$i]]++ : $bucket[$s[$i]] = 1;
        }
        if (count($bucket) == 1) {
            return $bucket[$s[0]];
        }
        sort($bucket);
        foreach ($bucket as $key => $value) {
            $rem = $value % 2;
            if ($rem == 0) {
                $num += $value;
            } else {
                if ($flag == 0) {
                    $num += $value;
                    $flag++;
                } else {
                    $num += $value - 1;
                }
            }
        }
        return $num;
    }
}

$s = 'civilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth';
$S = new Solution();
print_r($S->longestPalindrome($s));
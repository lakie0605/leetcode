<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/9
 * Time: 17:49
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Integer[]
     */
    function reversePrint($head) {
        $arr = [];
        while ($head != null) {
            $arr[] = $head->val;
            $head = $head->next;
        }
        return array_reverse($arr);
    }
}
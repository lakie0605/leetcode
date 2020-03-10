<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/5
 * Time: 14:18
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $sum = null;
        $currentNode = null;
        $temp = 0;
        while ($l1 !== null || $l2 !== null) {
            if ($l1 !== null) {
                $A = $l1->val;
                $l1 = $l1->next;
            } else {
                $A = -1;
            }
            if ($l2 !== null) {
                $B = $l2->val;
                $l2 = $l2->next;
            } else {
                $B = -1;
            }
            $C = ($A != -1 ? $A : 0) + ($B != -1 ? $B : 0) + $temp;
            $temp = $C >= 10 ? intval($C / 10) : 0;
            $add = $C % 10;
            $linkAdd = new listNode($add);
            if ($sum == null) {
                $sum = $linkAdd;
                $currentNode = $sum;
            } else {
                $currentNode->next = $linkAdd;
                $currentNode = $currentNode->next;
            }
            if ($temp > 0) {
                $currentNode->next = new listNode($temp);
            }
        }
        //print_r($sum);
        return $sum;
    }
}
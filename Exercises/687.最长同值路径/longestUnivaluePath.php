<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/10
 * Time: 16:56
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    private $res = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function longestUnivaluePath($root) {
        $this->depth($root);
    }

    function depth($node) {
        if ($node == null) {
            return 0;
        }
        $left = $this->depth($node->left);
        $right = $this->depth($node->right);
        $leftNum = 0;$rightNum = 0;
        if ($node->left != null && $node->left->val == $node->val) {
            $leftNum += $left + 1;
        }
        if ($node->right != null && $node->right->val == $node->val) {
            $rightNum += $right + 1;
        }
        $this->res = max($this->res, $leftNum + $rightNum);
        return max($leftNum, $rightNum);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/10
 * Time: 9:57
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

    public $res = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root) {
        $this->depth($root);
        return $this->res;
    }

    function depth($node) {
        if ($node == null) {
            return 0;
        }
        $left = $this->depth($node->left);
        $right = $this->depth($node->right);
        $this->res = max($this->res, ($left + $right));
        return max($left, $right) + 1;
    }
}
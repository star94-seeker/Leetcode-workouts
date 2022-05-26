<?php
/*
Palindrome Number

Given an integer x, return true if x is palindrome integer.
An integer is a palindrome when it reads the same backward as forward.
For example, 121 is a palindrome while 123 is not.

Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
*/

use Solution as GlobalSolution;

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(String $x) {

        $length = strlen($x);
        $l = $length-1;
        $m = (int)($length/2);
        $f = 0;
        for($i=0;$i<=$m;$i++)
        { 
            if($i<=$l)
            {
                if($x[$i] != $x[$l])
                {
                    $f = 1;
                    break;
                }
            }
            $l = $l-1;
        }
        
        return $f == 1 ? false : true;
    }
}

$obj1 = new Solution();
$obj1->isPalindrome(-121);

?>
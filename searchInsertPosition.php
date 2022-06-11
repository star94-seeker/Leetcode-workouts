<?php
/*
Search Insert Position

Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

You must write an algorithm with O(log n) runtime complexity.

Example 1:

Input: nums = [1,3,5,6], target = 5
Output: 2
Example 2:

Input: nums = [1,3,5,6], target = 2
Output: 1
Example 3:

Input: nums = [1,3,5,6], target = 7
Output: 4

*/

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert(array $nums, int $target)
    {
        if (false !== $key = array_search($target, $nums)) {
            return $key;
        } else {
            if ($nums[0] > $target) {
                return 0;
            } else if ($nums[count($nums) - 1] < $target) {
                return count($nums);
            } else {
                for ($i = 0; $i <= count($nums); $i++) {
                    if ($nums[$i] < $target && $target < $nums[$i + 1]) {
                        return $i + 1;
                    }
                }
            }
        }
    }
}

$obj1 = new Solution();
echo $obj1->searchInsert([1, 3, 5, 6], 4);

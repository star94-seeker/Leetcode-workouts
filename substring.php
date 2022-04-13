<?php 

/* 
Number of Strings That Appear as Substrings in Word	

Example 1:

Input: patterns = ["a","abc","bc","d"], word = "abc"
Output: 3
Explanation:
- "a" appears as a substring in "abc".
- "abc" appears as a substring in "abc".
- "bc" appears as a substring in "abc".
- "d" does not appear as a substring in "abc".
3 of the strings in patterns appear as a substring in word.


Example 2:
Input: patterns = ["a","b","c"], word = "aaaaabbbbb"
Output: 2
Explanation:
- "a" appears as a substring in "aaaaabbbbb".
- "b" appears as a substring in "aaaaabbbbb".
- "c" does not appear as a substring in "aaaaabbbbb".
2 of the strings in patterns appear as a substring in word.
Example 3:

Input: patterns = ["a","a","a"], word = "ab"
Output: 3
Explanation: Each of the patterns appears as a substring in word "ab". 
*/

class Solution {

    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings($patterns, $word) {
        $count = 0;

        for($i=0;$i<count($patterns);$i++)
        {
            if (strpos($word, $patterns[$i]) !== false) {
                $count++;
            }
        }
        return $count;
    }
}

$patterns = ["a","ab","bc","ab"];
$word = "aaaaabbbbb";
$obj1 = new Solution();
$obj1->numOfStrings($patterns, $word);

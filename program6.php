<?php
function isPalindrome($str) {
    $reversed = strrev($str);
    return $str === $reversed ? "$str is a palindrome." : "$str is not a palindrome.";
}

echo isPalindrome("madam");
?>

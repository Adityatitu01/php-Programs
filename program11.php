<?php
function isNumberPalindrome($num) {
    return $num == strrev($num) ? "$num is a palindrome." : "$num is not a palindrome.";
}

echo isNumberPalindrome(121);
?>

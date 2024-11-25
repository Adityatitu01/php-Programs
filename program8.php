<?php
function countVowels($str) {
    $count = preg_match_all('/[aeiouAEIOU]/', $str);
    return "The number of vowels in '$str' is: $count";
}

echo countVowels("Aditya Tiwari");
?>

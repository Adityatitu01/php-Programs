<?php
function findLargest($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return "$a is the largest number.";
    } elseif ($b >= $a && $b >= $c) {
        return "$b is the largest number.";
    } else {
        return "$c is the largest number.";
    }
}

echo findLargest(10, 20, 30);  // Test with 3 numbers
?>

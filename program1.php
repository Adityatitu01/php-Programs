<?php
function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        echo "$num is an even number.";
    } else {
        echo "$num is an odd number.";
    }
}

checkEvenOdd(10);  // Test with number 10
?>

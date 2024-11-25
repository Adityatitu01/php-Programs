<?php
function charFrequency($str) {
    $freq = count_chars($str, 1);
    foreach ($freq as $char => $count) {
        echo chr($char) . ": $count\n";
    }
}

charFrequency("Have a good day");
?>

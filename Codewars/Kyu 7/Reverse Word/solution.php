<?php

function reversedWord($str) {
    return implode(' ', array_map('strrev', explode(' ', $str)));
}

?>

<?php
function createPhoneNumber($numbers) {
    $format = sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$numbers);
    return $format;
}
?>

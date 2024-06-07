<?php
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
fclose($stdin);

if ($n % 2 != 0 || ($n >= 6 && $n <= 20)) {
    echo "Weird";
} else {
    echo "Not Weird";
}
?>


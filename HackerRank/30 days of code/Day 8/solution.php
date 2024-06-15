<?php
$stdin = fopen("php://stdin", "r");

$n = intval(fgets($stdin));

$phone_book = [];

for ($i = 0; $i < $n; $i++) {
    $entry = explode(" ", fgets($stdin));
    $name = trim($entry[0]);
    $number = trim($entry[1]);
    $phone_book[$name] = $number;
}

while ($line = fgets($stdin)) {
    $query = trim($line);
    if (isset($phone_book[$query])) {
        echo $query . "=" . $phone_book[$query] . "\n";
    } else {
        echo "Not found\n";
    }
}

fclose($stdin);
?>


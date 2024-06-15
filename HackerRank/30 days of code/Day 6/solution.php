<?php

function solution($s) {
    $evenWords = "";
    $oddWords = "";
    $length = strlen($s);
    for($i = 0; $i < $length; $i++) 
    {
        if($i % 2 === 0 )
            $evenWords .= $s[$i];
        if($i % 2 !== 0)
            $oddWords .= $s[$i];
    }
    $result = $evenWords . " " . $oddWords . "\n";
    return $result;
}
?>

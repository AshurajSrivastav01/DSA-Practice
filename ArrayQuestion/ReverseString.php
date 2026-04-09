<?php

$name = 'Hello World';
$reverseName = '';
for ($i = strlen($name) - 1; $i >= 0; $i--) {
    $reverseName .= $name[$i];
}
echo "Reversed String: " . $reverseName;
echo "\n";

<?php

$string = "This is the right regex to maiStch all the words that contain 'is'?";

preg_match_all("/\w*is\w*/i", $string, $matches);
$result = $matches[0];

echo "This is all words that contain 'is':", PHP_EOL;

print_r($result);
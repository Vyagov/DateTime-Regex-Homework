<?php

$string = "Ting is the rtinght ting regex to match all interesting the wordsing that contain 'ting'?";

preg_match_all("/\w*ting\b/i", $string, $matches);
$result = $matches[0];


print_r($result);
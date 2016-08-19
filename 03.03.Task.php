<?php

$string = "Ting is the rtinght ting regex to match all inter.esting the wordsing that contain 'ting'?";

preg_match_all("/\b[a-z]+\b/i", $string, $matches);
$result = $matches[0];


print_r($result);
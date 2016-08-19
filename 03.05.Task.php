<?php

$string = '0899 11-22-33; 0888 11-22-33; 0878123456; 0888/123 456';

preg_match_all("/08[7-9][0-9](\s*|\/)([0-9](\s*|\-*)){6}/", $string, $matches);
$result = $matches[0];


print_r($result);
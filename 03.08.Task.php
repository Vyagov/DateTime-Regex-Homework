<?php

$string = 'Иван Иванов, Иванка Иванова, Искрен Миленов, Иван Николов';

preg_match_all("/\s?(иван\s[а-я]*)\s?/iu", $string, $matches);
$result = $matches[0];


print_r($result);
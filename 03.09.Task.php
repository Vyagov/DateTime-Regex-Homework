<?php

$string = 'OB 9586 AM, EB 6633 AH, CT 9427 BH, CA 1415 HT, CT 6666 BB';

preg_match_all("/\s?(CT\s?\d{4}\s?[a-z]{0,2})\s?/i", $string, $matches);

$result = $matches[0];


print_r($result);
<?php

$string = 'ivan.nikolov@gmail.com, ivan.nikolov@abv.bg, ivan_gmail.com, ivan@gmail-com';

preg_match_all("/([a-z0-9\._-])+(@gmail\.com)/i", $string, $matches);

$result = $matches[0];


print_r($result);
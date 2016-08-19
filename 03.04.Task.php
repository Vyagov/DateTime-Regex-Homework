<?php

$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem odit quis in aspernatur. Tempore perferendis necessitatibusdolor quo sunt excepturi dolorem rem esse vero officia repellat incidunt similique voluptatem saepe!';

preg_match_all("/[A-Z]+[a-z,'\" ]+[\.|\?|\!]/", $string, $matches);
$result = $matches[0];


print_r($result);
<?php

$string = <<<EOT
1000
45455
2000
900
333
5559
1110
10000
19001
15454
19000
20099
60666
9940
EOT;

preg_match_all("/\b((([0-9]){4})|(1[0-8]([0-9]){3})|19(0){3})\b/", $string , $matches);

$result = $matches[0];


print_r($result);
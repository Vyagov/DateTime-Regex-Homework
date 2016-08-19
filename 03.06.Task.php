<?php

$string = <<<EOT
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
</head>
<body>	
</body>
</html>
EOT;

preg_match_all("/\<{0,1}[a-z\! \/\-\"\=\d]+(\s\/>|[\s[a-z(=\")]+]*>|>)/i", $string , $matches);

$result = $matches[0];


print_r($result);

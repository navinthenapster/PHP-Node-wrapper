<?php

function check(){

while (@ ob_end_flush());

$handle = popen("node check.js ", "r");

echo "'$handle'; " . gettype($handle) . "\n";

while(!feof($handle))
{
$read = fread($handle,100);
echo $read;
}

echo "ENDING";

pclose($handle);
// $read = fread($handle);
// echo $read;
}

check();

echo "DONE";

?>


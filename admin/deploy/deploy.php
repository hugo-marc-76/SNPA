<?php

ini_set('display_errors', '-1');
error_reporting( E_ALL );



echo 'test1';
$output = shell_exec('ls');
echo "<pre>$output</pre>";
?>

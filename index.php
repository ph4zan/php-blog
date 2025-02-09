<?php
$string = 'eric.mann@cookbook.php';
$start = strpos($string, '@');
$domain = substr($string, $start + 1);
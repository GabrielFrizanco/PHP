<?php
$name = 'COOKIE_NAME';
$value = 'VALUE';
$expireTime = strtotime('+1 years');
$path = '/';
setcookie($name,$value,$expireTime,$path);
?>
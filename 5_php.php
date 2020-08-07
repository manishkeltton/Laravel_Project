<?php
$target = '3_php.php';
$link = '3_php';
symlink($target, $link);

echo readlink($link);
?>

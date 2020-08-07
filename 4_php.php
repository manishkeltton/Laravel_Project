<?php
$target = '2_php.php';
$link = '2_php';
symlink($target, $link);

echo readlink($link);
?>

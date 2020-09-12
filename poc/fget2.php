<?php
require_once('../Safelity.php');

print file_get_contents_safely($_GET['dir'],'hello.txt');
?>

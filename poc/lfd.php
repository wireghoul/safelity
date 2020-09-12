<?php
require_once('../Safelity.php');

$fh = fopen_safely("./",$_GET['fn'], "r");
print fread($fh,10000);
fclose($fh);
?>

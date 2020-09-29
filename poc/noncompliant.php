<?php
include("../Safelity.php");

$file="hello.txt";
echo file_get_contents($file);

$dir = "./";
echo file_get_contents_safely($dir, $file);

echo exec_safely("echo",array("1","2","3"));
?>

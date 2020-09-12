<?php
require_once('../Safelity.php');

print file_get_contents_safely("./",$_GET['fn']);

/*
function file_get_contents_safely($dir, $file) {
    $err = "No streams allowed";
    if (no_stream($dir)) {
        $err = "No such directory: $dir";
        if (is_dir($dir)) {
            $err = "Unable to open file: $file";
            if (basename($file) === $file) {
                return file_get_contents($dir . $file);
            }
        }
    }
    error_safely($err);
}
*/

?>

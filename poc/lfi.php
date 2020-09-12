<?php
require_once('../Safelity.php');

require_safely("./",$_GET['fn']);

/*
function include_safely($dir, $file) {
    $err = "No streams allowed";
    if (no_stream($dir)) {
        $err = "No such directory: $dir";
        if (is_dir($dir)) {
            $err = "Unable to include file: $file";
            if (basename($file) === $file) {
                return include($dir . $file);
            }
        }
    }

    error_safely($err);
}
*/
?>

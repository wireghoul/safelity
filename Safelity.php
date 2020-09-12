<?php
/* Safelity is a PHP library that enables more secure coding
 * Written by Eldar Marcussen (@Wirehoul) - justanotherhacker.com
 *
 * Version 0.1 - 2020-09-01
 */

function no_stream($string) {
    if (strstr($string, ":") === false) {
        return true;
    }
    return false;
}

function error_safely($message) {
    error_log(addslashes($message));
    exit();
}

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

function require_safely($dir, $file) {
    return include_safely($dir, $file);
}


function fopen_safely($dir, $file, $perms) {
    $err = "No streams allowed";
    if (no_stream($dir)) {
        $err = "No such directory: $dir";
        if (is_dir($dir)) {
            $err = "Unable to open file: $file";
            if (basename($file) === $file) {
                return fopen($file, $perms);
            }
        }
    }
    error_safely($err);
}

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

function funlink_safely($dir, $file) {
    $err = "No streams allowed";
    if (no_stream($dir)) {
        $err = "No such directory: $dir";
        if (is_dir($dir)) {
            $err = "Unable to unlink file: $file";
            if (basename($file) === $file) {
                return unlink($dir . $file);
            }
        }
    }
    error_safely($err);
}


function exec_safely($cmd, $args) {
    $cmd = escapeshellcmd("$cmd ");
    foreach ($args as $arg) {
        $cmd.=escapeshellarg($arg )." ";
    }
    return shell_exec($cmd);
}

?>

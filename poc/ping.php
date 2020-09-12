<html><body>
<pre><?php
require_once('../Safelity.php');

print exec_safely("ping",Array('-c 1', '--', $_GET['h']));

/*
function exec_safely($cmd, $args) {
    $cmd = escapeshellcmd("$cmd ");
    foreach ($args as $arg) {
        $cmd.=escapeshellarg($arg )." ";
    }
    return shell_exec($cmd);
}
*/

?></pre>

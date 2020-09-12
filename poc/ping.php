<html><body>
<pre><?php
require_once('../Safelity.php');

print exec_safely("ping",Array('-c 1', '--', $_GET['h']));

?></pre>

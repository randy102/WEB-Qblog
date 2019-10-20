<?php

$ls = array(
"http://x.co/6nLNo"
                  );
$ac = count($ls) - 1;
$rd = rand (0,$ac);
$rda = $ls[$rd];
header("location:".$rda);

?>
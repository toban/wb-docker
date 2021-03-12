<?php

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance.
    // You should change $wgServer to match the non-local host running Parsoid
    'url' => $wgServer . $wgScriptPath . '/rest.php',
    // Parsoid "domain", see below (optional, rarely needed)
    // 'domain' => 'localhost',
);
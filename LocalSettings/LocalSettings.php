<?php

# Federated Properties
$wgWBRepoSettings['federatedPropertiesEnabled'] = true;

# simulate source API errors via request header
if( isset ( $_SERVER['HTTP_X_FEDPROPS_SOURCEAPIRESPONSE'] ) ) {
   $wgParserCacheType = CACHE_NONE;
   $code = $_SERVER['HTTP_X_FEDPROPS_SOURCEAPIRESPONSE'];

   if( $code == 404 ) {
      $wgWBRepoSettings['federatedPropertiesSourceScriptUrl'] = 'http://notFound.404';
   }
}

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance.
    // You should change $wgServer to match the non-local host running Parsoid
    'url' => 'http://' . $_ENV['WIKIBASE_HOST'] . $wgScriptPath . '/rest.php',
    // Parsoid "domain", see below (optional, rarely needed)
    // 'domain' => 'localhost',
);
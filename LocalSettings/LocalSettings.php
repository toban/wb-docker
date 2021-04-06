<?php

// error reporting
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowExceptionDetails = true;
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgShowDBErrorBacktrace = true;

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

$wgCaptchaQuestions = [
  'What animal' => 'car',
];

$wgCaptchaTriggers['edit']          = true;
$wgCaptchaTriggers['create']        = true;
$wgCaptchaTriggers['createtalk']    = true;
$wgCaptchaTriggers['addurl']        = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin']      = true;


$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance.
    // You should change $wgServer to match the non-local host running Parsoid
    'url' => 'http://' . $_ENV['WIKIBASE_HOST'] . $wgScriptPath . '/rest.php',
    // Parsoid "domain", see below (optional, rarely needed)
    // 'domain' => 'localhost',
);
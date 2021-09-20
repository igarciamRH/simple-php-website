<?php

// Comment these lines to hide errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/config.php';
require 'includes/functions.php';

init();

if ( isset($_GET["tlsport"]) && isset($_GET["tlsurl"]) ) {
  $command = "openssl s_client -connect " . $_GET["tlsurl"] . ":" . $_GET["tlsport"] . " -starttls smtp -showcerts < /dev/null";
  echo system($command);
}

echo phpinfo();

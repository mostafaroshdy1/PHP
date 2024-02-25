<?php

require_once 'vendor/autoload.php';
$params = session_get_cookie_params();
$params['lifetime'] = 3600; // Set the cookie lifetime to 1 hour (adjust as needed)
$params['path'] = '/';      // Set the path for the cookie
$params['domain'] = '';     // Set the domain for the cookie (empty for current domain)
$params['secure'] = false;  // Set to true if using HTTPS
$params['httponly'] = true; // Set to true to prevent JavaScript access to the cookie

session_set_cookie_params($params['lifetime'], $params['path'], $params['domain'], $params['secure'], $params['httponly']);

// Start the session
session_start();


$counter = new Counter();

if (!Visitor::isCounted()) {
    $counter->incrementCount();
}


echo "Unique visits: " . $counter->getCount();
<?php

require_once 'vendor/autoload.php';
$counter = new Counter();

if (!Visitor::isCounted()) {
    $counter->incrementCount();
}


echo "Unique visits: " . $counter->getCount();
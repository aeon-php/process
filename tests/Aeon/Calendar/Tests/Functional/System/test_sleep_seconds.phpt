--TEST--
Test system sleep
--FILE--
<?php

use Aeon\Calendar\TimeUnit;
use Aeon\Calendar\System\SystemProcess;
use Aeon\Calendar\Gregorian\GregorianCalendar;

require __DIR__ . '/../../../../../../vendor/autoload.php';

$start = GregorianCalendar::UTC()->now();
SystemProcess::current()->sleep(TimeUnit::precise(2.5));
$end = GregorianCalendar::UTC()->now();

var_dump($start->until($end)->distance()->inSeconds());

--EXPECTF--
int(2)
<?php

require 'vendor/autoload.php';
use App\TestFormat;

$test_service = new TestFormat();
echo $test_service->testFormatString('Hello world', 'html');
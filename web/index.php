<?php
require  __DIR__ . '/../vendor/autoload.php';

echo "OK";

Corley\CloudWatch\Agent::point("wdm", "test", rand(1, 200));


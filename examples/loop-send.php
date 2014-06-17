<?php
require __DIR__ . '/../vendor/autoload.php';

for (;;) {
    Corley\CloudWatch\Agent::point("wdm", "test", rand(1, 200));
    Corley\CloudWatch\Agent::point("wdm", "test2", rand(1, 200));
}

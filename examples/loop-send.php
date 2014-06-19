<?php
require __DIR__ . '/../vendor/autoload.php';

for (;;) {
    Corley\CloudWatch\Agent::point("wdm", "test", rand(1, 200));
    Corley\CloudWatch\Agent::point("wdm", "test2", 1, ["op" => 'sum']);
    Corley\CloudWatch\Agent::point("wdm", "test3", rand(1, 200), ["unit" => "Milliseconds"]);
    usleep(10);
}

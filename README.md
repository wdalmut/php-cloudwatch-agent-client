# PHP CloudWatch Agent Client

Send data collected into a PHP application to the running agent

## Install

Use composer

```
{
    "require": {
        "corley/cloudwatch-agent-client": "*"
    }
}
```

## How to use

The API is very simple, just a simple call

```
Corley\CloudWatch\Agent::point($namespace, $metric, $value);
```

You can also send the unit and the operation

```
Agent::point($namespace, $metric, $value, ["unit" => Agent::UNIT_MILLISECONDS]);
Agent::point($namespace, $metric, 1, ["op" => Agent::OP_SUM]);
```

Valid units are:

  * "Seconds",
  * "Microseconds",
  * "Milliseconds",
  * "Bytes",
  * "Kilobytes",
  * "Megabytes",
  * "Gigabytes",
  * "Terabytes",
  * "Bits",
  * "Kilobits",
  * "Megabits",
  * "Gigabits",
  * "Terabits",
  * "Percent",
  * "Count",
  * "Bytes/Second",
  * "Kilobytes/Second",
  * "Megabytes/Second",
  * "Gigabytes/Second",
  * "Terabytes/Second",
  * "Bits/Second",
  * "Kilobits/Second",
  * "Megabits/Second",
  * "Gigabits/Second",
  * "Terabits/Second",
  * "Count/Second",


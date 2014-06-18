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

You can also send the unit

```
Agent::point($namespace, $metric, $value, ["unit" => Agent::UNIT_MILLISECONDS]);
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


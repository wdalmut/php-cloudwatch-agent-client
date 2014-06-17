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


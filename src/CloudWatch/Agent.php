<?php
namespace Corley\CloudWatch;

class Agent
{
    public static function point($namespace, $metric, $value)
    {
        $message = json_encode(array('namespace' => $namespace, 'metric' => $metric, 'value' => floatval($value)));
        $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        socket_sendto($sock, $message, strlen($message), 0, '127.0.0.1', 1234);
        socket_close($sock);
    }
}

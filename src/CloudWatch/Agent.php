<?php
namespace Corley\CloudWatch;

class Agent
{
    const UNIT_SECONDS = "Seconds";
    const UNIT_MILLISECONDS = "Milliseconds";
    const UNIT_BYTES = "Bytes";
    const UNIT_KILOBYTES = "Kilobytes";
    const UNIT_MEGABYTES = "Megabytes";
    const UNIT_GIGABYTES = "Gigabytes";
    const UNIT_TERABYTES = "Terabytes";
    const UNIT_BITS = "Bits";
    const UNIT_KILOBITS = "Kilobits";
    const UNIT_MEGABITS = "Megabits";
    const UNIT_GIGABITS = "Gigabits";
    const UNIT_TERABITS = "Terabits";
    const UNIT_PERCENT = "Percent";
    const UNIT_COUNT = "Count";
    const UNIT_BYTES_SECOND = "Bytes/Second";
    const UNIT_KILOBYTES_SECOND = "Kilobytes/Second";
    const UNIT_MEGABYTES_SECOND = "Megabytes/Second";
    const UNIT_GIGABYTES_SECOND = "Gigabytes/Second";
    const UNIT_TERABYTES_SECOND = "Terabytes/Second";
    const UNIT_BITS_SECOND = "Bits/Second";
    const UNIT_KILOBITS_SECOND = "Kilobits/Second";
    const UNIT_MEGABITS_SECOND = "Megabits/Second";
    const UNIT_GIGABITS_SECOND = "Gigabits/Second";
    const UNIT_TERABITS_SECOND = "Terabits/Second";
    const UNIT_COUNT_SECOND = "Count/Second";

    public static function point($namespace, $metric, $value, $options = array())
    {
        $message = array('namespace' => $namespace, 'metric' => $metric, 'value' => floatval($value));

        if (is_array($options) && array_key_exists("unit", $options)) {
            $message["unit"] = $options["unit"];
        }

        $json_message = json_encode($message);
        $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        socket_sendto($sock, $json_message, strlen($json_message), 0, '127.0.0.1', 1234);
        socket_close($sock);
    }
}

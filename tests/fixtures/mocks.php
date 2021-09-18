<?php

declare(strict_types=1);

namespace Platine\Console\Command;

$mock_function_exists_to_true = false;
$mock_function_exists_to_false = false;
$mock_proc_open_to_res = false;
$mock_proc_open_to_false = false;
$mock_is_resource_to_false = false;
$mock_is_resource_to_true = false;
$mock_proc_get_status_to_false = false;
$mock_proc_get_status_to_array = false;
$mock_proc_get_status_to_array_running_false = false;
$mock_stream_get_contents_to_foo = false;
$mock_stream_get_contents_to_false = false;


function stream_get_contents($val)
{
    global $mock_stream_get_contents_to_foo,
            $mock_stream_get_contents_to_false;

    if ($mock_stream_get_contents_to_false) {
        return false;
    }

    if ($mock_stream_get_contents_to_foo) {
        return 'foo';
    }

    return \stream_get_contents($val);
}

function proc_get_status($val)
{
    global $mock_proc_get_status_to_false,
            $mock_proc_get_status_to_array,
            $mock_proc_get_status_to_array_running_false;

    if ($mock_proc_get_status_to_false) {
        return false;
    }

    if ($mock_proc_get_status_to_array) {
        return [
            'command' => 'cmd',
            'pid' => 1829,
            'running' => $mock_proc_get_status_to_array_running_false
                        ? false
                        : true,
            'signaled' => true,
            'stopped' => false,
            'exitcode' => 0,
            'termsig' => 034,
            'stopsig' => 134,
        ];
    }

    return \proc_get_status($val);
}

function function_exists($val)
{
    global $mock_function_exists_to_true,
            $mock_function_exists_to_false;
    if ($mock_function_exists_to_true) {
        return true;
    }

    if ($mock_function_exists_to_false) {
        return false;
    }

    return \function_exists($val);
}

function is_resource($val)
{
    global $mock_is_resource_to_true,
            $mock_is_resource_to_false;
    if ($mock_is_resource_to_true) {
        return true;
    }

    if ($mock_is_resource_to_false) {
        return false;
    }

    return \is_resource($val);
}


function proc_open(
    $cmd,
    array $descriptorspec,
    array &$pipes,
    string $cwd = null,
    array $env = null,
    array $other_options = null
) {
    global $mock_proc_open_to_res,
            $mock_proc_open_to_false;
    if ($mock_proc_open_to_false) {
        return false;
    }

    if ($mock_proc_open_to_res) {
        return;
    }

    return \proc_open(
        $cmd,
        $descriptorspec,
        $pipes,
        $cwd,
        $env,
        $other_options
    );
}

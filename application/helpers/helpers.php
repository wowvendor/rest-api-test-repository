<?php
defined('ABSPATH') || die('Cheatin?');

function is_rest_api_call(): bool
{
    if (false !== strpos($_SERVER['REQUEST_URI'], 'api')) {
        return true;
    } else {
        return false;
    }
}

function is_route_match(array $route): bool
{
    if (strtolower($_SERVER['REQUEST_METHOD']) == $route['method'] && false !== strpos($_SERVER['REQUEST_URI'], $route['route'])) {
        return true;
    } else {
        return false;
    }
}

function send_json_response(array $response_array, string $status = 'Success'): void
{
    $response = array(
        'responseCode' => 200,
        'responseText' => $status,
        'responseJson' => $response_array
    );
    $response = json_encode($response);

    die($response);
}
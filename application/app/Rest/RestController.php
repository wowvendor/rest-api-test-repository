<?php


namespace App\Rest;

defined('ABSPATH') || die('Cheatin?');

use App\Factory\AppBootstrap;
use App\Rest\Request\RestRequest;


class RestController extends AppBootstrap
{

    protected static $instance = null;

    private $available_rest_versions;

    private $available_rest_routes;

    protected function init(): void
    {

    }

    public function addRoute(string $method, int $version, string $namespace, string $name, string $callback)
    {
        $version = 'v' . $version;
        $this->available_rest_versions[$version] = $version;
        $this->available_rest_routes["$version"][] = array(
            'method' => $method,
            'route' => "$version/$namespace/$name",
            'callback' => $callback
        );
    }

    public function setResponse(): void
    {
        foreach ($this->available_rest_routes as $version => $route_array) {
            foreach ($route_array as $route) {
                if (is_route_match($route)) {
                    $callback = $route['callback'];
                    $callback = "\App\Rest\Endpoints\\$callback";
                    $callable_content = new $callback;
                    send_json_response($callable_content);
                }
            }
        }
        send_json_response(
            array(
                'content' => 'Rest has no route'
            ),
            'Fail');
    }


    public function getAvailableRestVersions(): array
    {
        return $this->available_rest_versions;
    }

    /**
     * @return array
     */
    public function getAvailableRestRoutes(): array
    {
        return $this->available_rest_routes;
    }

}
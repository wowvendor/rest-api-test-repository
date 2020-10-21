<?php


namespace App\Rest\Factory;

defined('ABSPATH') || die('Cheatin?');

use App\Factory\AppBootstrap;
use App\Rest\Interfaces\InterfaceRestApiEndpointResponse;
use App\Rest\Request\RestRequest;

abstract class RestApiEndpointFactory implements InterfaceRestApiEndpointResponse
{
    protected $params;

    public function __construct($params = array())
    {
        $this->params = $params;
        $this->sendResponse();
    }

    protected function sendResponse()
    {
        $response = $this->setResponse();
        send_json_response($response);
    }
}
<?php


namespace App\Rest\Endpoints;

defined('ABSPATH') || die('Cheatin?');

use App\Rest\{Factory\RestApiEndpointFactory};

class DummyEndpoint extends RestApiEndpointFactory
{


    public function setResponse(): array
    {
        $params = $this->params;

        return array(
            'params' => $params,
            'content' => 'Help, the cat is holding me hostage'
        );
    }
}
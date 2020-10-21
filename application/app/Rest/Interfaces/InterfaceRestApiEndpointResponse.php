<?php

namespace App\Rest\Interfaces;

defined('ABSPATH') || die('Cheatin?');

use App\Rest\Request\RestRequest;

interface InterfaceRestApiEndpointResponse{
    public function setResponse(): array;
}
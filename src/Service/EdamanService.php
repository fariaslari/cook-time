<?php

// src/Service/EdamanService.php
namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use GuzzleHttp\Client;

class EdamanService
{
    // private $request, $api;

    public function __construct(Container $container)
    {   
        $this->container = $container;
        $this->client = new Client([
            'base_uri' => 'http://api.edamam.com/',
            'timeout'  => 30.0,
        ]);
        
        $this->auth = [
            'app_id' => $this->container->getParameter('edamam_api_app_id'),
            'app_key' => $this->container->getParameter('edaman_api_app_key')
        ];
    }

    public function searchRecipe($filter)
    {
        $query = [];
        if(is_array($filter)){
            $query = array_merge($this->auth,$filter);
        }

        $response = $this->client->request('GET', 'search', [
            'query' => $query
        ]);

        $body = $response->getBody();
        $content = json_decode($body->getContents(), true);

        return $content;
    }
}
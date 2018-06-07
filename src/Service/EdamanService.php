<?php

// src/Service/EdamanService.php
namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class EdamanService
{
    // private $request, $api;

    public function __construct(Container $container)
    {   
        $this->container = $container;
    }

    public function searchRecipe($filter)
    {
       
    }
}
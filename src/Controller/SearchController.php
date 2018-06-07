<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\EdamanService;

class SearchController extends AbstractController
{
    public function __construct(EdamanService $edamanService)
    {
        $this->edamanService = $edamanService;
    }

    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        return $this->render('search/search.html.twig', [
            'controller_name' => 'SearchController',
            'teste' => $this->edamanService->searchRecipe([])
        ]);
    }
    
}

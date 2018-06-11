<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PostType;
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
    public function new(Request $request)
    {
        $teste = '';
        return $this->render('search/search.html.twig', [
            'teste' => $teste
        ]);
    }
    
}

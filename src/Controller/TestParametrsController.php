<?php
// src/Controller/TestParametrsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestParametrsController extends AbstractController
{

    /**
     * @Route("/blog/{page}", name="Number Name my custom TestParametrsController route", requirements={"page"="\d+"})
     */
    public function list(int $page=1)
    {
        $statementFact = 'Це нумерована адрема сторінки';
        return $this->render('TestParametrs/TestParametrs.html.twig', [
            'statementFact' => $statementFact,
            'slug' => false
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="text_name_url")
     */
    public function show($slug)
    {
        $statementFact = 'Це текстова адреса сторінки';
        return $this->render('TestParametrs/TestParametrs.html.twig', [
            'statementFact' => $statementFact,
            'slug' => $slug
        ]);
    }
}